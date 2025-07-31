@extends('auth.layout')
@section('title', 'Forget Password | PackersMovers')
@section('content')
    <form id="reset_password">
        @csrf
        <div class="row gy-3">
            <input type="hidden" class="form-control form-control-lg" id="email" name="email" value="{{ $email }}">

            <div class="col-xl-12">
                <label for="new_password" class="form-label text-default">
                    {{ _(' New Password ') }} <span class="text-danger">{{ _('*') }}</span>
                </label>
                <div class="input-group">
                    <input type="password" class="form-control form-control-lg" id="new_password" name="new_password"
                        placeholder="New Password" maxlength="30">
                    <span toggle="#new_password" class="toggle-password-icon ri-eye-off-line"></span>
                </div>
                <span class="text-danger" id="new_password_error"></span>
            </div>

            <div class="col-xl-12 mb-3">
                <label for="confirm_password" class="form-label text-default">
                    {{ _('Confirm Password') }} <span class="text-danger">{{ _('*') }}</span>
                </label>
                <div class="input-group">
                    <input type="password" class="form-control form-control-lg" id="confirm_password"
                        name="confirm_password" placeholder="Confirm Password" maxlength="30">
                    <span toggle="#confirm_password" class="toggle-password-icon ri-eye-off-line"></span>
                </div>
                <span class="text-danger" id="confirm_password_error"></span>
            </div>

            <div class="mt-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                        {{ _('Remember password ?') }}
                    </label>
                </div>
            </div>

            <div class="col-xl-12 d-grid mt-2">
                <button class="btn btn-lg btn-primary" type="button"" id="password_button"
                    onclick="resetPassword();">{{ __('Reset Password') }}
                    <span class="spinner-border spinner-border-sm d-none ms-1" role="status" id="password_loader"></span>
                </button>
            </div>
        </div>
    </form>
    {!! hideValidationMsg() !!}
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
            {{ __('Sign In with Google') }}
        </a>
    </div>

    <div class="d-flex align-items-center my-4">
        <hr class="flex-grow-1">
        <span class="mx-2 text-muted">OR</span>
        <hr class="flex-grow-1">
    </div>
@endsection

@section('auth_title')
    {{ __('Set a New Password') }}
@endsection
@section('auth_footer')
    <div class="text-center">
        <p class="fs-12 text-muted mt-4">{{ __('Already have an account?') }}
            <a href="{{ route('login.form') }}" class="text-primary">{{ __('Sign In') }}</a>
        </p>
    </div>
@endsection
@section('subtitle')
    {{ __('Enter your new password below to reset your account access.') }}
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

        function resetPassword() {
            $("#password_button").addClass("disabled btn-loading");
            $("#password_loader").removeClass("d-none");
            var form = $("#reset_password")[0];
            var formData = new FormData(form);

            $.ajax({
                url: "{{ route('password.update') }}",
                type: "post",
                processData: false,
                contentType: false,
                data: formData,
                success: function(response) {
                    if (response.status == false && response.flag == false) {
                        $.each(response.errors, function(key, value) {
                            $("#" + key).addClass('is-invalid');
                            $("#" + key + "_error").text(value).show();

                            $("#password_button").removeClass("disabled btn-loading");
                            $("#password_loader").addClass("d-none");

                            setTimeout(function() {
                                $("#" + key).removeClass('is-invalid');
                                $("#" + key + "_error").hide();
                            }, 7000);
                        });
                        $("#reset_password")[0].reset();
                    } else if (response.status == false && response.flag == 'user_not_found') {
                        $("#password_button").removeClass("disabled btn-loading");
                        $("#password_loader").addClass("d-none");
                        alert(response.msg);
                        $("#reset_password")[0].reset();
                        //toaster here
                    } else {
                        $("#password_button").removeClass("disabled btn-loading");
                        $("#password_loader").addClass("d-none");
                        alert(response.msg);
                        $("#reset_password")[0].reset();
                        //toaster here
                    }
                }
            });
        }
    </script>
@endsection
