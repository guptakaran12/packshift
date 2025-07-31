<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $isAdmin ? __('User Logged In') : __('Welcome Back to PackShift') }}</title>
</head>

<body
    style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f2f2f2;">
    <div
        style="max-width: 650px; margin: 30px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">

        <!-- Header -->
        <div style="background-color: #003366; padding: 20px; text-align: center;">
            <img src="https://i.postimg.cc/CLs0W7CK/logo2.png" alt="{{ __('PackShift Logo') }}"
                style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
            <h1 style="color: white; margin-top: 10px;">
                {{ $isAdmin ? __('User Logged In') : __('Welcome Back to PackShift') }}
            </h1>
        </div>

        <!-- Content -->
        <div style="padding: 30px;">
            @if ($isAdmin)
                <h2 style="color: #2c3e50;">👤 {{ __('Login Notification') }}</h2>
                <p style="font-size: 15px;">
                    {{ __('A user just logged in. Here are the details:') }}
                </p>

                <ul style="line-height: 1.6;">
                    <li><strong>{{ __('Name:') }}</strong> {{ $user->first_name }} {{ $user->last_name }}</li>
                    <li><strong>{{ __('Email:') }}</strong> {{ $user->email }}</li>
                    @if (isset($user->phone))
                        <li><strong>{{ __('Phone:') }}</strong> {{ $user->phone }}</li>
                    @endif
                    <li><strong>{{ __('Login Time:') }}</strong>
                        {{ now('Asia/Kolkata')->format('d M Y, h:i A') }}</li>
                </ul>

                <p style="margin-top: 20px;">
                    <a href="{{ $dashboardUrl }}"
                        style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                        {{ __('Check Admin Dashboard') }}
                    </a>
                </p>
            @else
                <h2 style="color: #2c3e50;">👋 {{ __('Hello') }} {{ $user->first_name }},</h2>
                <p style="font-size: 16px;">
                    {{ __('You’ve successfully logged in to') }} <strong>PackShift</strong>!
                </p>

                <p
                    style="background: #e7f3ff; padding: 15px; border-left: 4px solid #007bff; font-size: 14px; border-radius: 4px;">
                    🕒 {{ __('Login Time:') }} <strong>{{ now('Asia/Kolkata')->format('d M Y, h:i A') }}</strong>
                </p>

                <h4 style="margin-top: 25px;">✨ {{ __('Need a quick start? Here’s what you can do:') }}</h4>
                <ul style="line-height: 1.8;">
                    <li>📋 {{ __('Request Quotations') }}</li>
                    <li>🧾 {{ __('Download Bills or Invoices') }}</li>
                    <li>🚚 {{ __('Track Moving Status') }}</li>
                    <li>🔔 {{ __('Get Real-time Alerts') }}</li>
                </ul>

                <p style="margin-top: 25px;">
                    <a href="{{ $dashboardUrl }}"
                        style="background-color: #007bff; color: white; padding: 12px 25px; font-size: 16px; text-decoration: none; border-radius: 5px;">
                        {{ __('Go to My Dashboard') }}
                    </a>
                </p>

                <p style="font-size: 14px; color: #555; margin-top: 30px;">
                    {{ __('We’re glad to have you back,') }}<br>
                    <strong>{{ __('Team PackShift') }}</strong>
                </p>
            @endif
        </div>

        <!-- Footer -->
        <div style="background-color: #f7f7f7; padding: 20px; text-align: center; font-size: 13px; color: #999;">
            © {{ date('Y') }} {{ __('PackShift') }}. {{ __('All rights reserved.') }}
        </div>
    </div>
</body>

</html>
