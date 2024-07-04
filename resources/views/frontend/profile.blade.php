@extends('layouts.studylayout')
@section('content')
    <div class="dashboard-page">
        <div class="dashboard-page__hero">
            <div class="dashboard-navPanel ">
                <div class="header ">
                    <div class="logo"><img src="/img/logo/bullseyelogo.png" alt="logo">
                        <h3>class<span>birdie+</span></h3>
                    </div>
                </div>
                <p class="dashboard-text">Dashboard</p>
                <div class="navs">
                    <div class="nav-item false"><img src="/img/svg/home.svg" alt="Dashboard">
                        <a href="{{route('dashboard')}}">
                            <p>Dashboard</p>
                        </a>
                    </div>
                    <div class="nav-item active"><img src="/img/svg/user-active.svg" alt="Profile &amp; Billing">
                        <a href="{{route('profile')}}">
                            <p>Profile &amp; Billing</p>
                        </a>
                    </div>
                    <div class="nav-item false"><img src="/img/svg/message.svg" alt="Contact Us">
                        <a href="{{route('contact')}}">
                            <p>Contact Us</p>
                        </a>
                    </div>
                </div>
                <div class="log-out-btn">
                    <div class="nav-item undefined"><img src="/img/svg/logout.svg" alt="Log Out">
                        <a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            localStorage.removeItem('token');
                            localStorage.removeItem('id');
                                                     document.getElementById('logout-form').submit();">
                            <p> {{ __('Logout') }}</p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                <div class="menu-button"><img src="/img/svg/menu.png" alt="menu"></div>
            </div>
            <div class="hero-content">

                <div class="dashboard-profile">
                    <h1 class="title">Profile &amp; Billing</h1>
                    <div class="information-section">
                        <div class="userInfo">
                            <div class="heading">
                                <h1>Personal Information:</h1>
                                <p>Manage your personal details</p>
                            </div>
                            <div class="user-info-section">
                                <div class="info-items">
                                    <div class="info-items__item">
                                        <h3>First Name</h3>
                                        <p id="he_firstname"></p>
                                    </div>
                                    <div class="info-items__item">
                                        <h3>Last Name</h3>
                                        <p id="he_lastname"></p>
                                    </div>
                                    <div class="info-items__item">
                                        <h3>Email Address</h3>
                                        <p id="he_email"></p>
                                    </div><button class="edit-btn">
                                        <p>Edit</p><img src="/img/svg/edit.svg" alt="edit">
                                    </button>
                                </div>
                                <div class="edit-user-section show">
                                    <div class="edit-user-info">
                                        <div class="edit-items">
                                            <div class="edit-items__item">
                                                <div class="input-field"><label for="First Name"
                                                        style="font-size: 14px; margin-bottom: 4px; color: rgb(248, 250, 251);">First
                                                        Name<span>*</span></label><input type="text" id="firstname"
                                                        placeholder="First Name" name="firstName" value="pavel"
                                                        style="height: 40px; font-size: 14px; margin-bottom: 0px; color: rgba(255, 255, 255, 0.56); padding: 10px 20px; border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(255, 255, 255, 0.04);">
                                                </div>
                                            </div>
                                            <div class="edit-items__item">
                                                <div class="input-field"><label for="Last Name"
                                                        style="font-size: 14px; margin-bottom: 4px; color: rgb(248, 250, 251);">Last
                                                        Name<span>*</span></label><input type="text" id="lastname"
                                                        placeholder="Last Name" name="lastName" value="kal"
                                                        style="height: 40px; font-size: 14px; margin-bottom: 0px; color: rgba(255, 255, 255, 0.56); padding: 10px 20px; border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(255, 255, 255, 0.04);">
                                                </div>
                                            </div>
                                            <div class="edit-items__item">
                                                <div class="input-field"><label for="Email"
                                                        style="font-size: 14px; margin-bottom: 4px; color: rgb(248, 250, 251);">Email<span>*</span></label><input
                                                        type="email" placeholder="example@email.com" name="email"
                                                        id="email" disabled value="expressassignments@gmail.com"
                                                        style="height: 40px; font-size: 14px; margin-bottom: 0px; color: rgba(255, 255, 255, 0.56); padding: 10px 20px; border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(255, 255, 255, 0.04);">
                                                </div>
                                                <p>* Email can't be changed</p>
                                            </div>
                                        </div><button id="profile_save">Save <img src="/img/svg/rightArrowWhite.svg"
                                                alt="arrow"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="payment-plan">
                            <div class="heading">
                                <h1>Billing</h1>
                                <p>Manage your subscription</p>
                            </div>
                            <div class="payment-plan-header">
                                <div class="information">
                                    <div class="plan-tags">
                                        <h1>Unlimited Access</h1>
                                    </div>
                                    <p class="plan-short-description">Unlimited Classbride+ access</p>
                                </div>
                                <div class="status-and-actions">

                                    <div class="edit-payment-plan"><button><a href="/payment">Resubscribe</a></button>
                                        <p>Only $7.99/wk</p>
                                    </div>
                                </div>
                            </div>
                            <div class="semester-plan">
                                <div>
                                    <h3 class="plan-name">Semester Plan</h3>
                                    <div class="pricing">
                                        <p class="original-price">$7.99</p>
                                        <p class="discount-price">$39.99</p>
                                    </div>
                                    <p class="billing-cycle">BILLED EVERY 3 MONTHS</p>
                                    <div class="spots">
                                        <p class="user-discount">NEW USER DISCOUNT - FIRST 6,000 USERS</p>
                                        <p class="places-count">2,271 PLACES LEFT</p>
                                    </div>
                                </div>
                                <form method="get" action="{{route('payment')}}">
                                    <input type="hidden" name="id" value="39"/>
                                    <button class="upgrade-btn" type="submit"> Upgrade<img src="/img/svg/rightArrowWhite.svg"
                                        alt="arrow"></button>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <div class="summary-section">
                        <div class="billing-summary">
                            <h1>Summary</h1>
                            <h4>A summary of all your payments</h4>
                            <div class="summary-section">
                                @foreach ($payments as $payment)
                                <div class="billing-item">
                                    <div class="billing-item-content">
                                        <div class="plan-info">
                                            <h2>Unlimited Access - {{$payment->pay_curency}} ${{$payment->pay_amount}}</h2>
                                            <p>24 May 2024</p>
                                        </div>
                                        <div class="payment-details"><img src="/img/svg/card.svg" alt="card">
                                            <p>{{$payment->pay_method_type}} ending </p>
                                        </div>
                                    </div><button>View <img src="/img/svg/external-link.svg" alt="view"></button>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                getdata();

                function getdata() {
                    $.ajax({
                        url: "{{ route('profile.getdata') }}",
                        method: 'post',
                        success: function(res) {
                            $('#he_firstname').text(res.first_name)
                            $('#he_lastname').text(res.last_name)
                            $('#he_email').text(res.email)
                            $('#firstname').val(res.first_name);
                            $('#lastname').val(res.last_name);
                            $('#email').val(res.email);
                        }
                    })
                }
                $(document).on('click', '#profile_save', function() {
                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var formdata = {
                        firstname: firstname,
                        lastname: lastname,
                    }
                    $.ajax({
                        url: "{{ route('profile.edit') }}",
                        method: 'post',
                        data: formdata,
                        dataType: 'json',
                        success: function(res) {
                            if (res.message == 'success') {
                                toastr.success(" Your profile Updated ")
                                getdata();
                            }
                        }
                    })
                })
            })
        </script>
    @endpush
@endsection
