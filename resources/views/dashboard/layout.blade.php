<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>
    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="{{ asset('assets/app-XBfdTNDN.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/app-XBfdTNDN.css') }}" />

    <!-- icons CSS -->
    <link href="{{ asset('assets/iconfonts/icons.css') }}" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="{{ asset('assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/%40simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link href="{{ asset('assets/css/toaster.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/toaster.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <!-- Loader -->
    <div id="loader">
        <img src="{{ asset('assets/images/media/loader.svg') }}" alt="">
    </div>
    <!-- Loader -->
    <!-- page -->
    <div class="page">
        <!-- Start::main-header -->
        @include('dashboard.header')
        <!-- End::main-header -->

        <!-- Start::main-sidebar -->
        @include('dashboard.sidebar')
        <!-- End::main-sidebar -->

        <!-- Start::main-news-ticker -->
        <div class="news-container sticky news-ticker">
            <div class="swiper page-header-swiper padding-space pb-0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md  bg-danger-transparent text-danger avatar-rounded  mx-1">
                                <span class="fa fa-users"></span>
                            </span>
                            <span class="d-inline-block">Total Users</span>
                            <span class="bn-positive me-4">1,653</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md  bg-info-transparent text-info avatar-rounded mx-1">
                                <span class="fa fa-signal"></span>
                            </span>
                            <span class="d-inline-block">Total Leads</span>
                            <span class="bn-negative me-4">639</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md  bg-success-transparent text-success avatar-rounded  mx-1">
                                <span class="fa fa-briefcase"></span>
                            </span>
                            <span class="d-inline-block"> Total Trials </span>
                            <span class="bn-negative me-4">12,765</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md bg-warning-transparent text-warning avatar-rounded mx-1">
                                <span class="fa fa-trophy"></span>
                            </span>
                            <span class="d-inline-block">Total Wins</span>
                            <span class="bn-positive me-4">24</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md bg-primary-transparent avatar-rounded text-primary mx-1">
                                <span class="fa fa-envelope"></span>
                            </span>
                            <span class="d-inline-block">Active Email Accounts</span>
                            <span class="bn-positive me-4">74,526</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md bg-danger-transparent text-danger avatar-rounded  mx-1">
                                <span class="fa fa-check-circle"></span>
                            </span>
                            <span class="d-inline-block">Active Requests</span>
                            <span class="bn-positive me-4">14,526</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md bg-secondary-transparent text-secondary  avatar-rounded mx-1">
                                <span class="fa fa-envelope"></span>
                            </span>
                            <span class="d-inline-block">Deactive Email Accounts</span>
                            <span class="bn-positive me-4">7,325 </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md bg-info-transparent text-info   avatar-rounded  mx-1">
                                <span class="fa fa-times-circle"></span>
                            </span>
                            <span class="d-inline-block">Deactive Requests</span>
                            <span class="bn-positive me-4"> 1,425 </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md bg-success-transparent text-success avatar-rounded  mx-1">
                                <span class="fa fa-usd"></span>
                            </span>
                            <span class="d-inline-block">Total Balance</span>
                            <span class="bn-negative me-4">$1,52,654</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md bg-danger-transparent text-danger avatar-rounded  mx-1">
                                <span class="fa fa-shopping-cart"></span>
                            </span>
                            <span class="d-inline-block">Total Sales</span>
                            <span class="bn-negative me-4">23,15,2654</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md bg-info-transparent text-info   avatar-rounded  mx-1">
                                <span class="fa fa-times-circle"></span>
                            </span>
                            <span class="d-inline-block">Deactive Requests</span>
                            <span class="bn-positive me-4"> 1,425 </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md  bg-warning-transparent text-warning mx-1 avatar-rounded">
                                <span class="fa fa-money"></span>
                            </span>
                            <span class="d-inline-block">Total Purchase</span>
                            <span class="bn-positive me-4">$7,483</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md bg-success-transparent text-success mx-1  avatar-rounded">
                                <span class="fa fa-users"></span>
                            </span>
                            <span class="d-inline-block">Total Employes</span>
                            <span class="bn-positive me-4">4,738</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md bg-danger-transparent text-danger mx-1 avatar-rounded">
                                <span class="fa fa-usd"></span>
                            </span>
                            <span class="d-inline-block">Total Cost Reduction</span>
                            <span class="bn-negative me-4">$23,567</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md bg-primary-transparent text-primary mx-1  avatar-rounded ">
                                <span class="fa fa-money"></span>
                            </span>
                            <span class="d-inline-block">Total Cost Savings</span>
                            <span class="bn-negative me-4">15.2%</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-muted fs-13 fw-semibold">
                            <span class="avatar avatar-md  bg-info-transparent text-info mx-1  avatar-rounded">
                                <span class="fa fa-briefcase"></span>
                            </span>
                            <span class="d-inline-block">Total Projects</span>
                            <span class="bn-positive me-4">3,456</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::main-news-ticker -->

        {{-- Session Toaster --}}
        @include('toaster.session_layout')

        <!-- Content -->
        @yield('content')
        <!-- End Content-->

        <!-- Start::main-footer -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted">
                    {{ __('©') }} <span id="year"></span> <a href="javascript:void(0);"
                        class="text-dark fw-semibold">{{ __('PackShift') }}</a>.
                    {{ __('Crafted With') }} <span class="bi bi-heart-fill text-danger"></span>
                    {{ __('By The PackShift Team. All Rights Reserved.') }}
                </span>
            </div>
        </footer>
        <!-- End::main-footer -->
    </div>
    <!-- End Page -->

    <script src="{{ asset('assets/js/toaster.js') }}"></script>
    <script src="{{ asset('assets/js/signature.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Node Waves JS-->
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <link rel="modulepreload" href="{{ asset('assets/simplebar-B35Aj-bA.js') }}" />
    <script type="module" src="{{ asset('assets/simplebar-B35Aj-bA.js') }}"></script>
    <!-- Color Picker JS -->
    <script src="{{ asset('assets/libs/%40simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- Swiper JS -->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <link rel="modulepreload" href="{{ asset('assets/page-header-scroll-CT0TZb7A.js') }}" />
    <script type="module" src="{{ asset('assets/page-header-scroll-CT0TZb7A.js') }}"></script>

    <!-- Apex Charts JS -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Internal Invoice List JS -->
    <link rel="modulepreload" href="{{ asset('assets/invoice-list-ePXOWTnS.js') }}" />
    <script type="module" src="{{ asset('assets/invoice-list-ePXOWTnS.js') }}"></script>

    <!-- Sticky JS -->
    <script src="{{ asset('assets/sticky.js') }}"></script>

    <!-- Custom-Switcher JS -->
    <link rel="modulepreload" href="{{ asset('assets/custom-switcher-DzvLfYcX.js') }}" />
    <script type="module" src="{{ asset('assets/custom-switcher-DzvLfYcX.js') }}"></script>
    <!-- APP JS -->
    <link rel="modulepreload" href="{{ asset('assets/app-DedXd84f.js') }}" />
    <script type="module" src="{{ asset('assets/app-DedXd84f.js') }}"></script>
    <!-- Scripts -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.Echo.channel("public-message").listen("MessageSent", (event) => {
                new Toast({
                    title: event.message,
                    type: "success",
                }).show();
            });
        });

        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(() => {
                    alert.remove();
                }, 150);
            });
        }, 3000);
    </script>
    @yield('script')
    <!-- END SCRIPTS -->
</body>

</html>
