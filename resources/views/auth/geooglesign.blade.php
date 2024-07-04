@extends('layouts.studylayout')
@section('content')
    <div class="payment-details-container">
        <div class="payment-details row">
            <div class="payment-section col-lg-4 col-md-12">
                <div class="payment-form-section">
                    <h1>Free For 72 hours!</h1>
                    <h3>Renews at $7.99/week</h3>
                    <div class="payment-form">
                        <div class="checkout-form">
                            <form id="payment-form" method='post' data-secret="{{ $data['intent'] }}">

                                <div id="payment-element" class="StripeElement">
                                </div>
                                <div id="link-authentication-element" class="StripeElement">
                                </div>
                                <button type="button" class="cta-btn pay_now_button" type="submit"><span>Let's Go<img
                                            src="/img/svg/rightArrowWhite.svg" alt="arrow"></span></button>
                                <p class="terms">By continuing, you authorize Studybuddy2 LLC to charge your account
                                    for this payment and future payments in accordance with Studybuddy2 LLC's terms,
                                    until this authorization is revoked.<br>By optionally providing your phone number,
                                    you agree to receive marketing text messages. <a
                                        href="https://studybuddy.gg/terms-conditions" target="_blank">Terms of
                                        Service.</a></p>
                                <input type='hidden' name='pay_id' id="pay_id" value="{{ $data['id'] }}" />
                            </form>
                        </div>
                    </div>
                </div>
                <a class="logout" href="{{ route('profile') }}"
                            onclick="event.preventDefault();
                                    localStorage.removeItem('token');
                                    localStorage.removeItem('id');
                                                     document.getElementById('logout-form').submit();">
                                                     <img src="/img/svg/rightArrowWhite.svg" alt="arrow">
                            <p>{{ __('Back') }}</p>

                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
            </div>
            <div class="info-section col-lg-8">
                <div class="register-side-panel">
                    <h1>Straight A’s on all ur tests, exams, <br> and assignments</h1>
                    <div class="img-container"><img src="/img/svg/signupsidepanel.svg" alt="register side panel"
                            data-xblocker="passed" style="visibility: visible;"></div>
                    <div class="Marquee">
                        <div class="MarqueeGroup">
                            <div class="MarqueeItem"><img src="/img/institutions/harvard.png" alt="institution"></div>
                            <div class="MarqueeItem"><img src="/img/institutions/mit.png" alt="institution"></div>
                            <div class="MarqueeItem"><img src="/img/institutions/berkeley.png" alt="institution"></div>
                            <div class="MarqueeItem"><img src="/img/institutions/stanford.png" alt="institution"></div>
                            <div class="MarqueeItem"><img src="/img/institutions/mcgill.png" alt="institution"></div>
                            <div class="MarqueeItem"><img src="/img/institutions/thc.png" alt="institution"></div>
                        </div>
                        <div class="MarqueeGroup">
                            <div class="MarqueeItem"><img src="/img/institutions/harvard.png" alt="institution"></div>
                            <div class="MarqueeItem"><img src="/img/institutions/mit.png" alt="institution"></div>
                            <div class="MarqueeItem"><img src="/img/institutions/berkeley.png" alt="institution"></div>
                            <div class="MarqueeItem"><img src="/img/institutions/stanford.png" alt="institution"></div>
                            <div class="MarqueeItem"><img src="/img/institutions/mcgill.png" alt="institution"></div>
                            <div class="MarqueeItem"><img src="/img/institutions/thc.png" alt="institution"></div>
                        </div>
                    </div>
                    <div class="blur-backdrop-left"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="Toastify"></div>


    @push('script')
    <script src="https://js.stripe.com/v3"></script>
        <script>
            $(document).ready(function() {
                const stripe = Stripe(
                    'pk_test_51PLInfIhJlDuGW4MzTzuO3j5tu87UJ9CPTlGGLRcbfdrcWJpJmqgWbZkujGZLBbLDMMortp3meXOJYab9tnUzbby00ZScJ8dhw', {
                        apiVersion: "2020-03-02",
                        locale: '{{ session()->get('lang_code') }}'
                    });

                const appearance = {
                    theme: 'night',
                    variables: {
                        borderRadius: '30px',
                        transition: 'background 0.15s ease',
                        border: '0.15s ease',
                        boxShadow: '0.15s ease',
                        color: '0.15s ease',
                        border: '1px solid rgba(255, 255, 255, 0.08)',
                        color: ' #ebebeb',
                        fontSize: '16px',
                    },
                    rules: {
                        '.label': {
                            color: 'white',
                        },
                        '.input': {
                            padding: "24px",
                            margin: '8px 0'
                        },
                    }
                };
                const loader = 'auto';

                var clientSecret = $("#payment-form").attr('data-secret');
                const elements = stripe.elements({
                    clientSecret,
                    appearance,
                    loader
                });
                var addressElement = elements.create('address', {
                    mode: 'billing',
                });
                const paymentElement = elements.create('payment', {
                    defaultValues: {
                        billingDetails: {},
                    },
                });

                addressElement.mount("#link-authentication-element");
                paymentElement.mount("#payment-element");
                $(".pay_now_button").click(async function() {
                    // ToggleLoadingButton($(this));
                    var id = $('#pay_id').val()
                    console.log(id);

                    const {error} = await stripe.confirmPayment({
                        elements,
                        confirmParams: {
                            return_url: "{{ route('payment.fetch') }}",
                        }
                    });

                    if (error) {
                        console.log(error.message,'error');
                    console.log(id);

                    } else {

                    }
                });
            })
        </script>
    @endpush
@endsection
