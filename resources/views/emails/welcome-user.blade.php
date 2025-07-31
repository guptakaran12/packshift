<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $isAdmin ? __('New User Registered') : __('Welcome to PackShift') }}</title>
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
                {{ $isAdmin ? __('New Registration Alert') : __('Welcome to PackShift') }}
            </h1>
        </div>

        <!-- Content -->
        <div style="padding: 30px;">
            @if ($isAdmin)
                <h2 style="color: #2c3e50;">🚨 {{ __('New User Registered') }}</h2>
                <p style="font-size: 15px;">
                    {{ __('A new user has signed up on PackShift. Here\'s the summary:') }}
                </p>

                <ul style="line-height: 1.6;">
                    <li><strong>{{ __('Name:') }}</strong> {{ $user->first_name }} {{ $user->last_name }}</li>
                    <li><strong>{{ __('Email:') }}</strong> {{ $user->email }}</li>
                    @if (isset($user->phone))
                        <li><strong>{{ __('Phone:') }}</strong> {{ $user->phone }}</li>
                    @endif
                    <li><strong>{{ __('Registered At:') }}</strong>
                        {{ $user->created_at->timezone('Asia/Kolkata')->format('d M Y, h:i A') }}</li>

                </ul>

                <p style="margin-top: 20px;">
                    <a href="{{ $dashboardUrl }}"
                        style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                        {{ __('Open Admin Dashboard') }}
                    </a>
                </p>
            @else
                <h2 style="color: #2c3e50;">{{ __('Hey') }} {{ $user->first_name }}, 🎉</h2>
                <p style="font-size: 16px;">
                    {{ __('Thanks for signing up on') }} <strong>{{ __('PackShift') }}</strong> –
                    {{ __('Your trusted moving partner.') }}
                </p>

                <p
                    style="background: #e7f3ff; padding: 15px; border-left: 4px solid #007bff; font-size: 14px; border-radius: 4px;">
                    🎁 {{ __('You’ve unlocked') }} <strong>3 {{ __('Days Free Trial') }}</strong>
                    {{ __('of full features!') }}
                </p>

                <h4 style="margin-top: 25px;">🚀 {{ __('What you can do on your Dashboard:') }}</h4>
                <ul style="line-height: 1.8;">
                    <li>📋 {{ __('Request Quotations from verified vendors') }}</li>
                    <li>🧾 {{ __('Manage & Download Bills / Invoices (PDF)') }}</li>
                    <li>🚚 {{ __('Track your move status live') }}</li>
                    <li>🧠 {{ __('Role-based Task & Permission system') }}</li>
                    <li>🔔 {{ __('Real-time Notifications & Alerts') }}</li>
                    <li>📁 {{ __('Share documents & To-Do lists') }}</li>
                    <li>🗓️ {{ __('View complete Move History') }}</li>
                    <li>☎️ {{ __('24x7 Chat & Support Assistance') }}</li>
                </ul>

                <p style="margin-top: 25px;">
                    <a href="{{ $dashboardUrl }}"
                        style="background-color: #007bff; color: white; padding: 12px 25px; font-size: 16px; text-decoration: none; border-radius: 5px;">
                        {{ __('Go to My Dashboard') }}
                    </a>
                </p>

                <p style="font-size: 14px; color: #555; margin-top: 30px;">
                    {{ __('Welcome aboard,') }}<br>
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
