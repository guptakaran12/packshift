<!-- Start::main-header -->
<header class="app-header">
    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">

        <!-- Start::header-content-left -->
        <div class="header-content-left">

            <!-- Start::header-element -->
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="{{ route('dashboard') }}" class="header-logo">
                        <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                            class="desktop-logo">
                        <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" alt="logo"
                            class="toggle-logo">
                        <img src="{{ asset('assets/images/brand-logos/desktop-dark.png') }}" alt="logo"
                            class="desktop-dark">
                        <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                            class="toggle-dark">
                        <img src="{{ asset('assets/images/brand-logos/desktop-white.png') }}" alt="logo"
                            class="desktop-white">
                        <img src="{{ asset('assets/images/brand-logos/toggle-white.png') }}" alt="logo"
                            class="toggle-white">
                    </a>
                </div>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link -->
                <a aria-label="Hide Sidebar"
                    class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                    data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                <!-- End::header-link -->
                <div class="main-header-center header-link search-bar-styles">
                    <input type="text" class="form-control" id="typehead"
                        placeholder="{{ __('Search For Results...') }}" autocomplete="off">
                    <button type="button" aria-label="button" class="btn pe-1"><i class="fe fe-search"
                            aria-hidden="true"></i></button>
                </div>
            </div>
            <!-- End::header-element -->

        </div>
        <!-- End::header-content-left -->

        <!-- Start::header-content-right -->
        <div class="header-content-right">
            <!-- Start::header-element -->
            <div class="header-element header-search d-lg-none d-block ">
                <!-- Start::header-link -->
                <a aria-label="anchor" href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                    data-bs-target="#searchModal">
                    <i class="bx bx-search-alt-2 header-link-icon"></i>
                </a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element country-selector">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                    data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/images/flags/us_flag.jpg') }}" alt="img"
                        class="rounded-circle header-link-icon">
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="{{ asset('assets/images/flags/us_flag.jpg') }}" alt="img">
                            </span>
                            {{ __('English') }}
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="{{ asset('assets/images/flags/spain_flag.jpg') }}" alt="img">
                            </span>
                            {{ __('Hindi') }}
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element header-theme-mode">
                <!-- Start::header-link|layout-setting -->
                <a href="javascript:void(0);" class="header-link layout-setting">
                    <span class="light-layout">
                        <!-- Start::header-link-icon -->
                        <i class="ri-moon-clear-line header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                    <span class="dark-layout">
                        <!-- Start::header-link-icon -->
                        <i class="ri-sun-line header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                </a>
                <!-- End::header-link|layout-setting -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element notifications-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                    <i class="bx bx-bell header-link-icon"></i>
                    <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary"
                        id="notification-icon-badge">{{ __('5') }}</span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">{{ __('Notifications') }}</p>
                            <span class="badge bg-secondary-transparent"
                                id="notifiation-data">{{ __('5 Unread') }}</span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled p-2" id="header-notification-scroll">
                        <li class="dropdown-item d-flex align-items-start">
                            <div class="pe-2">
                                <span class="avatar avatar-md bg-primary-transparent avatar-rounded"><i
                                        class="fe fe-message-square fs-18"></i></span>
                            </div>
                            <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                <a href="notification-list.html">
                                    <p class=" mb-0 fw-semibold text-dark">{{ __('Gladys Dare') }}<span
                                            class="text-muted">{{ __('Commented On') }}</span>
                                        {{ __('Ecosystems') }}</p>
                                    <span class="text-muted">{{ __('2m ago') }}</span>
                                </a>
                                <div>
                                    <a href="javascript:void(0);"
                                        class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                            class="ti ti-x fs-16"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item1 border-top">
                        <div class="d-grid">
                            <a href="#" class="btn btn-primary">{{ __('View All') }}</a>
                        </div>
                    </div>
                    <div class="p-5 empty-item1 d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                <i class="ri-notification-off-line fs-2"></i>
                            </span>
                            <h6 class="fw-semibold mt-3">{{ __('No New Notifications') }}</h6>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element header-message-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" id="notificationDropdown" aria-expanded="false">
                    <i class="ri-chat-1-line header-link-icon"></i>
                    <span
                        class="badge bg-danger rounded-pill header-icon-badge pulse-round pulse-danger">{{ __('4') }}</span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">{{ __('You Have 4 Messages') }}</p>

                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-message-scroll">
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-primary-transparent avatar-rounded"><img
                                            src="{{ asset('assets/images/faces/1.jpg') }}" alt=""></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column justify-content-between">
                                        <a href="chat.html">
                                            <p class=" mb-0 fw-semibold fs-14 text-dark">{{ __('Madeleine') }}</p>
                                            <p class="fs-11 mb-0">{{ __('Just completed') }}<span
                                                    class="text-info">{{ __('Project') }}</span></p>
                                        </a>
                                    </div>
                                    <span class="fs-10 text-muted">{{ __('2min ago') }}</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item1 border-top">
                        <div class="d-grid">
                            <a href="chat.html" class="btn btn-primary">{{ __('View All') }}</a>
                        </div>
                    </div>
                    <div class="p-5 empty-item1 d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                <i class="ri-notification-off-line fs-2"></i>
                            </span>
                            <h6 class="fw-semibold mt-3">{{ __('No New Notifications') }}</h6>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element header-fullscreen">
                <!-- Start::header-link -->
                <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                    <i class="ri-fullscreen-line full-screen-open header-link-icon"></i>
                    <i class="ri-fullscreen-exit-line full-screen-close header-link-icon d-none"></i>
                </a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element d-flex header-settings d-sm-block d-none">
                <a aria-label="anchor" href="javascript:void(0);" class=" header-link nav-link icon me-1"
                    data-bs-toggle="offcanvas" data-bs-target="#header-sidebar" aria-controls="header-sidebar">
                    <i class="bx bx-slider header-link-icon"></i>
                </a>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('assets/images/faces/9.jpg') }}" alt="img" width="32"
                                height="32" class="rounded-circle">
                        </div>
                        <div class="d-sm-block d-none ms-sm-2 ms-0 header-profile-text">
                            <p class="fw-semibold mb-0 lh-1">{{ __('Alison') }}</p>
                            <span class="op-7 fw-normal d-block fs-12">{{ __('Administrator') }}</span>
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu overflow-hidden header-profile-dropdown dropdown-menu-end"
                    aria-labelledby="mainHeaderProfile">
                    <li><a class="dropdown-item d-flex" href="profile.html"><i
                                class="ti ti-user-circle fs-18 me-2 op-7"></i>{{ __('Profile') }}</a></li>
                    <li><a class="dropdown-item d-flex" href="mail.html"><i
                                class="ti ti-inbox fs-18 me-2 op-7"></i>{{ __('Inbox') }} <span
                                class="badge bg-success ms-auto">{{ __('3') }}</span></a></li>
                    <li><a class="dropdown-item d-flex" href="mail-settings.html"><i
                                class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>{{ __('Settings') }}</a></li>
                    <li><a class="dropdown-item d-flex" href="chat.html"><i
                                class="ti ti-headset fs-18 me-2 op-7"></i>{{ __('Support') }}</a></li>
                    <li><a class="dropdown-item d-flex" href="{{ route('logout') }}"><i
                                class="ti ti-logout fs-18 me-2 op-7"></i>{{ __('Log Out') }}</a></li>
                </ul>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link|switcher-icon -->
                <a href="javascript:void(0);" class="header-link switcher-icon settings-icon-header"
                    data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                    <i class="bx bx-cog header-link-icon"></i>
                </a>
                <!-- End::header-link|switcher-icon -->
            </div>
            <!-- End::header-element -->

        </div>
        <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->
</header>
<!-- End::main-header -->
