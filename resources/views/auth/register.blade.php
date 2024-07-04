@extends('layouts.studylayout')

@section('content')
        <div class="register-page-container">
            <div class="register-page row">
                <div class="form-section col-lg-4 col-md-12">
                    <div class="register-page-logo"><img src="/img/svg/graduate-hat.svg" alt="logo">
                    <h3>Class<span> birdie+</span></h3>

                    </div>
                    <div class="register-form container">
                        <div class="signup-left-align">
                            <p class="small-sign-up">Sign Up</p>
                            <h1>Create new account.</h1>
                            <h3>Already a member? <a href="/login">Log in</a></h3>
                        </div>
                        <form class="form w-100" data-gtm-form-interact-id="3" method='post' action="{{route('register')}}">
                            @csrf
                            <div class="input-field"><label for="Email"
                                    style="font-size: 14px; margin-bottom: 4px; color: rgb(248, 250, 251);">Email<span>*</span></label><input
                                    type="email" placeholder="Enter your email" name="email"
                                    value=""
                                    style="height: 48px; font-size: 14px; margin-bottom: 8px; color: rgba(255, 255, 255, 0.56); padding: 14px 20px; border-radius: 30px; border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(255, 255, 255, 0.04);"
                                    data-gtm-form-interact-field-id="6"></div>
                            <div class="input-field"><label for="Password"
                                    style="font-size: 14px; margin-bottom: 4px; color: rgb(248, 250, 251);">Password<span>*</span></label><input
                                    type="password" placeholder="Enter your password" name="password" minlength="8"
                                    value=""
                                    style="height: 48px; font-size: 14px; margin-bottom: 8px; color: rgba(255, 255, 255, 0.56); padding: 14px 20px; border-radius: 30px; border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(255, 255, 255, 0.04);"
                                    data-gtm-form-interact-field-id="7"></div><button class="cta-btn"
                                type="submit"><span>Create Account<img src="/img/svg/rightArrowWhite.svg"
                                        alt="arrow"></span></button>
                        </form>
                        <div class="divider"><span>OR</span></div>
                        <div class="social-logins-section">
                            <div class="social-logins">
                                <div class="login-btn"><button class="gsi-material-button"
                                        style="width: 600px; height: 100%;">
                                        <div class="gsi-material-button-state"></div>
                                        <div class="gsi-material-button-content-wrapper">
                                            <div class="gsi-material-button-icon"><svg version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
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
                                                </svg></div><a href="{{ route('google.login') }}"  onclick="event.preventDefault();
                                                         document.getElementById('google-form').submit();">Sign in with
                                        Google</span><span style="display: none;">Sign in with Google</span></a>
                                        <form method="get" id="google-form" action="{{route('google.login')}}">
                                            @csrf
                                            <input type="hidden" id="google_invite" name="google_invite" value=""/>
                                        </form>
                                        </div>
                                    </button></div>
                            </div>
                        </div>
                        <p class="terms">By creating an account you<span>agree to our Terms &amp; Conditions</span></p>
                    </div>
                    <p class="forget-pass"><a href='/login' class="registerback"><span><i class="fa fa-long-arrow-left"></i> back</span></a></p>
                </div>
                <div class="info-section col-lg-8">
                    <div class="register-side-panel">
                        <h1>Straight A’s on all ur tests, exams, <br> and assignments</h1>
                        <div class="img-container"><img src="/img/svg/signupsidepanel.svg" alt="register side panel"
                                data-xblocker="passed" style="visibility: visible;"></div>
                        <div class="Marquee">
                            <div class="MarqueeGroup">
                                <div class="MarqueeItem"><img src="/img/institutions/harvard.png"
                                        alt="institution"></div>
                                <div class="MarqueeItem"><img src="/img/institutions/mit.png" alt="institution">
                                </div>
                                <div class="MarqueeItem"><img src="/img/institutions/berkeley.png"
                                        alt="institution"></div>
                                <div class="MarqueeItem"><img src="/img/institutions/stanford.png"
                                        alt="institution"></div>
                                <div class="MarqueeItem"><img src="/img/institutions/mcgill.png"
                                        alt="institution"></div>
                                <div class="MarqueeItem"><img src="/img/institutions/thc.png" alt="institution">
                                </div>
                            </div>
                            <div class="MarqueeGroup">
                                <div class="MarqueeItem"><img src="/img/institutions/harvard.png"
                                        alt="institution"></div>
                                <div class="MarqueeItem"><img src="/img/institutions/mit.png" alt="institution">
                                </div>
                                <div class="MarqueeItem"><img src="/img/institutions/berkeley.png"
                                        alt="institution"></div>
                                <div class="MarqueeItem"><img src="/img/institutions/stanford.png"
                                        alt="institution"></div>
                                <div class="MarqueeItem"><img src="/img/institutions/mcgill.png"
                                        alt="institution"></div>
                                <div class="MarqueeItem"><img src="/img/institutions/thc.png"
                                        alt="institution"></div>
                            </div>
                        </div>
                        <div class="blur-backdrop-left"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Toastify"></div>
    {{-- </div> --}}
@endsection
