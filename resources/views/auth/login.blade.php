@extends('layouts.studylayout')

@section('content')
    <div class="login-page container">
        <div class="header logo-align-center">
            <div class="logo"><img src="/img/logo/bullseyelogo.png" alt="logo">
                <h3>Class<span> birdie+</span></h3>
            </div>
        </div>
        <div class="login-section">
            <h1>Login to Studybuddy+</h1>
            <h3>Don't have an account?<a href="/register"> Create One</a></h3>
            <div class="login-form">
                <form class="form" data-gtm-form-interact-id="3" id="login" method="POST"
                    action="{{ route('login') }}">
                    @csrf
                    <div class="input-field"><label for="Email"
                            style="font-size: 14px; margin-bottom: 4px; color: rgb(248, 250, 251);">Email<span>*</span></label><input
                            type="email" placeholder="Email" name="email" value=""
                            style="height: 48px; font-size: 14px; margin-bottom: 8px; color: rgba(255, 255, 255, 0.56); padding: 14px 20px; border-radius: 30px; border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(255, 255, 255, 0.04);"
                            data-gtm-form-interact-field-id="6"></div>
                    <div class="input-field"><label for="Password"
                            style="font-size: 14px; margin-bottom: 4px; color: rgb(248, 250, 251);">Password<span>*</span></label><input
                            type="password" placeholder="Password" name="password" value=""
                            style="height: 48px; font-size: 14px; margin-bottom: 8px; color: rgba(255, 255, 255, 0.56); padding: 14px 20px; border-radius: 30px; border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(255, 255, 255, 0.04);"
                            data-gtm-form-interact-field-id="7"></div>
                    <!-- <p class="forget-pass">Forgot your password?<a href="/forget-password"> Click Here</a></p> -->
                    <button class="cta-btn" type="submit"><span>Login<img src="/img/svg/rightArrowWhite.svg"
                                alt="arrow"></span></button>
                </form>
                <div class="divider"><span>OR</span></div>
                <div class="social-logins">
                    <div class="login-btn"><button class="gsi-material-button" style="width: 600px; height: 100%;">
                            <div class="gsi-material-button-state"></div>
                            <div class="gsi-material-button-content-wrapper">
                                <div class="gsi-material-button-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 48 48" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        style="display: block;">
                                        <path fill="#EA4335"
                                            d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                        </path>
                                        <path fill="#4285F4"
                                            d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                                        </path>
                                        <path fill="#FBBC05"
                                            d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                        </path>
                                        <path fill="#34A853"
                                            d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                        </path>
                                        <path fill="none" d="M0 0h48v48H0z"></path>
                                    </svg></div><span class="gsi-material-button-contents"><a
                                        href="{{ route('google.login') }}"
                                        onclick="event.preventDefault();
                                                         document.getElementById('google-form').submit();">Sign
                                        in with
                                        Google</span><span style="display: none;">Sign in with Google</span></a>
                                <form method="get" id="google-form" action="{{ route('google.login') }}">
                                    @csrf
                                    <input type="hidden" id="google_invite" name="google_invite" value="" />
                                </form>
                            </div>
                        </button></div>
                </div>
            </div>
            <p class="terms">By Logging In, you agree to the <a href="https://www.studybuddy.gg/terms-conditions">Terms
                    &amp; <br>Conditions</a>and <a href="https://www.studybuddy.gg/privacy-policy">Privacy Policy.</a>
            </p>
        </div>
        <div class="pattern-bg"><img class="left" src="/img/svg/pattern.svg" alt="pattern" data-xblocker="passed"
                style="visibility: visible;"><img class="right" src="/img/svg/pattern.svg" alt="pattern"
                data-xblocker="passed" style="visibility: visible;">
            <div class="blur-backdrop-left"></div>
            <div class="blur-backdrop-right"></div>
        </div>
    </div>
    @push('script')
        <script>
            $(document).ready(function() {
                var google_invite = localStorage.getItem('invite');
                console.log(google_invite)
                $('#google_invite').val(google_invite)
                $('#login').on('submit', function(e) {
                    e.preventDefault();
                    var invite = localStorage.getItem('invite');
                    var form_data = $('#login').serialize();
                    if (invite) {
                        form_data += '&invite=' + encodeURIComponent(
                            invite); // Use encodeURIComponent to ensure the invite code is URL-encoded
                    }
                    console.log(form_data);
                    $.ajax({
                        url: "{{ route('login') }}",
                        method: 'post',
                        data: form_data,
                        dataType: 'json',
                        success: function(res) {
                            console.log(res, 'res')
                            if (res.status == 1) {
                                localStorage.setItem('token', res.data.token);
                                localStorage.setItem('user_id', res.data.id)
                                localStorage.removeItem('invite');
                                window.location.href = "{{ route('dashboard') }}";
                                toastr.success(res.message)
                            } else if (res.status == 0) {
                                toastr.warning(res.message)
                            } else if (res.status == 3) {
                                if (res.error.length > 0) {
                                    for (var i = 0; i < res.error.length; i++) {
                                        toastr.warning(res.error[i])
                                    }
                                }
                            }
                        }
                    })
                })
            })
        </script>
    @endpush
@endsection
