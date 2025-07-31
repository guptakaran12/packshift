@extends('auth.layout')
@section('title', 'SignUp | PackersMovers')
@section('content')
    <form id="signup_form">
        @csrf
        <div class="row gy-3">
            <div class="col-xl-12 mt-0">
                <label for="first_name" class="form-label text-default">
                    {{ __('First Name') }} <span class="text-danger">{{ __('*') }}</span>
                </label>
                <input type="text" class="form-control form-control-lg" id="first_name" name="first_name"
                    placeholder="First Name" maxlength="50" autofocus>
                <span class="text-danger fw-bold" id="first_name_error" style="display:none"></span>
            </div>

            <div class="col-xl-12">
                <label for="last_name" class="form-label text-default">
                    {{ __('Last Name') }} <span class="text-danger">{{ __('*') }}
                </label>
                <input type="text" class="form-control form-control-lg" id="last_name" name="last_name"
                    placeholder="Last Name" maxlength="50">
                <span class="text-danger fw-bold" id="last_name_error" style="display:none"></span>
            </div>

            <div class="col-xl-12">
                <label for="user_name" class="form-label text-default">
                    {{ __('UserName') }} <span class="text-danger">{{ __('*') }}
                </label>
                <input type="text" class="form-control form-control-lg" id="user_name" name="user_name"
                    placeholder="User Name" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                <span class="text-danger fw-bold" id="user_name_error" style="display:none"></span>
            </div>

            <div class="col-xl-12">
                <label for="email" class="form-label text-default">
                    {{ __('Email') }} <span class="text-danger">{{ __('*') }}
                </label>
                <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Email"
                    maxlength="50">
                <span class="text-danger fw-bold" id="email_error" style="display:none"></span>
            </div>

            <div class="col-xl-12">
                <label for="password" class="form-label text-default">
                    {{ __('Password') }} <span class="text-danger">*</span>
                </label>
                <div class="input-group position-relative">
                    <input type="password" class="form-control form-control-lg password-field" id="password"
                        name="password" placeholder="Password" maxlength="30">
                    <span toggle="#password" class="toggle-password-icon ri-eye-off-line"></span>
                </div>
                <span class="text-danger fw-bold" id="password_error" style="display:none"></span>
            </div>

            <div class="col-xl-12 mb-3">
                <label for="password_confirmation" class="form-label text-default">
                    {{ __('Confirm Password') }} <span class="text-danger">*</span>
                </label>
                <div class="input-group position-relative">
                    <input type="password" class="form-control form-control-lg password-field" id="password_confirmation"
                        name="password_confirmation" placeholder="Confirm Password" maxlength="30">
                    <span toggle="#password_confirmation" class="toggle-password-icon ri-eye-off-line"></span>
                </div>
                <span class="text-danger fw-bold" id="password_confirmation_error" style="display:none"></span>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label text-muted fw-normal" for="defaultCheck1" id="terms_check">
                    {{ __('By creating an account you agree to our') }}
                    <a href="#" class="text-primary"><u>{{ __('Terms & Conditions') }}</u></a>
                    {{ __('and') }}
                    <a class="text-primary"><u>{{ __('Privacy Policy') }}</u></a>
                </label>
                <span class="text-danger fw-bold" id="terms_error" style="display:none"></span>
            </div>
        </div>
        <div class="col-xl-12 d-grid mt-2">
            <button class="btn btn-lg btn-primary" id="register_button" type="button"
                onclick="signUpUser();">{{ __('Create Account') }}
                <span class="spinner-border spinner-border-sm d-none ms-1" role="status" id="register_loader"></span>
            </button>
        </div>
    </form>
    {!! hideValidationMsg() !!}
    {!! ajaxErrorHandlerScript() !!}
@endsection

@section('auth_image')
    <img src="{{ asset('assets/images/authentication/sign-up.png') }}" class="authentication-image" alt="">
@endsection

@section('auth_cover_title')
    {{ __('Sign Up') }}
@endsection

@section('auth_cover_message')
    {{ __('dashboard to manage quotations, invoices, payments, and deliveries — all in one place. Download reports, receive notifications, and simplify your entire moving business.') }}
@endsection

@section('social_links')
    <div class="text-center mb-0">
        <a href="{{ route('auth.google') }}"
            class="btn btn-light border d-flex align-items-center justify-content-center w-100"
            style="gap: 10px; padding: 8px 0;">
            <svg class="google-svg me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 256 262">
                <path fill="#4285F4"
                    d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.690H130.550v48.448h71.947c-1.450 12.040-9.283 30.172-26.690 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" />
                <path fill="#34A853"
                    d="M130.550 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.820 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.250l-1.531.130-40.298 31.187-.527 1.465C35.393 231.798 79.490 261.1 130.550 261.1" />
                <path fill="#FBBC05"
                    d="M56.281 156.370c-2.756-8.123-4.351-16.827-4.351-25.820 0-8.994 1.595-17.697 4.206-25.820l-.073-1.730L15.260 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.550s5.077 40.905 13.925 58.602l42.356-32.782" />
                <path fill="#EB4335"
                    d="M130.550 50.479c24.514 0 41.050 10.589 50.479 19.438l36.844-35.974C195.245 12.910 165.798 0 130.550 0 79.490 0 35.393 29.301 13.925 71.947l42.211 32.783c10.590-31.477 39.891-54.251 74.414-54.251" />
            </svg>
            {{ __('Sign Up with Google') }}
        </a>
    </div>

    <div class="d-flex align-items-center my-4">
        <hr class="flex-grow-1">
        <span class="mx-2 text-muted">OR</span>
        <hr class="flex-grow-1">
    </div>
@endsection

@section('style')
    <style>
        html,
        body {
            height: auto !important;
            overflow-y: auto !important;
            background-color: #fff;
        }

        .auth-container {
            min-height: unset !important;
            padding: 40px 0;
        }

        .authentication .col-xxl-7 {
            align-items: start !important;
        }

        @media (max-width: 576px) {
            .auth-container {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        }
    </style>
@endsection

@section('auth_title')
    {{ __('Sign Up') }}
@endsection

@section('subtitle')
    {{ __('Create your account to simplify every move.') }}
@endsection

@section('auth_footer')
    <div class="text-center">
        <p class="fs-12 text-muted mt-3">{{ __('Already have an account?') }}
            <a href="{{ route('login') }}" class="text-primary">
                {{ __('Sign In') }}
            </a>
        </p>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            hideValidationMsg();
        });

        $('.toggle-password-icon').click(function() {
            const input = $($(this).attr('toggle'));
            const type = input.attr('type') === 'password' ? 'text' : 'password';
            input.attr('type', type);
            $(this).toggleClass('ri-eye-off-line ri-eye-line');
        });

        function signUpUser() {
            $("#register_button").addClass("disabled btn-loading");
            $("#register_loader").removeClass("d-none");

            var allFilled = true;
            var requiredFields = ['first_name', 'last_name', 'user_name', 'email', 'password', 'password_confirmation'];

            requiredFields.forEach(function(field) {
                if ($("#" + field).val().trim() === "") {
                    allFilled = false;
                }
            });

            if (allFilled) {
                if (!$("#defaultCheck1").is(":checked")) {
                    $("#terms_error").text("Please accept the Terms & Conditions and Privacy Policy.").show();
                    $("#register_button").removeClass("disabled btn-loading");
                    $("#register_loader").addClass("d-none");
                    return;
                } else {
                    $("#terms_error").hide();
                }
            } else {
                $("#terms_error").hide();
            }

            var form = $("#signup_form")[0];
            var formData = new FormData(form);

            $.ajax({
                url: "{{ route('register.submit') }}",
                type: "post",
                contentType: false,
                processData: false,
                data: formData,
                success: function(response) {
                    if (!response.status) {
                        $.each(response.errors, function(key, value) {
                            $("#" + key).addClass('is-invalid');
                            $("#" + key + "_error").text(value[0]).show();

                            $("#register_button").removeClass("disabled btn-loading");
                            $("#register_loader").addClass("d-none");

                            $("#password").val("");
                            $("#password_confirmation").val("");

                            setTimeout(function() {
                                $.each(response.errors, function(key) {
                                    $("#" + key).removeClass('is-invalid');
                                    $("#" + key + "_error").hide();
                                });
                            }, 7000);
                        });
                    } else {
                        $("#register_button").removeClass("disabled btn-loading");
                        $("#register_loader").addClass("d-none");
                        $("#signup_form")[0].reset();
                        window.location.href = response.redirect_url;
                    }
                },
                error: function(xhr) {
                    handleAjaxError(xhr, {
                        formSelector: '#signup_form',
                        buttonSelector: '#register_button',
                        loaderSelector: '#register_loader',
                        fallbackMessage: 'Register failed.'
                    });
                }
            });
        }
    </script>
@endsection
