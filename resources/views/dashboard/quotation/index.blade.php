@extends('dashboard.layout')
@section('title', 'Quotation Create')
@section('content')
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <div class="ms-md-1 mb-1 mb-md-0 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Quotation') }}</li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">{{ __('Create Quotation') }}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->
            <form id="quotation_form">
                @csrf
                <div class="row">
                    <div class="col-xxl-9 col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header d-md-flex d-block">
                                <div class="h5 mb-0 d-sm-flex d-block align-items-center">
                                    <div>
                                        <img src="{{ asset('images/logo3.png') }}" alt="Logo"
                                            style="height: 40px; width: 40px; -radius: 8px; object-fit: contain; background: white; padding: 4px;  -radius: 50%; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15); : 1px solid #ccc;">
                                    </div>
                                    <div class="ms-sm-2 ms-0 mt-sm-0 mt-2">
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Quotation Title" name="quotation_title" id="quotation_title"
                                            autofocus maxlength="50">
                                    </div>
                                    <div class="mx-2">:</div>
                                    <div class="mt-sm-0 mt-2">
                                        <input type="text" class="form-control form-control-sm disabled-look"
                                            placeholder="Quotation ID" name="quotation_id" id="quotation_id" maxlength="50"
                                            readonly value="{{ $quotationId }}">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row gy-2">
                                    <!-- General Details: -->
                                    <p class="fw-bold mb-2">
                                        {{ __('General Details:') }}
                                    </p>

                                    <!-- Customer Name -->
                                    <div class="col-xl-4">
                                        <label for="customer_name" class="form-label">{{ __('Customer Name') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="customer_name" name="customer_name"
                                            placeholder="Customer Name">
                                        <span class="text-danger d-block my-2" id="customer_name_error"></span>
                                    </div>

                                    <!-- Customer Phone -->
                                    <div class="col-xl-4">
                                        <label for="customer_phone" class="form-label">{{ __('Customer Phone') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="customer_phone" name="customer_phone"
                                            placeholder="Customer Phone">
                                        <span class="text-danger d-block my-2" id="customer_phone_error"></span>
                                    </div>

                                    <!-- Customer GST -->
                                    <div class="col-xl-4">
                                        <label for="gst_number" class="form-label">{{ __('Customer GST Number') }}</label>
                                        <input type="text" class="form-control" id="gst_number" name="gst_number"
                                            placeholder="Customer GST Number">
                                        <span class="text-danger d-block my-2" id="gst_number_error"></span>
                                    </div>

                                    <!-- PAN Number -->
                                    <div class="col-xl-4">
                                        <label for="pan_number" class="form-label">{{ __('Customer PAN Number') }}</label>
                                        <input type="text" class="form-control" id="pan_number" name="pan_number"
                                            placeholder="Customer PAN Number">
                                        <span class="text-danger d-block my-2" id="pan_number_error"></span>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-xl-4">
                                        <label for="customer_email" class="form-label">{{ __('Customer Email') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="customer_email" name="customer_email"
                                            placeholder="Customer Email">
                                        <span class="text-danger d-block my-2" id="customer_email_error"></span>
                                    </div>

                                    <!-- Client Type -->
                                    <div class="col-xl-4">
                                        <label for="client_type" class="form-label">{{ __('Client Type') }} <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="client_type" name="client_type">
                                            <option value="">{{ __('Select Client Type') }}</option>
                                            @foreach ($clientTypes as $clientType)
                                                <option value="{{ $clientType->id }}">{{ $clientType->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="client_type_error"></span>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-xl-4">
                                        <label for="street" class="form-label">{{ __('Customer Address') }} <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="street" name="street" rows="1" placeholder="Customer Address"></textarea>
                                        <span class="text-danger d-block my-2" id="street_error"></span>
                                    </div>

                                    <!-- Zip Code -->
                                    <div class="col-xl-4">
                                        <label for="customer_zip_code" class="form-label">{{ __('Zip Code') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="customer_zip_code"
                                            name="customer_zip_code" placeholder="Zip Code">
                                        <span class="text-danger d-block my-2" id="customer_zip_code_error"></span>
                                    </div>

                                    <!-- Country -->
                                    <div class="col-xl-4">
                                        <label for="country" class="form-label">{{ __('Country') }} <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="country" name="country"
                                            onchange="loadLocations(this.value, '#state')">
                                            <option value="">{{ __('Select Country') }}</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="country_error"></span>
                                    </div>

                                    <!-- State -->
                                    <div class="col-xl-4">
                                        <label for="state" class="form-label">{{ __('State') }} <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="state" name="state"
                                            onchange="loadLocations(this.value, '#cities')">
                                            <option value="">{{ __('Select State') }}</option>
                                        </select>
                                        <span class="text-danger d-block my-2" id="state_error"></span>
                                    </div>

                                    <!-- City -->
                                    <div class="col-xl-4">
                                        <label for="cities" class="form-label">{{ __('City') }} <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="cities" name="cities">
                                            <option value="">{{ __('Select City') }}</option>
                                        </select>
                                        <span class="text-danger d-block my-2" id="cities_error"></span>
                                    </div>

                                    <!-- DOB -->
                                    <div class="col-xl-4">
                                        <label for="dob" class="form-label">{{ __('Date Of Birth (DOB)') }}</label>
                                        <input type="date" class="form-control" id="dob" name="dob">
                                        <span class="text-danger d-block my-2" id="dob_error"></span>
                                    </div>
                                </div>

                                <!-- Quotation Details: -->
                                <div class="row gy-2">
                                    <p class="fw-bold mb-2">
                                        {{ __('Quotation Details:') }}
                                    </p>
                                    <!-- Quotation Purpose Start: -->
                                    <div class="col-xl-4">
                                        <label for="quotation_purpose" class="form-label">{{ __('Quotation Purpose') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control" id="quotation_purpose" name="quotation_purpose" maxlength="150" rows="1"></textarea>
                                        <span class="text-danger d-block my-2" id="quotation_purpose_error"></span>
                                    </div>
                                    <!-- Quotation Purpose End: -->

                                    <!-- Valid Date Start: -->
                                    <div class="col-xl-4">
                                        <label for="valid_date" class="form-label">{{ __('Valid Till') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="date" class="form-control " id="valid_date" name="valid_date"
                                            placeholder="Email">
                                        <span class="text-danger d-block my-2" id="valid_date_error"></span>
                                    </div>
                                    <!-- Valid Date End: -->

                                    <!-- Salesperson Name Start: -->
                                    <div class="col-xl-4">
                                        <label for="salesperson_name" class="form-label">{{ __('Salesperson Name') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="salesperson_name"
                                            name="salesperson_name" maxlength="60" placeholder="Salesperson Name">
                                        <span class="text-danger d-block my-2" id="salesperson_name_error"></span>
                                    </div>
                                    <!-- Salesperson Name End: -->

                                    <!-- Quotation Status Start: -->
                                    <div class="col-xl-4">
                                        <label for="quotation_status" class="form-label">{{ __('Quotation Status') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control " id="quotation_status" name="quotation_status">
                                            <option value="">{{ __('Select Status') }}</option>
                                            @foreach ($quotationStatuses as $quotationStatus)
                                                <option value="{{ $quotationStatus->id }}">
                                                    {{ $quotationStatus->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="quotation_status_error"></span>
                                    </div>
                                    <!-- Quotation Status End: -->

                                    <!-- Quotation Date Start: -->
                                    <div class="col-xl-4">
                                        <label for="quotation_date" class="form-label">
                                            {{ __('Quotation Date') }} <span class="text-danger">*</span>
                                        </label>
                                        <input type="date" class="form-control " id="quotation_date"
                                            name="quotation_date" placeholder="Quotation Date">
                                        <span class="text-danger d-block my-2" id="quotation_date_error"></span>
                                    </div>
                                    <!-- Quotation Date End: -->
                                </div>

                                <!-- Move From/To -->
                                <div class="row gy-2">
                                    <p class="fw-bold mb-2">
                                        {{ __('Move From:') }}
                                    </p>
                                    <!-- Move From Start -->
                                    <div class="col-xl-4">
                                        <!-- Country -->
                                        <label for="move_from_country" class="form-label">{{ __('Country') }} <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control " id="move_from_country" name="move_from_country"
                                            onchange="loadLocations(this.value,'#move_from_state');">
                                            <option value="">{{ __('Select Country') }}</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="move_from_country_error"></span>
                                    </div>
                                    <!-- State -->
                                    <div class="col-xl-4">
                                        <label for="move_from_state" class="form-label">{{ __('State') }} <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control " id="move_from_state" name="move_from_state"
                                            onchange="loadLocations(this.value,'#move_from_city');">
                                            <option value="">{{ __('Select State') }}</option>
                                        </select>
                                        <span class="text-danger d-block my-2" id="move_from_state_error"></span>
                                    </div>
                                    <!-- City -->
                                    <div class="col-xl-4">
                                        <label for="move_from_city" class="form-label">{{ __('City') }} <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control " id="move_from_city" name="move_from_city">
                                            <option value="">{{ __('Select City') }}</option>
                                        </select>
                                        <span class="text-danger d-block my-2" id="move_from_city_error"></span>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-xl-4">
                                        <label for="move_from_address" class="form-label">{{ __('Address') }} <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="move_from_address" name="move_from_address" maxlength="200" rows="1"></textarea>
                                        <span class="text-danger d-block my-2" id="move_from_address_error"></span>
                                    </div>
                                </div>
                                <!-- Move From End -->

                                <!-- Move To Start -->
                                <div class="row gy-2">
                                    <p class="fw-bold mb-2">
                                        {{ __('Move From:') }}
                                    </p>

                                    <!-- Country -->
                                    <div class="col-xl-4">
                                        <label for="move_to_country" class="form-label">{{ __('Country') }} <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control " id="move_to_country" name="move_to_country"
                                            onchange="loadLocations(this.value,'#move_to_state');">
                                            <option value="">{{ __('Select Country') }}</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="move_to_country_error"></span>
                                    </div>

                                    <!-- State -->
                                    <div class="col-xl-4">
                                        <label for="move_to_state" class="form-label">{{ __('State') }} <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control " id="move_to_state" name="move_to_state"
                                            onchange="loadLocations(this.value,'#move_to_city');">
                                            <option value="">{{ __('Select State') }}</option>
                                        </select>
                                        <span class="text-danger d-block my-2" id="move_to_state_error"></span>
                                    </div>

                                    <!-- City -->
                                    <div class="col-xl-4">
                                        <label for="move_to_city" class="form-label">{{ __('City') }} <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control " id="move_to_city" name="move_to_city">
                                            <option value="">{{ __('Select City') }}</option>
                                        </select>
                                        <span class="text-danger d-block my-2" id="move_to_city_error"></span>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-xl-4">
                                        <label for="move_to_address" class="form-label">{{ __('Address') }} <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="move_to_address" name="move_to_address" maxlength="200" rows="1"></textarea>
                                        <span class="text-danger d-block my-2" id="move_to_address_error"></span>
                                    </div>
                                </div>
                                <!-- Move To End -->

                                <!-- Service Details: -->
                                <div class="row gy-2">
                                    <p class="fw-bold mb-1">
                                        {{ __('Service Details:') }}
                                    </p>

                                    <!-- Service Type Start: -->
                                    <div class="col-xl-4">
                                        <label for="service_type" class="form-label">{{ __('Service Type') }} <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="service_type" name="service_type">
                                            <option value="">{{ __('Select Type') }}</option>
                                            @foreach ($serviceTypes as $serviceType)
                                                <option value="{{ $serviceType->id }}">
                                                    {{ $serviceType->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="service_type_error"></span>
                                    </div>
                                    <!-- Service Type End: -->

                                    <!-- Shifting End Date Start : -->
                                    <div class="col-xl-4">
                                        <label for="shifting_end_date" class="form-label">{{ __('Shifting End Date') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="date" class="form-control " id="shifting_end_date"
                                            name="shifting_end_date">
                                        <span class="text-danger d-block my-2" id="shifting_end_date_error"></span>
                                    </div>
                                    <!-- Shifting End Date End : -->

                                    <!-- Goods Type Start: -->
                                    <div class="col-xl-4">
                                        <label for="goods_type" class="form-label">{{ __('Goods Type') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control" id="goods_type" name="goods_type">
                                            <option value="">{{ __('Select Goods Type') }}</option>
                                            @foreach ($goodsTypes as $goodsType)
                                                <option value="{{ $goodsType->id }}">
                                                    {{ $goodsType->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="goods_type_error"></span>
                                    </div>
                                    <!-- Goods Type End: -->

                                    <!-- Shifting Distance Start: -->
                                    <div class="col-xl-4">
                                        <label for="shifting_distance"
                                            class="form-label">{{ __('Shifting Distance (in KM)') }}</label>
                                        <input type="tel" class="form-control " id="shifting_distance"
                                            name="shifting_distance" placeholder="e.g. 25"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="4">
                                        <span class="text-danger d-block my-2" id="shifting_distance_error"></span>
                                    </div>
                                    <!-- Shifting Distance End: -->


                                    <!-- Move Type Start: -->
                                    <div class="col-xl-4">
                                        <label for="move_type" class="form-label">{{ __('Move Type') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control" id="move_type" name="move_type">
                                            <option value="">{{ __('Select Move Type') }}</option>
                                            @foreach ($moveTypes as $moveType)
                                                <option value="{{ $moveType->id }}">
                                                    {{ $moveType->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="move_type_error"></span>
                                    </div>
                                    <!-- Move Type End: -->

                                    <!-- Vehicle Type Start: -->
                                    <div class="col-xl-4">
                                        <label for="vehicle_type" class="form-label">{{ __('Vehicle Type') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control " id="vehicle_type" name="vehicle_type">
                                            <option value="">{{ __('Select Vehicle Type') }}</option>
                                            @foreach ($vehicleTypes as $vehicleType)
                                                <option value="{{ $vehicleType->id }}">
                                                    {{ $vehicleType->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="vehicle_type_error"></span>
                                    </div>
                                    <!-- Vehicle Type End: -->

                                    <!-- Pickup Floor Start: -->
                                    <div class="col-xl-4">
                                        <label for="pickup_floor" class="form-label">{{ __('Pickup Floor') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control " id="pickup_floor" name="pickup_floor">
                                            <option value="">{{ __('Select Pickup Floor') }}</option>
                                            @foreach ($pickupFloors as $pickupFloor)
                                                <option value="{{ $pickupFloor->id }}">
                                                    {{ $pickupFloor->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="pickup_floor_error"></span>
                                    </div>
                                    <!-- Pickup Floor End: -->

                                    <!-- Insurance Start: -->
                                    <div class="col-xl-4">
                                        <label for="insurance" class="form-label">{{ __('Is Insurance Required?') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control " id="insurance" name="insurance">
                                            <option value="">{{ __('Select Option') }}</option>
                                            @foreach ($insuranceOptions as $insuranceOption)
                                                <option value="{{ $insuranceOption->id }}">
                                                    {{ $insuranceOption->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="insurance_error"></span>
                                        <!-- Insurance End: -->
                                    </div>

                                    <!-- Shifting Start Date Start: -->
                                    <div class="col-xl-4">
                                        <label for="shifting_start_date"
                                            class="form-label">{{ __('Shifting Start Date') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="date" class="form-control " id="shifting_start_date"
                                            name="shifting_start_date">
                                        <span class="text-danger d-block my-2" id="shifting_start_date_error"></span>
                                    </div>
                                    <!-- Shifting Start Date Start: -->

                                    <!-- Labour Count Start: -->
                                    <div class="col-xl-4">
                                        <label for="labour_count" class="form-label">{{ __('Labour Count') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control " id="labour_count" name="labour_count">
                                            <option value="">{{ __('Select Labour Count') }}</option>
                                            @foreach ($labourCounts as $labourCount)
                                                <option value="{{ $labourCount->id }}">
                                                    {{ $labourCount->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="labour_count_error"></span>
                                    </div>
                                    <!-- Labour Count End: -->

                                    <!-- Pickup Lift Start: -->
                                    <div class="col-xl-4">
                                        <label for="pickup_lift" class="form-label">{{ __('Pickup Lift Available') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control " id="pickup_lift" name="pickup_lift">
                                            <option value="">{{ __('Select Pickup Lift') }}</option>
                                            @foreach ($liftOptions as $liftOption)
                                                <option value="{{ $liftOption->id }}">
                                                    {{ $liftOption->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger d-block my-2" id="pickup_lift_error"></span>
                                    </div>
                                    <!-- Pickup Lift End: -->
                                </div>
                                <!-- Service Details: -->

                                <!-- Service Charges: -->
                                <p class="fw-bold mb-1">
                                    {{ __('Service Charges:') }}
                                </p>
                                <div class="col-xl-4 my-1">
                                    <!-- Base Charges Start: -->
                                    <label for="base_charges" class="form-label">{{ __('Base Charges') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="tel" class="form-control " id="base_charges" name="base_charges"
                                        placeholder="Base Charges" maxlength="7"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                    <span class="text-danger d-block my-2" id="base_charges_error"></span>
                                    <!-- Base Charges End: -->

                                    <!-- Unloading Charges Start: -->
                                    <label for="unloading_charges"
                                        class="form-label">{{ __('Unloading Charges') }}</label>
                                    <input type="tel" class="form-control " id="unloading_charges"
                                        name="unloading_charges" placeholder="Unloading Charges" maxlength="6"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                    <span class="text-danger d-block my-2" id="unloading_charges_error"></span>
                                    <!-- Unloading Charges End: -->

                                    <!-- Discount Start: -->
                                    <label for="discount" class="form-label my-2">{{ __('Discount') }}</label>
                                    <input type="tel" class="form-control " id="discount" name="discount"
                                        placeholder="Discount" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                        maxlength="5">
                                    <span class="text-danger d-block my-2" id="discount_error"></span>
                                    <!-- Discount End: -->
                                </div>

                                <div class="col-xl-4 my-1">
                                    <!-- Packing Charges Start: -->
                                    <label for="packing_charges" class="form-label">{{ __('Packing Charges') }}</label>
                                    <input type="tel" class="form-control " id="packing_charges"
                                        name="packing_charges" placeholder="Packing Charges"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="6">
                                    <span class="text-danger d-block my-2" id="packing_charges_error"></span>
                                    <!-- Packing Charges End: -->

                                    <!-- Transportation Charge Start: -->
                                    <label for="transportation_charges"
                                        class="form-label">{{ __('Transportation Charges') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="tel" class="form-control " id="transportation_charges"
                                        name="transportation_charges" placeholder="Transportation Charges"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="6">
                                    <span class="text-danger d-block my-2" id="transportation_charges_error"></span>
                                    <!-- Transportation Charge End: -->

                                    <!-- Insurance Amount Start: -->
                                    <label for="insurance_amount"
                                        class="form-label my-2">{{ __('Insurance Amount') }}</label>
                                    <input type="tel" class="form-control " id="insurance_amount"
                                        name="insurance_amount" placeholder="Insurance Amount"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="7">
                                    <span class="text-danger d-block my-2" id="insurance_amount_error"></span>
                                    <!-- Insurance Amount End: -->
                                </div>

                                <div class="col-xl-4 my-1">
                                    <!-- Loading Charges Start: -->
                                    <label for="loading_chargers" class="form-label">{{ __('Loading Charges') }}</label>
                                    <input type="tel" class="form-control " id="loading_chargers"
                                        name="loading_chargers" placeholder="Loading Charges"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="6">
                                    <span class="text-danger d-block my-2" id="loading_chargers_error"></span>
                                    <!-- Loading Charges End: -->

                                    <!-- GST Start: -->
                                    <label for="from_gst" class="form-label">{{ __('GST (%)') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="tel" class="form-control " id="gst" name="gst"
                                        placeholder="GST%"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '',),calculateAllTotals();"
                                        maxlength="2">
                                    <span class="text-danger d-block my-2" id="gst_error"></span>
                                    <!--GST End: -->

                                    <!-- Servise Total Start: -->
                                    <label for="service_total"
                                        class="form-label my-2">{{ __('Servise Total Amount') }}</label>
                                    <input type="tel" class="form-control " id="service_total" name="service_total"
                                        placeholder="Servise Total"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                    <span class="text-danger d-block my-2" id="service_total_error"></span>
                                    <!--Servise Total End: -->
                                </div>

                                <div class="col-xl-12">
                                    <p class="fw-bold mb-1">
                                        {{ __('Item/Particulars Details:') }} <span id="item-count"
                                            class="text-primary">({{ __('Items') }}: 1)</span>
                                    </p>
                                    <div class="table-responsive" style="max-height: 600px; overflow-y: auto;">
                                        <div id="item_warning_msg" style="display:none;"></div>
                                        <table class="table nowrap text-nowrap  mt-3">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('ITEM') }}</th>
                                                    <th>{{ __('DESCRIPTION') }}</th>
                                                    <th>{{ __('Unit Price') }}</th>
                                                    <th>{{ __('QUANTITY') }}</th>
                                                    <th>{{ __('TOTAL') }}</th>
                                                    <th>{{ __('ACTION') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody id="item_table">
                                                <tr class="item-row">
                                                    <td>
                                                        <input type="text" class="form-control item_name"
                                                            name="item_name[]" maxlength="70" placeholder="Item Name">
                                                        <span class="text-danger d-block my-2"
                                                            id="item_name_error"></span>
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control description" name="item_description[]" maxlength="200" rows="1"
                                                            placeholder="Description"></textarea>
                                                        <span class="text-danger d-block my-2"
                                                            id="item_description_error"></span>
                                                    </td>
                                                    <td>
                                                        <input type="tel" class="form-control unit_price"
                                                            name="unit_price[]" placeholder="Price" maxlength="10"
                                                            oninput="this.value = this.value.replace(/[^0-9]/g, ''); calculateAllTotals();">
                                                        <span class="text-danger d-block my-2"
                                                            id="unit_price_error"></span>
                                                    </td>
                                                    <td class="invoice-quantity-container">
                                                        <div class="input-group  rounded flex-nowrap">
                                                            <!-- Minus Button -->
                                                            <button
                                                                class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-minus"
                                                                name="quantity_minus" type="button">
                                                                <i class="ri-subtract-line"></i>
                                                            </button>
                                                            <input type="text"
                                                                class="form-control form-control-sm -0 text-center w-100 qty_input disabled-look"
                                                                aria-label="quantity" value="1" readonly
                                                                name="quantity[]" id="quantity[]">
                                                            <!-- Plus Button -->
                                                            <button
                                                                class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-plus"
                                                                type="button" name="quantity" id="quantity">
                                                                <i class="ri-add-line"></i>
                                                            </button>
                                                        </div>
                                                        <span class="text-danger" name="quantity_error"></span>
                                                    </td>
                                                    <td>
                                                        <input type="tel"
                                                            class="form-control total_item disabled-look"
                                                            placeholder="Total" name="total_item" type="text"
                                                            value="0" readonly>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-icon btn-danger-light"
                                                            onclick="removeRow(this)"><i
                                                                class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="6" class="-bottom-0">
                                                        <span class="btn btn-light" onclick="addItemInputes();">
                                                            <i class="bi bi-plus-lg"></i>
                                                            {{ __('Add Item') }}
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"></td>
                                                    <td colspan="2">
                                                        <table class="table table-sm text-nowrap mb-0 table-less">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="fw-semibold">
                                                                            {{ __('Sub Total :') }}
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <input type="tel"
                                                                            class="form-control invoice-amount-input disabled-look"
                                                                            placeholder="0" id="sub_amount"
                                                                            name="sub_amount" readonly
                                                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6);">
                                                                        <span class="text-danger d-block my-2"
                                                                            id="sub_amount_error"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="fw-semibold">
                                                                            {{ __('Avail Discount(%) :') }}</div>
                                                                    </th>
                                                                    <td>
                                                                        <input type="tel"
                                                                            class="form-control invoice-amount-input"
                                                                            placeholder="0" id="avail_discount_amount"
                                                                            name="avail_discount_amount"
                                                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); calculateAllTotals();"
                                                                            maxlength="3">
                                                                        <span class="text-danger d-block my-2"
                                                                            id="avail_discount_amount_error"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="fw-semibold">
                                                                            {{ __('GST / VAT(%):') }}
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <input type="tel"
                                                                            class="form-control invoice-amount-input disabled-look"
                                                                            id="vat" name="vat" maxlength="10"
                                                                            readonly placeholder="0"
                                                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6);,calculateAllTotals();">
                                                                        <span class="text-danger d-block my-2"
                                                                            id="vat_error"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="fw-semibold">
                                                                            {{ __('Advance Received:') }}</div>
                                                                    </th>
                                                                    <td>
                                                                        <input type="tel"
                                                                            class="form-control invoice-amount-input"
                                                                            id="advance_received" name="advance_received"
                                                                            placeholder="0" maxlength="10"
                                                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 9); calculateAllTotals();">
                                                                        <span class="text-danger d-block my-2"
                                                                            id="advance_received_error"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="fs-14 fw-semibold">
                                                                            {{ __('Total :') }}
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <input type="tel"
                                                                            class="form-control invoice-amount-input disabled-look"
                                                                            id="total" name="total" placeholder="0"
                                                                            readonly>
                                                                        <span class="text-danger d-block my-2"
                                                                            id="total_error"></span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <!-- Notes Start -->
                                <div class="col-xl-12 my-2">
                                    <label for="notes" class="form-label">{{ __('Additional Notes') }}</label>
                                    <textarea class="form-control" id="notes" name="notes" maxlength="250" rows="3"
                                        placeholder="Additional Notes"></textarea>
                                    <span class="text-danger d-block my-2" id="notes_error"></span>
                                </div>
                                <!-- Notes End -->

                                <!-- Terms & Conditions Start -->
                                <div class="col-xl-12">
                                    <label for="terms" class="form-label">{{ __('Terms & Conditions') }}</label>
                                    <textarea class="form-control" id="terms" name="terms" maxlength="300" rows="3"
                                        placeholder="Terms & Conditions"></textarea>
                                    <span class="text-danger d-block my-2" id="terms_error"></span>
                                </div>
                                <!-- Terms & Conditions End -->

                                <!-- Signature Label -->
                                <label class="form-label" for="signature">{{ __('Signature') }}
                                    <span class="text-danger">*</span>
                                </label>

                                <!-- Responsive Canvas Container -->
                                <div style="border: 1px solid #ccc; border-radius: 10px; padding: 10px;">
                                    <canvas id="signature-pad" style="width: 100%; height: 200px;"></canvas>
                                </div>

                                <!-- Buttons -->
                                <div class="mt-2">
                                    <button type="button" id="clear_signature" name="clear_signature"
                                        class="btn btn-primary">
                                        {{ __('Clear') }}
                                    </button>
                                </div>

                                <!-- Hidden field to store base64 image -->
                                <input class="form-control" type="hidden" name="signature_data" id="signature_data"
                                    required>
                                <span class="text-danger" id="signature_error"></span>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-light me-1">
                                    {{ __('Cancel') }}
                                </button>
                                <button class="btn btn-primary" type="button"
                                    onclick="saveQuotation(event);">{{ __('Save Quotation') }}
                                    <i class="ri-send-plane-2-line ms-1 align-middle d-inline-block"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Start -->
                    <div class="col-xxl-3 col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Mode Of Payment
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <div class="btn-group" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                            <label class="btn btn-outline-light mt-sm-0 mt-1" for="btnradio2">UPI</label>
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio11"
                                                checked="">
                                            <label class="btn btn-outline-light mt-sm-0 mt-1"
                                                for="btnradio11">Credit/Debit
                                                Card</label>
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3"
                                                checked="">
                                            <label class="btn btn-outline-light mt-sm-0 mt-1" for="btnradio3">Digital
                                                Wallet</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <input type="text" class="form-control" placeholder="Card Holder Name">
                                    </div>
                                    <div class="col-xl-12">
                                        <input type="text" class="form-control" id="invoice-payment-cardname"
                                            placeholder="Card Number" value="1234 5678 9087 XXXX">
                                        <label for="invoice-payment-cardname" class="form-label mb-0"><a
                                                class="text-danger fs-11" href="javascript:void(0);">Enter valid card
                                                number*</a></label>
                                    </div>
                                    <div class="col-xl-12">
                                        <input type="text" class="form-control mb-2" placeholder="CVV">
                                    </div>
                                    <div class="col-xl-12">
                                        <input type="text" class="form-control mb-2" placeholder="Enter OTP">
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="alert alert-success" role="alert">
                                            Please Make sure to pay the invoice bill within 30 days.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Payment End-->
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- End::app-content -->
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let signaturePad = null;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('input', '.item_name, .description, .unit_price, .qty_input', function() {
            $('#item_warning_msg').hide();
        });

        $(document).on('input',
            '#base_charges, #packing_charges, #loading_chargers, #transportation_charges, #insurance_amount, #unloading_charges, #discount, #gst',
            function() {
                calculateAllTotals();
            });


        var itemRowId = 1;

        function addItemInputes() {
            var isValid = true;
            var lastRow = $('#item_table .item-row:last');


            if (lastRow.length > 0) {
                var itemName = lastRow.find('.item_name').val();
                var description = lastRow.find('.description').val();
                var unitPrice = lastRow.find('.unit_price').val();
                var quantity = lastRow.find('.qty_input').val();

                if (!itemName || !description || !unitPrice || !quantity) {
                    $('#item_warning_msg').text("⚠️ Please fill all item details before adding a new one!").css({
                        color: 'red',
                        fontWeight: 'bold',
                        marginTop: '10px'
                    }).show();

                    setTimeout(function() {
                        $('#item_warning_msg').hide();
                    }, 7000);
                    return;
                }
            }

            itemRowId++;
            var newRow = `
            <tr class="item-row" data-row="${itemRowId}">
                <td>
                    <input type="text" class="form-control item_name" name="item_name[]" maxlength="70" placeholder="Item Name">
                    <span class="text-danger d-block my-2 item_name_error"></span>
                </td>
                <td>
                    <textarea class="form-control description" name="item_description[]" maxlength="200" rows="1" placeholder="Description"></textarea>
                    <span class="text-danger d-block my-2 item_description_error"></span>
                </td>
                <td>
                    <input type="tel" class="form-control unit_price" name="unit_price[]" placeholder="Price"
                     oninput="this.value = this.value.replace(/[^0-9]/g, ''); calculateAllTotals();" maxlength="10">
                    <span class="text-danger d-block my-2 unit_price_error"></span>
                </td>
                <td class="invoice-quantity-container">
                    <div class="input-group  rounded flex-nowrap">
                        <button type="button"
                            class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-minus" type="button">
                            <i class="ri-subtract-line"></i>
                        </button>
                        <input type="text"
                            class="form-control form-control-sm -0 text-center w-100 qty_input disabled-look"
                            data-row-id="${itemRowId}" value="1" readonly name="quantity[]" id="quantity[]">
                        <button type="button"
                            class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-plus">
                            <i class="ri-add-line" name="quantity"></i>
                        </button>
                    </div>
                     <span class="text-danger" name="quantity_error"></span>
                </td>
                <td><input class="form-control total_item disabled-look" placeholder="0" type="text" value="0" readonly></td>
                <td>
                    <button class="btn btn-sm btn-icon btn-danger-light" onclick="removeRow(this)">
                        <i class="ri-delete-bin-5-line"></i>
                    </button>
                </td>
            </tr>
            `;

            var lastRow = $('#item_table .item-row:last');

            if (lastRow.length) {
                lastRow.after(newRow);
            } else {
                $('#item_table').prepend(newRow);
            }
            updateItemCount();
        }

        function updateItemCount() {
            var count = $('#item_table .item-row').length;
            $('#item-count').text(`(Items: ${count})`);
        }

        function removeRow(button) {
            $(button).closest('tr').remove();
            updateItemCount();
        }

        // Quantity PLUS
        $(document).on('click', '.product-quantity-plus', function() {
            let input = $(this).siblings('.qty_input');
            let qty = parseInt(input.val()) || 1;
            input.val(qty + 1);
            calculateAllTotals();
        });

        // Quantity MINUS
        $(document).on('click', '.product-quantity-minus', function() {
            let input = $(this).siblings('.qty_input');
            let qty = parseInt(input.val()) || 1;
            if (qty > 1) input.val(qty - 1);
            calculateAllTotals();
        });

        //Country Change On State
        function loadLocations(id = null, targetSelector = null) {
            var $target = $(targetSelector);
            $target.html('<option value="">Loading...</option>');

            $.ajax({
                url: "{{ route('location.get') }}",
                type: "post",
                data: {
                    id: id,
                    type: targetSelector
                },
                success: function(response) {
                    $target.html('<option value="">Select</option>');
                    if (response.type == '#state' || response.type == '#move_from_state' || response.type ==
                        '#move_to_state') {
                        $.each(response.data, function(index, item) {
                            $target.append(`<option value="${item.id}">${item.name}</option>`);
                        });
                    } else {
                        $.each(response.data, function(index, item) {
                            $target.append(`<option value="${item.id}">${item.name}</option>`);
                        });
                    }
                }
            });
        }

        function calculateAllTotals() {
            var subTotal = 0;
            $('#item_table .item-row').each(function() {
                var unitPrice = $(this).find('.unit_price').val() || 0;
                var quantity = $(this).find('.qty_input').val() || 0;
                var rowTotal = unitPrice * quantity;
                $(this).find('.total_item').val(rowTotal);
                subTotal += rowTotal;
            });

            $('#sub_amount').val(subTotal);
            var discountPercent = parseFloat($('#avail_discount_amount').val()) || 0;
            var gstPercent = parseFloat($('#gst').val()) || 0;
            $('#vat').val(gstPercent);
            var advanceAmount = parseFloat($('#advance_received').val()) || 0;
            var discountAmount = (discountPercent / 100) * subTotal;
            var afterDiscount = subTotal - discountAmount;
            var gstAmount = (gstPercent / 100) * afterDiscount;
            var finalTotal = afterDiscount + gstAmount - advanceAmount;
            $('#total').val(Math.round(finalTotal));

            // Service Charges Calculation
            var baseCharges = parseFloat($('#base_charges').val()) || 0;
            var packingCharges = parseFloat($('#packing_charges').val()) || 0;
            var loadingCharges = parseFloat($('#loading_chargers').val()) || 0;
            var transportationCharges = parseFloat($('#transportation_charges').val()) || 0;
            var insuranceAmount = parseFloat($('#insurance_amount').val()) || 0;
            var unloadingCharges = parseFloat($('#unloading_charges').val()) || 0;
            var serviceDiscount = parseFloat($('#discount').val()) || 0;
            var serviceGSTPercent = parseFloat($('#gst').val()) || 0;

            var serviceSubTotal = baseCharges + packingCharges + loadingCharges +
                transportationCharges + insuranceAmount + unloadingCharges;

            var serviceAfterDiscount = serviceSubTotal - serviceDiscount;
            var serviceGSTAmount = (serviceGSTPercent / 100) * serviceAfterDiscount;
            var serviceFinalAmount = Math.round(serviceAfterDiscount + serviceGSTAmount);

            $('#servise_total').val(serviceFinalAmount);

        }

        function saveQuotation(e) {
            e.preventDefault();
            var signatureInput = $('#signature_data');
            signatureInput.val(window.signaturePad.toDataURL("image/png"));

            var form = $("#quotation_form")[0];
            var formData = new FormData(form);

            var form = $("#quotation_form")[0];
            var formData = new FormData(form);

            $.ajax({
                url: "{{ route('save.quotation') }}",
                type: "post",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    if (response.status == false) {
                        $.each(response.errors, function(key, value) {

                            if (key.startsWith('item_name')) key = 'item_name';
                            if (key.startsWith('item_description')) key = 'item_description';
                            if (key.startsWith('unit_price')) key = 'unit_price';
                            if (key.startsWith('quantity')) key = 'quantity';

                            $("#" + key).addClass('is-invalid');
                            $("#" + key + "_error").text(value[0]).show();

                        });
                    }
                }

            });
        }
    </script>
@endsection
