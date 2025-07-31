<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Sparic - Laravel Multipurpose Responsive Bootstrap5 Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template, vite laravel template, vite admin template, vite laravel admin, vite laravel admin dashboard, vite laravel bootstrap admin template.">
    <!-- Title-->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <!-- For High-Res Browsers -->
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/brand-logos/logo.png') }}"
        sizes="96x96">
    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- ICONS CSS -->
    <link href="{{ asset('assets/iconfonts/icons.css') }}" rel="stylesheet">
    <!-- APP CSS & APP SCSS -->
    <link rel="stylesheet" href="{{ asset('assets/app-XBfdTNDN.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}">
    <!-- Toaster -->
    <link href="{{ asset('assets/css/toaster.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('style')
</head>

<body class="bg-white">
    <div class="row authentication mx-0">
        <div class="col-xxl-5 col-xl-5 col-lg-5 d-xl-block d-none px-0">
            <div class="authentication-cover">
                <div class="authentication-cover-background">
                    <img src="{{ asset('assets/images/media/backgrounds/4.png') }}" alt="">
                </div>
                <div class="aunthentication-cover-content rounded">
                    <div class="swiper-slide">
                        <div class="text-fixed-white text-center d-flex align-items-center justify-content-center">
                            <div>
                                <div class="mb-5">
                                    @yield('auth_image')
                                </div>
                                <h6 class="fw-semibold text-fixed-white">@yield('auth_cover_title')</h6>
                                <p class="fw-normal fs-14 op-7">
                                    {{ __('Join') }} <strong>{{ __('PackShift') }}</strong>
                                    @yield('auth_cover_message')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-7 col-xl-7 col-lg-12 d-flex align-items-center justify-content-center"
            style="min-height: 100vh;">
            <div class="w-100 px-4" style="max-width: 420px;">
                {{-- Logo --}}
                <div class="text-center mb-0">
                    <img src="{{ asset('assets/images/brand-logos/logo2.png') }}" alt="PackShift Logo"
                        style="height: 100px; max-width: 200px; object-fit: contain;">
                </div>

                {{-- Social Login --}}
                @yield('social_links')

                {{-- Session Toaster --}}
                @include('toaster.session_layout')

                {{-- Form --}}
                @yield('content')

                {{-- Footer --}}
                <div class="text-center">@yield('auth_footer')</div>
            </div>
        </div>

    </div>
</body>

<script src="{{ asset('assets/js/toaster.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@yield('scripts')

</html>
