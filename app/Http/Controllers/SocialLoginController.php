<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use App\Jobs\SendWelcomeEmailJob;
use App\Models\User;
use Exception;

class SocialLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        DB::beginTransaction(); 
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
    
            $user = DB::table('users')->where('email', $googleUser->getEmail())->first();
    
            if (!$user) {
                DB::table('users')->insert([
                    'first_name'   => $googleUser->user['given_name'] ?? '',
                    'last_name'    => $googleUser->user['family_name'] ?? '',
                    'username'     => explode('@', $googleUser->getEmail())[0],
                    'email'        => $googleUser->getEmail(),
                    'google_id'    => $googleUser->getId(),
                    'password'     => bcrypt('google-auth'), // dummy secure password
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ]);
    
                DB::commit();  
                $user = DB::table('users')->where('email', $googleUser->getEmail())->first();
            }
    
            $authUser = User::where('email', $user->email)->first();

            Auth::login($authUser);

            session()->flash('toastMessage', [
                'message' => 'You have successfully logged in with Google!',
                'type' => 'success',
                'position' => 'top-center',
            ]);

            if($authUser->login_mail == '0'){
                SendWelcomeEmailJob::dispatch($authUser,'google');
                $authUser->login_mail = 1;
                $authUser->save();
            }

            return redirect()->route('dashboard');
    
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['status' => false, 'msg' => 'Google auththinaction !', 'error' => $e->getMessage()],500);
        }
    }
    
}
