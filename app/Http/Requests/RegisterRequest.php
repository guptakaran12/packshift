<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
                'first_name'              => ['required', 'string', 'max:50'],
                'last_name'               => ['required', 'string', 'max:50'],
                'user_name'               => ['required', 'string', 'max:50', 'unique:users,username'],
                'email'                   => ['required', 'email', 'unique:users,email'],
              'password'                  => ['required', 'min:6', 'regex:/^(?=.*[A-Z]).+$/', 'confirmed'],
            'password_confirmation'       => ['required', 'min:6', 'regex:/^(?=.*[A-Z]).+$/'],
            ];
    }

    public function messages(): array
    {
       return [
            'first_name.required'            => 'First name is required.',
            'last_name.required'             => 'Last name is required.',
            'user_name.required'             => 'Username is required.',
            'user_name.unique'               => 'This username is already taken.',
            'email.required'                 => 'Email is required.',
            'email.email'                    => 'Enter a valid email address.',
            'email.unique'                   => 'This email is already registered.',
            'password.required'              => 'Password is required.',
            'password.min'                   => 'Password must be at least 6 characters.',
            'password.regex'                 => 'Password must contain at least one uppercase letter.',
            'password.confirmed'             => 'Passwords do not match.',
            'password_confirmation.required' => 'Confirm Password is required.',
            'password_confirmation.regex'    => 'Confirm Password must contain at least one uppercase letter.',
        ];
    }
}
