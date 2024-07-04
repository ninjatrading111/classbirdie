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
                    <div class="nav-item false"><img src="/img/svg/user.svg" alt="Profile &amp; Billing">
                        <a href="{{route('profile')}}">
                            <p>Profile &amp; Billing?</p>
                        </a>
                    </div>
                    <div class="nav-item active"><img src="/img/svg/message-active.svg" alt="Contact Us">
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

                <div class="dashboard-contact">
                    <h1 class="title">Contact Us</h1>
                    <div class="dashboard-contact__content">
                        <div class="faq container">
                            <h1>FAQ’s</h1>
                            <div class="accordion">
                                <div class="faq-item">
                                    <h2 class="accordion-header"><button type="button" aria-expanded="true"
                                            class="accordion-button">Why doesn't it work for my school's learning
                                            platform?</button></h2>
                                    <div class="accordion-collapse collapse" style="display:block">
                                        <div class="accordion-body">We're working to support as many platforms as possible,
                                            but some might not be compatible yet. Use the screenshot feature for now (it's
                                            actually more accurate too!). </div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <h2 class="accordion-header"><button type="button" aria-expanded="false"
                                            class="accordion-button collapsed">How do I use Studybuddy+?</button></h2>
                                    <div class="accordion-collapse collapse" style="">
                                        <div class="accordion-body">Studybuddy+ is a Chrome extension that works on most
                                            learning platforms. Your learning platform may show 'Ask Studybuddy' by the
                                            question on your screen.
                                            If you don't see it, click on the extension in the top right corner of your
                                            browser and use the Screnshot feature. It'll work on any website!</div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <h2 class="accordion-header"><button type="button" aria-expanded="false"
                                            class="accordion-button collapsed">How do I use the Screenshot feature?</button>
                                    </h2>
                                    <div class="accordion-collapse collapse" style="">
                                        <div class="accordion-body">The Studybuddy+ screenshot feature works on any website!
                                            Click on the 'Screenshot' button in the Chrome extension menu, then click and
                                            drag your mouse over the question and answer options. Release your mouse and
                                            it'll automatically take the screenshot!
                                            If you're not able to drag, try refreshing the browser. If you're still having
                                            issues, please email us at support@studybuddy.gg</div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <h2 class="accordion-header"><button type="button" aria-expanded="false"
                                            class="accordion-button collapsed">How accurate is Studybuddy+?</button></h2>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">Studybuddy uses AI to provide answers, and we're
                                            constantly improving our system. With each question and answer saved, our
                                            accuracy gets better. This is NOT a silver bullet, but our AI is pretty damn
                                            good!</div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <h2 class="accordion-header"><button type="button" aria-expanded="false"
                                            class="accordion-button collapsed">Does it work with Lockdown
                                            Browsers/Honorlock?</button></h2>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">We can't do it all, but we're here to help! Studybuddy
                                            is designed to assist with homework and time - consuming assignments, not to
                                            cheat on tests.Our founder may have dropped out of university, but we're serious
                                            about ethical learning. We're here to help you succeed, not to get sued.</div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <h2 class="accordion-header"><button type="button" aria-expanded="false"
                                            class="accordion-button collapsed">How can I become an affiliate/promote
                                            Studybuddy?</button></h2>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">Interested in promoting Studybuddy? Reach out to us at
                                            affiliate@studybuddy.gg, and we'll guide you through the process. We appreciate
                                            your support!</div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <h2 class="accordion-header"><button type="button" aria-expanded="false"
                                            class="accordion-button collapsed">I need more help</button></h2>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">No worries! Just shoot us an email at
                                            support@studybuddy.gg, and we'll get back to you the same day. We're here to
                                            help! If you're having technical issues, please include photos/videos of the
                                            issue in your email.</div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <h2 class="accordion-header"><button type="button" aria-expanded="false"
                                            class="accordion-button collapsed">How do I cancel my plan?</button></h2>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">We want to help you succeed! Please email us if you
                                            have any questions: support@studybuddy.gg. <p class="cancel-cta">Cancel by
                                                clicking here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection
