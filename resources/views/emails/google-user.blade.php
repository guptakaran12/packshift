<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $isAdmin ? __('User Logged in via Google') : __('Welcome Back! | PackShift') }}</title>
</head>

<body
    style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f2f2f2;">
    <div
        style="max-width: 650px; margin: 30px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">

        <!-- Header -->
        <div style="background-color: #003366; padding: 20px; text-align: center;">
            <img src="https://i.postimg.cc/CLs0W7CK/logo2.png" alt="PackShift Logo"
                style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
            <h1 style="color: white; margin-top: 10px;">
                {{ $isAdmin ? __('Google Login Alert') : __('Google Login Successful') }}
            </h1>
        </div>

        <!-- Content -->
        <div style="padding: 30px;">
            @if ($isAdmin)
                <h2 style="color: #2c3e50;">🔔 {{ __('A user has logged in via Google') }}</h2>
                <p style="font-size: 15px;">
                    {{ __('Here are the user details:') }}
                </p>

                <ul style="line-height: 1.6;">
                    <li><strong>{{ __('Name:') }}</strong> {{ $user->first_name }} {{ $user->last_name }}</li>
                    <li><strong>{{ __('Email:') }}</strong> {{ $user->email }}</li>
                    <li><strong>{{ __('Username:') }}</strong> {{ $user->username }}</li>
                    @if (isset($user->phone))
                        <li><strong>{{ __('Phone:') }}</strong> {{ $user->phone }}</li>
                    @endif
                    <li><strong>{{ __('Login Time:') }}</strong> {{ now('Asia/Kolkata')->format('d M Y, h:i A') }}
                    </li>
                </ul>

                <p style="margin-top: 20px;">
                    <a href="{{ url('/admin/users?search=' . $user->email) }}"
                        style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                        {{ __('View User in Admin Panel') }}
                    </a>
                </p>
            @else
                <h2 style="color: #2c3e50;">👋 {{ __('Hello') }} {{ $user->first_name }},</h2>
                <p style="font-size: 16px;">
                    {{ __('You have successfully signed in to your PackShift account using your Google account.') }}
                </p>

                <p
                    style="background: #e6f7ff; padding: 15px; border-left: 4px solid #3399ff; font-size: 14px; border-radius: 4px;">
                    📧 <strong>{{ __('Email:') }}</strong> {{ $user->email }} <br>
                    🕒 <strong>{{ __('Login Time:') }}</strong> {{ now('Asia/Kolkata')->format('d M Y, h:i A') }}
                </p>

                <p style="margin-top: 25px; font-size: 14px; color: #555;">
                    {{ __('If this was not you, please secure your account or contact us immediately.') }}
                </p>

                <p style="font-size: 14px; color: #555; margin-top: 20px;">
                    {{ __('Thanks,') }}<br>
                    <strong>{{ __('Team PackShift') }}</strong>
                </p>
            @endif
        </div>

        <!-- Footer -->
        <div style="background-color: #f7f7f7; padding: 20px; text-align: center; font-size: 13px; color: #999;">
            © {{ date('Y') }} PackShift. {{ __('All rights reserved.') }}
        </div>
    </div>
</body>

</html>
