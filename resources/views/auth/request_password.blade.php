@extends('auth.layout')
@section('title', 'Password Request | PackersMovers')
@section('content')
    <form id="password_request">
        @csrf
        <div class="row gy-3">
            <div class="col-xl-12 mt-0">
                <label for="username_or_email" class="form-label text-default">
                    {{ __('UserName Or Email') }} <span class="text-danger">{{ __('*') }}</span>
                </label>
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" id="username_or_email" name="username_or_email"
                        placeholder="UserName Or Email" maxlength="60" autofocus>
                </div>
                <span class="text-danger fw-bold" id="username_or_email_error"></span>
            </div>

            <div class="col-xl-12 d-grid mt-2">
                <button type="button" class="btn btn-lg btn-primary" id="reset_button"
                    onclick="sendResetPassword();">{{ __('Send Reset Link') }}
                    <span class="spinner-border spinner-border-sm d-none ms-1" role="status" id="reset_loader"></span>
                </button>
            </div>
        </div>
    </form>
    {!! hideValidationMsg() !!}
    {!! ajaxErrorHandlerScript() !!}
@endsection



@section('auth_image')
    <img src="{{ asset('assets/images/authentication/reset-password.png') }}" class="authentication-image" alt="">
@endsection

@section('auth_cover_title')
    {{ __('Forgot your password?') }}
@endsection

@section('auth_cover_message')
    {{ __('Don’t worry — resetting it is quick and easy. We’ll send you instructions to get back into your PackShift dashboard.') }}
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
            {{ __('Continue with Google') }}
        </a>
    </div>

    <div class="d-flex align-items-center my-4">
        <hr class="flex-grow-1">
        <span class="mx-2 text-muted">OR</span>
        <hr class="flex-grow-1">
    </div>
@endsection

@section('auth_footer')
    <div class="text-center">
        <p class="fs-12 text-muted mt-4">
            <a href="{{ route('login.form') }}" class="text-primary">{{ __('Back to Login') }}</a>
        </p>
    </div>
@endsection

@section('auth_title')
    {{ __('Reset Password') }}
@endsection

@section('subtitle')
    {{ __('If you forgot your password, don’t worry! We’ll email you instructions to reset it.') }}
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            hideValidationMsg();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        function sendResetPassword() {
            $("#reset_button").addClass("disabled btn-loading");
            $("#reset_loader").removeClass("d-none");
            var data = $("#username_or_email").val();

            $.ajax({
                url: "{{ route('password.verify.email') }}",
                type: "post",
                data: {
                    data: data
                },
                success: function(response) {
                    if (response.status == false && response.flag == false) {
                        $("#username_or_email").addClass('is-invalid');
                        $("#username_or_email_error").text(response.errors.data).show();

                        $("#reset_button").removeClass("disabled btn-loading");
                        $("#reset_loader").addClass("d-none");

                        setTimeout(() => {
                            $("#username_or_email").removeClass('is-invalid');
                            $("#username_or_email_error").text("").hide();
                        }, 7000);
                    } else if (response.status == false && response.flag == true) {
                        $("#reset_button").removeClass("disabled btn-loading");
                        $("#reset_loader").addClass("d-none");
                        $("#username_or_email").val("");
                        new Toast({
                            title: response.message || "No account found with this username or email.",
                            type: "error",
                            position: "top-center"
                        }).show();
                    } else {
                        $("#reset_button").removeClass("disabled btn-loading");
                        $("#reset_loader").addClass("d-none");
                        $("#username_or_email").val("");
                        window.location.href = response.redirect_url;
                    }
                },
                error: function(xhr) {
                    handleAjaxError(xhr, {
                        formSelector: '#password_request',
                        buttonSelector: '#reset_button',
                        loaderSelector: '#reset_loader',
                        fallbackMessage: 'Forget password failed.'
                    });
                }
            });
        }
    </script>
@endsection
