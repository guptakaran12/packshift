<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Jobs\SendWelcomeEmailJob;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showRegistrationPage()
    {
        return view('auth.register');
    }

    public function registrationFormSave(RegisterRequest $request)
    {
         $validatedData = $request->validated();
         DB::beginTransaction(); 

        try{
            $user =  User::create([
                'first_name'             => $validatedData['first_name'] ?? "",
                'last_name'              => $validatedData['last_name'] ?? "",
                'username'              => $validatedData['user_name'] ?? "",
                'first_name'             => $validatedData['first_name'] ?? "",
                'last_name'              => $validatedData['last_name'] ?? "",
                'email'                  => $validatedData['email'] ?? "",
                'password'               => Hash::make($validatedData['password']) ?? "",
                'confirm_password'  => Hash::make($validatedData['password_confirmation']) ?? "",
            ]);
            
            DB::commit();  
            Auth::login($user);
            $user = Auth::user();
            $token = $user->createToken('UserLoginToken')->accessToken;
            SendWelcomeEmailJob::dispatch($user,'register');
           
            // Flash message
            session()->flash('toastMessage', [
                'message' => 'You have successfully logged in with Google!',
                'type' => 'success',
                'position' => 'top-center',
            ]);
            
            return response()->json(['status' => true, 'redirect_url' => route('dashboard')],200);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['status' => false, 'msg' => 'Registration failed!', 'error' => $e->getMessage()],500);
        }
    }

    public function showLoginPage()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
    
        return view('auth.login');
    }

    public function loginFormSave(Request $request)
    {
        $requestData = $request->only(['user_name_or_email', 'password', 'password_confirmation']);


        $validator = Validator::make($requestData, [
            'user_name_or_email'         => ['required', 'string', 'max:50'],
            'password'                   => ['required', 'min:6', 'regex:/^(?=.*[A-Z]).+$/','confirmed'],
            'password_confirmation'      => ['required', 'min:6', 'regex:/^(?=.*[A-Z]).+$/'],

        ], [
            'user_name_or_email.required'       => 'The username or email is required.',
            'user_name_or_email.max'            => 'The username or email cannot exceed 50 characters.',
            'password.required'                 => 'Password is required.',
            'password.required'                 => 'Password is required.',
            'password.min'                      => 'Password must be at least 6 characters.',
            'password.regex'                    => 'Password must contain at least one uppercase letter.',
            'password.confirmed'                => 'Passwords do not match.',
            'password_confirmation.required'    => 'Confirm Password is required.',
            'password_confirmation.regex'       => 'Confirm Password must contain at least one uppercase letter.',
        ]);

        $input = $requestData['user_name_or_email'] ?? '';

        if (filter_var($input, FILTER_VALIDATE_EMAIL) === false && str_contains($input, '@')) {
            $validator->after(function ($validator) {
                $validator->errors()->add('user_name_or_email', 'Please enter a valid email address.');
            });
        }

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()], 200);
        }

        DB::beginTransaction();

        try{
            $credentials = filter_var($input, FILTER_VALIDATE_EMAIL)
            ? ['email' => $input, 'password' => $requestData['password']]
            : ['username' => $input, 'password' => $requestData['password']];
            
            if(!Auth::attempt($credentials)){
                return response()->json(['status' => false,'message' => 'Invalid login credentials.','wrong_credentials' => false],200);
            }

            $user = Auth::user();
            $token = $user->createToken('UserLoginToken')->accessToken;

            if($user->login_mail == '0'){
                SendWelcomeEmailJob::dispatch($user);
                $user->login_mail = 1;
                $user->save();
            }

            DB::commit();

            // Flash session message
            session()->flash('toastMessage', [
                'message' => 'Welcome back! You have logged in successfully.',
                'type' => 'success',
                'position' => 'top-center',
            ]);

            return response()->json(['status' => true,'redirect_url' => route('dashboard')], 200);

        }catch (Exception $e) {
            DB::rollBack();
            return response()->json(['status' => false, 'msg' => 'Login failed!', 'error' => $e->getMessage()],500);
        }
    }

    public function showPasswordChangePage(Request $request)
    {
        $token = $request->token ?? "";
        $email = $request->email ?? "";

        $resetData = DB::table('password_resets')
        ->where('email', $email)
        ->where('token', $token)
        ->first();

        if (!$resetData) {
            abort(404, 'Invalid reset link.');
        }

        $tokenCreatedAt = Carbon::parse($resetData->created_at);
        if (Carbon::now()->diffInMinutes($tokenCreatedAt) > 60) {
            abort(403, 'Reset link has expired.');
        }

        return view('auth.reset_password',compact('email','token'));
    }
    
    public function showPasswordRequestPage()
    {
        return view('auth.request_password');
    }

    public function verifyResetEmail(Request $request)
    {
        $data = $request->data ?? "";
        $requestData = $request->only(['data']);
        $validator = Validator::make($requestData, [
            'data'         => ['required', 'string', 'max:50']
        ], [
            'data.required'       => 'The username or email is required.',
            'data.max'            => 'The username or email cannot exceed 50 characters.',
        ]);

        $input = $requestData['data'] ?? '';
        if (filter_var($input, FILTER_VALIDATE_EMAIL) === false && str_contains($input, '@')) {
            $validator->after(function ($validator) {
                $validator->errors()->add('data', 'Please enter a valid email address.');
            });
        }

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors(),'flag' => false], 200);
        }

        try{
        //Check Exists UserName Or Email Field
        if(filter_var($input, FILTER_VALIDATE_EMAIL)){
           $user = User::where('email', $input)->first();
        }else{
           $user = User::where('username', $input)->first();
        }
    
        if(!$user || $user == null){
            return response()->json(['status' => false, 'msg' => 'No account found with this username or email.','flag' => true],200);
        }

        // Save token to password_resets table
        $token = Str::random(64);
        DB::table('password_resets')->updateOrInsert(
            ['email' => $user->email],
            [
                'token' => $token,
                'created_at' => Carbon::now()
            ]
        );

        $resetLink = url("/password/reset?token={$token}&email={$user->email}");
        SendWelcomeEmailJob::dispatch($user,'forget',$resetLink);
        return response()->json(['status' => true, 'msg' => 'Mail sent! Please check your email to reset your password.', 'redirect_url' => $resetLink],200);
        } catch (Exception $e) {
            return response()->json(['status' => false, 'msg' => 'Something Went failed!', 'error' => $e->getMessage()],500);
        }
    }

    public function resetPasswordSave(Request $request)
    {
        $requestData = $request->only(['new_password', 'confirm_password','email']);

        $validator = Validator::make($requestData, [
            'new_password'        => ['required', 'string', 'min:8', 'different:current_password', 'regex:/^(?=.*[A-Z]).+$/'],
            'confirm_password'    => ['required', 'string', 'min:8', 'same:new_password', 'regex:/^(?=.*[A-Z]).+$/'],
        ], [
            'new_password.required'             => 'New password is required.',
            'new_password.min'                  => 'New password must be at least 8 characters.',
            'new_password.different'            => 'New password must be different from the current password.',
            'new_password.same'                 => 'New password and confirmation password must match',
            'confirm_password.required'         => 'Confirmation password is required.',
            'confirm_password.same'             => 'Confirmation password must match the new password.',
            'new_password.regex'                => 'Password must contain at least one uppercase letter.',
            'confirm_password.regex'            => 'Confirm Password must contain at least one uppercase letter.',

        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors(),'flag' => false], 200);
        }

        $user = DB::table('users')->where('email',$request->email)->first();

         if (!$user) {
            return response()->json(['status' => false, 'msg' => 'User not found.','flag' => 'user_not_found'], 200);
        }

        //Update New Password
        DB::table('users')->where('email',$request->email)->update([
            'password' => Hash::make($request->new_password)
        ]);

        SendWelcomeEmailJob::dispatch($user,'password_update');
        DB::table('password_resets')->where('email', $request->email)->delete();
        return response()->json(['status' => true,'msg' => 'Password Updated successfully.' ], 200);
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
            // Flash session message
        session()->flash('toastMessage', [
            'message' => 'You have been logged out successfully.',
            'type' => 'success',
            'position' => 'top-center',
        ]);

        return redirect()->route('login');
    }

}
