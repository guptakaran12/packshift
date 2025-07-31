@extends('dashboard.layout')
@section('title', 'Dashboard')
@section('content')
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <div class="ms-md-1 mb-1 mb-md-0 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>s
                <div class="page-title fw-semibold fs-18 mb-0">
                    <div>
                        <a href="javascript:void(0);" class="btn bg-secondary-transparent text-secondary btn-sm"
                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                            data-bs-original-title="Rating">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                        </a>
                        <a href="lockscreen.html" class="btn bg-primary-transparent text-primary mx-2 btn-sm"
                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                            data-bs-original-title="lock">
                            <span>
                                <i class="fa fa-lock"></i>
                            </span>
                        </a>
                        <a href="javascript:void(0);" class="btn bg-warning-transparent text-warning btn-sm"
                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                            data-bs-original-title="Add New">
                            <span>
                                <i class="fa fa-plus"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-md-6 col-xxl-3">
                    <div class="card  custom-card overflow-hidden border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1 fs-14">Projects</p>
                                            <div class="fs-12 text-muted mb-4">Overview of this month</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">3,456
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <label class="custom-switch mb-4">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input" id="flexSwitchCheckChecked" checked>
                                                <span class="custom-switch-indicator"></span>
                                            </label>

                                            <span class="text-primary lh-1 mt-3"><i class="fe fe-layers fs-26"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-sm-12 col-lg-6 col-md-6 col-xxl-3">
                    <div class="card  custom-card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1 fs-14">Employees</p>
                                            <div class="fs-12 text-muted mb-4">Overview of this month</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">4,738
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <label class="custom-switch mb-4">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                            <span class="text-secondary lh-1 mt-3"><i class="fe fe-users  fs-26"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-sm-12 col-lg-6 col-md-6 col-xxl-3">
                    <div class="card  custom-card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1 fs-14">Task</p>
                                            <div class="fs-12 text-muted mb-4">Overview of this month</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">6,738
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <label class="custom-switch mb-4">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                            <span class="text-warning lh-1 mt-3"><i
                                                    class="fe fe-file-text fs-26"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-sm-12 col-lg-6 col-md-6 col-xxl-3">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1 fs-14">Earnings</p>
                                            <div class="fs-12 text-muted mb-4">Overview of this month</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">$8,963 <i class=""></i>
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <label class="custom-switch mb-4">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                            <span class="text-danger lh-1 mt-3"><i
                                                    class="fe fe-external-link fs-26"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->
            </div>
            <!--End::row-1 -->

            <!-- Start::row-2 -->
            <div class="row">
                <div class="col-xxl-7 col-lg-12 col-md-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="row">
                            <div class="col-lg-4 border-end">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 fw-semibold text-muted">Total
                                                Purchase</p>
                                            <h3 class="mt-2 mb-1 fw-semibold">
                                                $7,483</h3>
                                            <p class="text-muted fs-12 mb-0"><span class="text-body fw-semibold"><i
                                                        class="fa fa-arrow-up text-success me-1"> </i>
                                                </span>23% in this year</p>
                                        </div>
                                        <div class="col mt-3 col-auto">
                                            <span
                                                class="avatar text-primary p-4 bg-primary-transparent fs-24 rounded-circle text-center">
                                                <i class="fe fe-briefcase"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs mb-0 mt-3">
                                        <div
                                            class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 border-end">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 fw-semibold  text-muted">Total
                                                Orders</p>
                                            <h3 class="mt-2 mb-1 fw-semibold">
                                                65,457</h3>
                                            <p class="text-muted fs-12 mb-0"><span class="text-body fw-semibold"><i
                                                        class="fa fa-arrow-up text-success me-1"> </i>
                                                </span>13% in this year</p>
                                        </div>
                                        <div class="col mt-3 col-auto">
                                            <span
                                                class="avatar text-secondary p-4 bg-secondary-transparent fs-24 rounded-circle text-center">
                                                <i class="fe fe-truck"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs mb-0 mt-3">
                                        <div
                                            class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 border-end">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 fw-semibold text-muted">Total
                                                Sales</p>
                                            <h3 class="mt-2 mb-1 fw-semibold">
                                                $6,128</h3>
                                            <p class="text-muted fs-12 mb-0"><span class="text-body fw-semibold"><i
                                                        class="fa fa-arrow-down text-danger me-1"> </i>
                                                </span>12% in this year</p>
                                        </div>
                                        <div class="col mt-3 col-auto">
                                            <span
                                                class="avatar text-danger p-4 bg-danger-transparent fs-24 rounded-circle text-center">
                                                <i class="fe fe-trending-up"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs mb-0 mt-3">
                                        <div
                                            class="progress-bar progress-bar-striped progress-bar-animated bg-danger w-50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header border-bottom d-block d-sm-flex">
                            <div class="card-title mb-3 mb-sm-0">Sales Overview</div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);"
                                    class="btn btn-sm border-0 text-dark fs-13 fw-semibold">Daily</a>
                                <a href="javascript:void(0);"
                                    class="btn btn-sm border-0 text-dark fs-13 fw-semibold">Monthly</a>
                                <a href="javascript:void(0);"
                                    class="btn btn-sm border-0 text-dark fs-13 fw-semibold">Yearly</a>
                                <a href="javascript:void(0);" class="btn btn-sm border-0 fs-13 fw-semibold btn-primary"><i
                                        class="fe fe-download"></i> Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="totalInvestmentsStats"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-12 col-md-12">
                    <div class="card custom-card d-inline-block overflow-hidden">
                        <div class="card-header border-bottom">
                            <div class="card-title mb-0">Sales Country Wise</div>
                        </div>
                        <div class="card-body pb-0">
                            <div id="sales-country-wise"></div>
                        </div>
                        <div class="card-footer py-0">
                            <div class="row">
                                <div class="col-6 border-end text-center">
                                    <div class="text-body fw-semibold fs-12 mt-3 text-muted">Monthly Average</div>
                                    <div class=" mb-3">
                                        <span class="me-3 fs-20 fw-semibold">2,186</span>
                                        <span class="text-success fw-semibold mt-1"><i
                                                class="fa fa-caret-up me-1"></i>0.48%
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="text-body fw-semibold fs-12 mt-3 text-muted">Weekly Average</div>
                                    <div class=" mb-3">
                                        <span class="me-3 fs-20 fw-semibold">1,068</span>
                                        <span class="text-danger fw-semibold mt-1"><i
                                                class="fa fa-caret-down me-1"></i>0.20%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-2 -->

            <!-- Start::row-3 -->
            <div class="row row-deck">
                <div class="col-xxl-6 col-xl-12 col-lg-12">
                    <div class="card  custom-card d-inline-block overflow-hidden">
                        <div class="card-header custom-header">
                            <h3 class="card-title mb-0">Popular Products</h3>
                        </div>
                        <div class="card-body overflow-hidden p-0">
                            <div class="table-responsive">
                                <table class="table mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-dark fw-semibold ps-4 fs-13">s.no</th>
                                            <th class="text-dark fw-semibold fs-13">Product Name</th>
                                            <th class="text-dark fw-semibold fs-13">Popularity</th>
                                            <th class="text-dark fw-semibold pe-4 text-end fs-13">Percentage %</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td class="ps-4">
                                                <div class="text-body text-muted">01</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Samsung Smartwatches</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div
                                                        class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-50 rounded">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-4">
                                                <div><span
                                                        class="btn btn-sm btn-outline-primary bg-primary-transparent">50%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="ps-4">
                                                <div class="text-body text-muted">02</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Kids Wear</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                                                        style="width: 20%"></div>
                                                </div>
                                            </td>

                                            <td class="text-end pe-4">
                                                <div><span
                                                        class="btn btn-sm btn-outline-secondary bg-secondary-transparent">20%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="ps-4">
                                                <div class="text-body text-muted">03</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Home Decores</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                        style="width: 40%"></div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-4">
                                                <div><span
                                                        class="btn btn-sm btn-outline-info bg-info-transparent">30%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="ps-4">
                                                <div class="text-body text-muted">04</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Furnitures</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div
                                                        class="progress-bar progress-bar-striped progress-bar-animated bg-success w-50 rounded">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-4">
                                                <div><span
                                                        class="btn btn-sm btn-outline-success bg-success-transparent">45%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="ps-4">
                                                <div class="text-body text-muted">05</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Electroni Gadgets</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                                        style="width: 70%"></div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-4">
                                                <div><span
                                                        class="btn btn-sm btn-outline-warning bg-warning-transparent">70%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="ps-4">
                                                <div class="text-body text-muted">06</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Mechanical Parts</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-pink "
                                                        style="width: 50%"></div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-4">
                                                <div><span
                                                        class="btn btn-sm btn-outline-pink bg-pink-transparent">45%</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-12 col-md-12">
                    <div class="card custom-card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title mb-0">Sales Activities</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0 sales-recent-activity">
                                <li class="sales-recent-activity-content">
                                    <div class="d-flex align-items-top">
                                        <div class="me-3">
                                            <span class="avatar avatar-xs bg-primary-transparent avatar-rounded">
                                                <i class="bi bi-circle-fill fs-8"></i>
                                            </span>
                                        </div>
                                        <div class="sales-timeline-content">
                                            <span class="fw-semibold">Update of calendar events &amp;</span><span><a
                                                    href="javascript:void(0);" class="text-primary fw-semibold"> Added new
                                                    events in next week.</a></span>
                                        </div>
                                        <div class="flex-fill text-end">
                                            <span class="d-block text-muted fs-11 op-7">4:45 PM</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="sales-recent-activity-content">
                                    <div class="d-flex align-items-top">
                                        <div class="me-3">
                                            <span class="avatar avatar-xs bg-secondary-transparent avatar-rounded">
                                                <i class="bi bi-circle-fill fs-8"></i>
                                            </span>
                                        </div>
                                        <div class="sales-timeline-content">
                                            <span>New theme for <span class="fw-semibold">Spruko Website</span>
                                                completed</span>
                                            <span class="d-block fs-12 text-muted">Lorem ipsum, dolor sit amet.</span>
                                        </div>
                                        <div class="flex-fill text-end">
                                            <span class="d-block text-muted fs-11 op-7">3 hrs</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="sales-recent-activity-content">
                                    <div class="d-flex align-items-top">
                                        <div class="me-3">
                                            <span class="avatar avatar-xs bg-success-transparent avatar-rounded">
                                                <i class="bi bi-circle-fill fs-8"></i>
                                            </span>
                                        </div>
                                        <div class="sales-timeline-content">
                                            <span>Created a <span class="text-success fw-semibold">New Task</span> today
                                                <span class="avatar avatar-xs bg-purple-transparent avatar-rounded ms-1"><i
                                                        class="ri-add-fill text-purple fs-12"></i></span></span>
                                        </div>
                                        <div class="flex-fill text-end">
                                            <span class="d-block text-muted fs-11 op-7">22 hrs</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="sales-recent-activity-content">
                                    <div class="d-flex align-items-top">
                                        <div class="me-3">
                                            <span class="avatar avatar-xs bg-pink-transparent avatar-rounded">
                                                <i class="bi bi-circle-fill fs-8"></i>
                                            </span>
                                        </div>
                                        <div class="sales-timeline-content">
                                            <span>New member <span class="badge bg-pink-transparent">@andreas
                                                    gurrero</span> added today to AI Summit.</span>
                                        </div>
                                        <div class="flex-fill text-end">
                                            <span class="d-block text-muted fs-11 op-7">Today</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="sales-recent-activity-content mb-1">
                                    <div class="d-flex align-items-top">
                                        <div class="me-3">
                                            <span class="avatar avatar-xs bg-warning-transparent avatar-rounded">
                                                <i class="bi bi-circle-fill fs-8"></i>
                                            </span>
                                        </div>
                                        <div class="sales-timeline-content">
                                            <span>32 New people joined summit.</span>
                                        </div>
                                        <div class="flex-fill text-end">
                                            <span class="d-block text-muted fs-11 op-7">22 hrs</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="sales-recent-activity-content">
                                    <div class="d-flex align-items-top">
                                        <div class="me-3">
                                            <span class="avatar avatar-xs bg-info-transparent avatar-rounded">
                                                <i class="bi bi-circle-fill fs-8"></i>
                                            </span>
                                        </div>
                                        <div class="sales-timeline-content">
                                            <span>Neon Tarly added <span class="text-info fw-semibold">Robert Bright</span>
                                                to AI summit project.</span>
                                        </div>
                                        <div class="flex-fill text-end">
                                            <span class="d-block text-muted fs-11 op-7">12 hrs</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3  col-xl-6 col-lg-12 col-md-12">
                    <div class="card custom-card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title mb-0">Recent Orders</h3>
                        </div>
                        <div class="card-body pt-4">
                            <div id="recent-orders"></div>
                        </div>
                        <div class="card-footer">
                            <div class="row pb-0 mb-0">
                                <div class="col-md-6 col justify-content-center text-center border-end">
                                    <p class="mb-0 d-flex fw-semibold text-muted justify-content-center">
                                        <span class="legend bg-primary"></span>Last Month
                                    </p>
                                    <h4 class="mb-0 fw-semibold">$3,006</h4>
                                </div>
                                <div class="col-md-6 col text-center float-end">
                                    <p class="mb-0 d-flex fw-semibold text-muted justify-content-center ">
                                        <span class="legend bg-secondary"></span>This Month
                                    </p>
                                    <h4 class="mb-0 fw-semibold">$4,026</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-3 -->

            <!-- Start::row-4 -->
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-header border-bottom ">
                            <h3 class="card-title mb-0">Product Sales</h3>
                            <div class="dropdown ms-auto">
                                <button
                                    class="btn btn-outline-default btn-sm fw-bold fs-12 d-flex align-items-center dropdown-toggle text-primary"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bi bi-calendar-date fw-semibold mx-1"></i> Week
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <div class="dataTables_length" id="data-table3_length">
                                        <label class="d-flex align-items-center gap-1">Show
                                            <select name="data-table3_length"
                                                class="form-select form-select-sm select2 select2-hidden-accessible options-width"
                                                tabindex="-1" aria-hidden="true">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            entries
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <div id="data-table3_filter" class="dataTables_filter">
                                        <label><input type="search" class="form-control"
                                                placeholder="Search..."></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-span-12">
                                    <div class="table-responsive">
                                        <table id="data-table" class="table border p-0 text-nowrap mb-0">
                                            <thead class="text-dark">
                                                <tr>
                                                    <th class="bg-light fw-semibold fs-14 border-bottom-0 w-5">
                                                        Order ID</th>
                                                    <th class="bg-light fw-semibold fs-14 border-bottom-0">
                                                        Customer</th>
                                                    <th class="bg-light fw-semibold fs-14 border-bottom-0">
                                                        Order Date</th>
                                                    <th class="bg-light fw-semibold fs-14 border-bottom-0">
                                                        Product name</th>
                                                    <th class="bg-light fw-semibold fs-14 border-bottom-0">
                                                        Price</th>
                                                    <th class="bg-light fw-semibold fs-14 border-bottom-0">
                                                        Status</th>
                                                    <th class="bg-light fw-semibold fs-14 border-bottom-0 text-center">
                                                        Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="">
                                                            <h6 class="mb-0 fw-semibold text-dark">#420153</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex contact-image">
                                                            <img src="build/assets/images/users/male/1.jpg"
                                                                class="avatar avatar-md avatar-rounded"
                                                                alt="person-image">
                                                            <div class="d-flex mt-1 flex-column ms-2">
                                                                <h6 class="mb-0 fs-14 fw-semibold text-dark">Jake poole
                                                                </h6>
                                                                <span class="fs-12 text-muted">jacke123@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-13 fw-semibold text-dark"><i
                                                            class="fe fe-calendar me-2"></i>20-11-2020 </td>
                                                    <td class="fs-13 fw-semibold text-dark">Sofa</td>
                                                    <td class="fs-13 fw-semibold text-dark">$426.56</td>
                                                    <td class="fs-15 fw-semibold">
                                                        <span
                                                            class="badge text-fixed-white bg-danger fw-semibold fs-11 p-1">Out
                                                            Stock</span>
                                                    </td>
                                                    <td class="fs-15 fw-semibold">
                                                        <div class="hstack gap-2 fs-15 justify-content-center">
                                                            <a href="edit-products.html"
                                                                class="btn btn-icon btn-sm btn-info-light"><i
                                                                    class="ri-add-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0)"
                                                                class="btn btn-outline-light btn-icons btn-sm text-muted"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-share-forward-line me-2"></i>Share
                                                                </a>
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-download-2-line me-2"></i>Download
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="">
                                                            <h6 class="mb-0 fw-semibold text-dark">#243153</h6>
                                                        </div>
                                                    </td>
                                                    <td class="d-flex border-bottom-0">
                                                        <div>
                                                            <span class="avatar avatar-md me-2"><img
                                                                    src="build/assets/images/users/male/9.jpg"
                                                                    alt="img"
                                                                    class="rounded-circle cover-image"></span>
                                                        </div>
                                                        <div class="flex-1 mt-1 lh-1">
                                                            <h6 class="mb-1 fs-14 fw-semibold text-dark">Virginia Mak
                                                            </h6>
                                                            <span class="fs-12 text-muted">virginia456@gmail.com</span>
                                                        </div>
                                                    </td>
                                                    <td class="fs-13 fw-semibold text-dark"><i
                                                            class="fe fe-calendar me-2"></i>20-11-2020 </td>
                                                    <td class="fs-13 fw-semibold text-dark">Watch</td>
                                                    <td class="fs-13 fw-semibold text-dark">$265.04</td>
                                                    <td class="fs-15 fw-semibold">
                                                        <span
                                                            class="badge text-fixed-white bg-success fw-semibold fs-11 p-1">In
                                                            Stock</span>
                                                    </td>
                                                    <td class="fs-15 fw-semibold">
                                                        <div class="hstack gap-2 fs-15 justify-content-center">
                                                            <a href="edit-products.html"
                                                                class="btn btn-icon btn-sm btn-info-light"><i
                                                                    class="ri-add-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0)"
                                                                class="btn btn-outline-light btn-icons btn-sm text-muted"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-share-forward-line me-2"></i>Share
                                                                </a>
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-download-2-line me-2"></i>Download
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="">
                                                            <h6 class="mb-0 fw-semibold text-dark">#230153</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex contact-image">
                                                            <img src="build/assets/images/users/male/8.jpg"
                                                                class="avatar avatar-md avatar-rounded"
                                                                alt="person-image">
                                                            <div class="d-flex mt-1 flex-column ms-2">
                                                                <h6 class="mb-0 fs-14 fw-semibold text-dark">Kylie north
                                                                </h6>
                                                                <span class="fs-12 text-muted">kylie@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-13 fw-semibold text-dark"><i
                                                            class="fe fe-calendar me-2"></i>19-11-2020 </td>
                                                    <td class="fs-13 fw-semibold text-dark">Coat</td>
                                                    <td class="fs-13 fw-semibold text-dark">$652.00</td>
                                                    <td class="fs-15 fw-semibold">
                                                        <span
                                                            class="badge text-fixed-white bg-danger fw-semibold fs-11 p-1">Out
                                                            Stock</span>
                                                    </td>
                                                    <td class="fs-15 fw-semibold">
                                                        <div class="hstack gap-2 fs-15 justify-content-center">
                                                            <a href="edit-products.html"
                                                                class="btn btn-icon btn-sm btn-info-light"><i
                                                                    class="ri-add-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0)"
                                                                class="btn btn-outline-light btn-icons btn-sm text-muted"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-share-forward-line me-2"></i>Share
                                                                </a>
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-download-2-line me-2"></i>Download
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="">
                                                            <h6 class="mb-0 fw-semibold text-dark">#124153</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex contact-image">
                                                            <img src="build/assets/images/users/male/10.jpg"
                                                                class="avatar avatar-md avatar-rounded"
                                                                alt="person-image">
                                                            <div class="d-flex mt-1 flex-column ms-2">
                                                                <h6 class="mb-0 fs-14 fw-semibold text-dark">Jan Hodges
                                                                </h6>
                                                                <span class="fs-12 text-muted">jan@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-13 fw-semibold text-dark"><i
                                                            class="fe fe-calendar me-2"></i>19-11-2020 </td>
                                                    <td class="fs-13 fw-semibold text-dark">Shoes</td>
                                                    <td class="fs-13 fw-semibold text-dark">$200.56</td>
                                                    <td class="fs-15 fw-semibold">
                                                        <span
                                                            class="badge text-fixed-white bg-success fw-semibold fs-11 p-1 p-1">In
                                                            Stock</span>
                                                    </td>
                                                    <td class="fs-15 fw-semibold">
                                                        <div class="hstack gap-2 fs-15 justify-content-center">
                                                            <a href="edit-products.html"
                                                                class="btn btn-icon btn-sm btn-info-light"><i
                                                                    class="ri-add-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0)"
                                                                class="btn btn-outline-light btn-icons btn-sm text-muted"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-share-forward-line me-2"></i>Share
                                                                </a>
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-download-2-line me-2"></i>Download
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="">
                                                            <h6 class="mb-0 fw-semibold text-dark">#024153</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex contact-image">
                                                            <img src="build/assets/images/users/male/11.jpg"
                                                                class="avatar avatar-md avatar-rounded"
                                                                alt="person-image">
                                                            <div class="d-flex mt-1 flex-column ms-2">
                                                                <h6 class="mb-0 fs-14 fw-semibold text-dark">Trevor Thomson
                                                                </h6>
                                                                <span class="fs-12 text-muted">trevor@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-13 fw-semibold text-dark"><i
                                                            class="fe fe-calendar me-2"></i>19-11-2020 </td>
                                                    <td class="fs-13 fw-semibold text-dark">T-shirts</td>
                                                    <td class="fs-13 fw-semibold text-dark">$364.56</td>
                                                    <td class="fs-15 fw-semibold">
                                                        <span
                                                            class="badge text-fixed-white bg-danger fw-semibold fs-11 p-1">Out
                                                            Stock</span>
                                                    </td>
                                                    <td class="fs-15 fw-semibold">
                                                        <div class="hstack gap-2 fs-15 justify-content-center">
                                                            <a href="edit-products.html"
                                                                class="btn btn-icon btn-sm btn-info-light"><i
                                                                    class="ri-add-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0)"
                                                                class="btn btn-outline-light btn-icons btn-sm text-muted"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-share-forward-line me-2"></i>Share
                                                                </a>
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-download-2-line me-2"></i>Download
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-bootom">
                                                    <td>
                                                        <div class="">
                                                            <h6 class="mb-0 fw-semibold text-dark">#420153</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex contact-image">
                                                            <img src="build/assets/images/users/male/3.jpg"
                                                                class="avatar avatar-md avatar-rounded"
                                                                alt="person-image">
                                                            <div class="d-flex mt-1 flex-column ms-2">
                                                                <h6 class="mb-0 fs-14 fw-semibold text-dark">Emily Lewis
                                                                </h6>
                                                                <span class="fs-12 text-muted">emily@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-13 fw-semibold text-dark"><i
                                                            class="fe fe-calendar me-2"></i>19-11-2020 </td>
                                                    <td class="fs-13 fw-semibold text-dark ">Jeans</td>
                                                    <td class="fs-13 fw-semibold text-dark ">$56.035</td>
                                                    <td class="fs-15 fw-semibold">
                                                        <span
                                                            class="badge text-fixed-white bg-success fw-semibold fs-11 p-1">In
                                                            Stock</span>
                                                    </td>
                                                    <td class="fs-15 fw-semibold">
                                                        <div class="hstack gap-2 fs-15 justify-content-center">
                                                            <a href="edit-products.html"
                                                                class="btn btn-icon btn-sm btn-info-light"><i
                                                                    class="ri-add-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0)"
                                                                class="btn btn-outline-light btn-icons btn-sm text-muted"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-share-forward-line me-2"></i>Share
                                                                </a>
                                                                <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                                    <i class="ri-download-2-line me-2"></i>Download
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-top-0 pt-0">
                            <div class="d-flex align-items-center">
                                <div> Showing 1 to 6 of 6 Entries <i
                                        class="bi bi-arrow-right ms-2 fw-semibold right-arrow-rotate"></i> </div>
                                <div class="ms-auto">
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);"> Prev </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0);">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link text-primary" href="javascript:void(0);"> next </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>
            <!-- End::row-4 -->


        </div>
    </div>
    <!-- End::app-content -->
@endsection
