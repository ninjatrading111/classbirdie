@extends('layouts.studylayout')
@section('content')
    <div class="homepage">
        <header class="home-header">
            <div class="navbarTop"><a href="/"><img src="{{asset('img/logo/bullseyelogo.png')}}" alt="ox Logo"
                        class="navbarBrand"></a><button class="menuBtn" id='menuBtn1'><img src="/img/logo/menu.svg"
                        alt="menu button"></button></div>
            <div class="header-links HideOnMobile"><a href="#howItWorks" class="navbarLink">How It Works</a><a
                    href="#pricing-section" class="navbarLink">Try It Out</a><a href="#testimonials-section"
                    class="navbarLink">Reviews</a></div>
            @guest
                <div class="navbarButtons"><button class="">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Log in') }}</a>
                    </button>
                </div>
            @else
                <div class="navbarButtons"><button class="">
                        <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                    </button>
                <button class="">

                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            localStorage.removeItem('token');
                            localStorage.removeItem('id');
                            document.getElementById('logout-form').submit();">
                            <p> {{ __('Logout') }}</p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </button>
                </div>

            @endguest
            <nav class="navbarListMobile ">
                <button class="">
                    @guest
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Log in') }}</a>
                    @else
                        <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                    @endguest
                </button>
                @guest
                    <a href="#pricing-section" class="default-shiny-button btn-primary glow navbarGetStarted">Get
                        Started</a>
                @else
                    <a class="default-shiny-button btn-primary glow navbarGetStarted" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                localStorage.removeItem('token');
                localStorage.removeItem('id');
                                         document.getElementById('logout-form').submit();">
                        <p> {{ __('Logout') }}</p>
                    </a>

                @endguest
            </nav>
        </header>
        <div id="hero">
            <div id="heroInner">
                <div id="heroLeft"><img class="HideOnMobile"
                        src="/img/svg/TrustPilotLogo.37116979b7836e0b7ac264b6fe844135.svg" alt="trustPilotLogo"
                        width="160" style="padding-bottom: 12px;">
                    <div id="heroTrust"><img class="star" src="/img/svg/Star.61848b5a88650d2dc54e129fe3948f42.svg"
                            alt="star"><img class="star" src="/img/svg/Star.61848b5a88650d2dc54e129fe3948f42.svg"
                            alt="star"><img class="star" src="/img/svg/Star.61848b5a88650d2dc54e129fe3948f42.svg"
                            alt="star"><img class="star" src="/img/svg/Star.61848b5a88650d2dc54e129fe3948f42.svg"
                            alt="star"><img class="star" src="/img/svg/Star.61848b5a88650d2dc54e129fe3948f42.svg"
                            alt="star">
                        <div style="display: flex; gap: 6px; align-items: center;">
                            <p id="heroTrustRating">4.6/5 </p><img class="HideOnDesktop"
                                src="/img/svg/TrustPilotLogo.37116979b7836e0b7ac264b6fe844135.svg" alt="trustPilotLogo"
                                width="70" style="padding-bottom: 7px;">
                            <p id="heroTrustRating">Based on <span>10,000+</span> users</p>
                        </div>
                    </div>
                    <h1 id="heroTitle">Instant Answers<br> <span>&amp; Explanations</span></h1>
                    <p>Meet your new study sidekick! Get help on any problem with our advanced AI study tool. We
                        integrate directly with online quizzes, tests, and homework assignments. Let us do the heavy
                        lifting for you.</p><a class="default-shiny-button glow shiny-link" href="#pricing-section">Get
                        Started</a>
                </div>
                <div id="heroRight">
                    <div id="heroRightVideo"><video id="heroVideo" autoplay="" loop="" playsinline="">
                            {{-- <source src="/static/media/video1.4259e9a95e056b5d7f38.mp4" type="video/mp4"> --}}
                        </video></div>
                    <p id="heroTagline"> AI Chrome Extension: </p>
                    <ul id="heroFeatures">
                        <li class="heroFeature">Perfect score, or your <span>money</span> back</li>
                        <li class="heroFeature">Incognito + Stealth</li>
                        <li class="heroFeature">Over <span>78,000</span> students scored an A+</li>
                        <li class="heroFeature"><span>100%</span> Foolproof &amp; Undetectable</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="institutions">
            <h3>Used by <span>10K+ Students</span> at</h3>
            <div class="rfm-marquee-container institution-marquee-container"
                style="--pause-on-hover: running; --pause-on-click: running; --width: 100%; --transform: none;">
                <div class="rfm-marquee"
                    style="--play: running; --direction: normal; --duration: 75.68s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;">
                    <div class="rfm-initial-child-container">
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/harvard.png"
                                    alt="institution"></div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/mit.png" alt="institution">
                            </div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/berkeley.png"
                                    alt="institution"></div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/stanford.png"
                                    alt="institution"></div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/mcgill.png"
                                    alt="institution"></div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/chicago.png"
                                    alt="institution"></div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/princeton.png"
                                    alt="institution"></div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/usc.png" alt="institution">
                            </div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/northeastern.png"
                                    alt="institution"></div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/wisconsin.png"
                                    alt="institution"></div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/texas.png"
                                    alt="institution"></div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/michigan.png"
                                    alt="institution"></div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="institution-marquee-item"><img src="/img/institutions/johns-hopkins.png"
                                    alt="institution"></div>
                        </div>
                    </div>
                </div>
                <div class="rfm-marquee"
                    style="--play: running; --direction: normal; --duration: 75.68s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;">
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/harvard.png" alt="institution">
                        </div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/mit.png" alt="institution">
                        </div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/berkeley.png"
                                alt="institution"></div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/stanford.png"
                                alt="institution"></div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/mcgill.png" alt="institution">
                        </div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/chicago.png" alt="institution">
                        </div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/princeton.png"
                                alt="institution"></div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/usc.png" alt="institution">
                        </div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/northeastern.png"
                                alt="institution"></div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/wisconsin.png"
                                alt="institution"></div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/texas.png" alt="institution">
                        </div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/michigan.png"
                                alt="institution"></div>
                    </div>
                    <div class="rfm-child" style="--transform: none;">
                        <div class="institution-marquee-item"><img src="/img/institutions/johns-hopkins.png"
                                alt="institution"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pictureReviews">
            <h1 class="pictureReviewsTitle">By Robots, <span>For Humans</span></h1>
            <h1 class="pictureReviewsTitleMobile">By Robots<br><span>For Humans</span></h1>
            <div class="pictureReviewsContainer">
                <div class="pictureReviewsGrid">
                    <div class="review-item"><img src="/img/profile-photos/1.png" alt="review" data-xblocker="passed"
                            style="visibility: visible;"></div>
                    <div class="review-item"><img src="/img/profile-photos/1.png" alt="review" data-xblocker="passed"
                            style="visibility: visible;"></div>
                    <div class="review-item"><img src="/img/profile-photos/2.png" alt="review" data-xblocker="passed"
                            style="visibility: visible;"></div>
                    {{-- <div class="review-item"><img src="/img/profile-photos/7.png" alt="review"
                        data-xblocker="passed" style="visibility: visible;"></div> --}}
                    <div class="review-item"><img src="/img/profile-photos/3.png" alt="review" data-xblocker="passed"
                            style="visibility: visible;"></div>
                    <div class="review-item"><img src="/img/profile-photos/4.png" alt="review" data-xblocker="passed"
                            style="visibility: visible;"></div>
                    {{-- <div class="review-item"><img src="/img/profile-photos/6.png" alt="review"
                        data-xblocker="passed" style="visibility: visible;"></div> --}}
                </div>
            </div>
            <div class="pictureReviewsContainerMobile">
                <div class="pictureReviewsMarquee">
                    <div class="pictureReviewsMarqueeWrap">
                        <div class="pictureReviewsGrid">
                            <div class="review-item"><img src="/img/profile-photos/1.png" alt="review"
                                    data-xblocker="passed" style="visibility: visible;"></div>
                            <div class="review-item"><img src="/img/profile-photos/2.png" alt="review"
                                    data-xblocker="passed" style="visibility: visible;"></div>
                            <div class="review-item"><img src="/img/profile-photos/3.png" alt="review"
                                    data-xblocker="passed" style="visibility: visible;"></div>
                            <div class="review-item"><img src="/img/profile-photos/4.png" alt="review"
                                    data-xblocker="passed" style="visibility: visible;"></div>
                            <div class="review-item"><img src="/img/profile-photos/5.png" alt="review"
                                    data-xblocker="passed" style="visibility: visible;"></div>
                            {{-- <div class="review-item"><img src="/img/profile-photos/6.png"
                                alt="review" data-xblocker="passed" style="visibility: visible;"></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pricing-section">
            <div id="price">
                <h1 id="priceTitle">Studybuddy <span>Pricing</span></h1>
                <h1 id="priceTitleMobile">Studybuddy <span>Pricing</span></h1>
                <div id="priceContainer">
                    <div id="priceTag">
                        <p>72 Hours Unlimited Access</p>
                    </div>
                    <div id="pricePrice">Try for <span>Free</span></div>
                    <p id="priceMobileNotice">Offer valid until <span id="priceOffer">May 29th</span>!</p><button
                        id="oldPricingCTA" class="default-shiny-button glow shiny-link">Get Started</button>
                    <div id="pricePoints">
                        <div class="pricePoint"><img src="/img/svg/Checkbox.svg" alt="checkmark">
                            <p>Instant <span>Answers</span></p>
                        </div>
                        <div class="pricePoint"><img src="/img/svg/Checkbox.svg" alt="checkmark">
                            <p><span>1 Million+</span> questions <span>solved</span></p>
                        </div>
                        <div class="pricePoint"><img src="/img/svg/Checkbox.svg" alt="checkmark">
                            <p><span>Fully undetectable</span></p>
                        </div>
                        <div class="pricePoint"><img src="/img/svg/Checkbox.svg" alt="checkmark">
                            <p><span>Plagiarism free and stealth</span></p>
                        </div>
                        <div class="pricePoint"><img src="/img/svg/Checkbox.svg" alt="checkmark">
                            <p>Powered by <span>cutting edge AI</span></p>
                        </div>
                    </div>
                    <div id="priceBenefits">Cancel Anytime | Renews at $5.99</div>
                </div>
                <div id="priceDesktop">
                    <div id="priceDesktopTitle">72 Hours Unlimited ACCESS TO STUDYBUDDY</div>
                    <div id="priceDesktopPrice">Try for <span>Free</span></div>
                    <div id="priceDesktopNotice">Offer valid until <span id="priceDesktopNoticeDate">May
                            29th</span>!</div>
                    <div id="priceDesktopATCWrapper"><button id="oldPricingDesktopCTA"
                            class="default-shiny-button glow shiny-link">Get Started</button></div>
                    <div id="priceDesktopBenefits">Cancel Anytime | Satisfaction Guarantee | Renews at $5.99/wk
                    </div><img id="priceDesktopIcons" src="/img/logo/payment_methods.png" alt="payment methods">
                </div>
            </div>
        </div>
        <div id="howItWorks">
            <h1 class="howItWorksTitle">How <span>It Works</span></h1>
            <div class="carouselContainer">
                <div class="swiper swiper-initialized swiper-horizontal">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-active" style="width: 980px; margin-right: 50px;">
                            <div class="howItWorksItem">
                                <div class="itemHeader">
                                    <div class="itemNumberBox">1</div>
                                    <h3>Injects into your <span>Learning Platform</span></h3>
                                </div>
                                <div class="itemContent"><video id="buttonVideo" autoplay="" loop=""
                                        playsinline="" style="height: 100%; max-width: 100%; max-height: 100%;">
                                        {{-- <source src="/static/media/Button.97cb951793a863a42d08.mp4"
                                        type="video/mp4"> --}}
                                    </video></div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" style="width: 980px; margin-right: 50px;">
                            <div class="howItWorksItem">
                                <div class="itemHeader">
                                    <div class="itemNumberBox">2</div>
                                    <h3><span>Screenshot</span> Any Question</h3>
                                </div>
                                <div class="itemContent"><video id="screenshotVideo" autoplay="" loop=""
                                        playsinline="" style="height: 100%; max-width: 100%; max-height: 100%;">
                                        {{-- <source src="/static/media/Screenshot.eadc808c6ad25f962a75.mp4"
                                        type="video/mp4"> --}}
                                    </video></div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 980px; margin-right: 50px;">
                            <div class="howItWorksItem">
                                <div class="itemHeader">
                                    <div class="itemNumberBox">3</div>
                                    <h3>Use Floating Mode for <span>Faster Answers</span></h3>
                                </div>
                                <div class="itemContent"><video id="floatingVideo" autoplay="" loop=""
                                        playsinline="" style="height: 100%; max-width: 100%; max-height: 100%;">
                                        {{-- <source src="/static/media/Floating.69b5b91e368630942271.mp4"
                                        type="video/mp4"> --}}
                                    </video></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                            class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
                    </div>
                    <div class="prev-btn"><img src="/img/svg/arrow-right.svg" alt="prev"></div>
                    <div class="next-btn"><img src="/img/svg/arrow-right.svg" alt="next"></div>
                </div>
            </div>
            <div class="howItWorksMobile">
                <div class="howItWorksItem">
                    <div class="itemHeader">
                        <div class="itemNumberBox">1</div>
                        <h3>Injects into your <span>Learning Platform</span></h3>
                    </div>
                    <div class="itemContent"><video id="buttonVideo" autoplay="" loop="" playsinline=""
                            style="width: 100%; max-width: 100%;">
                            {{-- <source src="/static/media/ButtonMobile.9174fd1c399a06b70b2d.mp4" type="video/mp4"> --}}
                        </video></div>
                </div>
                <div class="howItWorksItem">
                    <div class="itemHeader">
                        <div class="itemNumberBox">2</div>
                        <h3><span>Screenshot</span> Any Question</h3>
                    </div>
                    <div class="itemContent"><video id="screenshotVideo" autoplay="" loop="" playsinline=""
                            style="width: 100%; max-width: 100%;">
                            {{-- <source src="/static/media/ScreenshotMobile.74f6122d785563f12896.mp4"
                            type="video/mp4"> --}}
                        </video></div>
                </div>
            </div>
        </div>
        <div class="testimonials-section" id="testimonials-section">
            <h1 class="testimonials-title">See what our <span>customers</span> say</h1>
            <div class="testimonial-cards">
                <div class="testimonial-column">
                    <div class="cardItem"><img class="profile-image" src="/img/profile-photos/1.png" alt="profile">
                        <div class="card-content">
                            <div class="user-information">
                                <h3>Jennifer Hill</h3><img src="/img/svg/stars-black.svg" alt="stars">
                                <h4>Apr 13, 2024</h4>
                            </div>
                            <p class="review-test">It’s so fast. I literally just press the button and it tells my
                                answer in like 2 seconds. It doesn’t even feel like I’m in school anymore.</p>
                        </div>
                    </div>
                    <div class="cardItem"><img class="profile-image" src="/img/profile-photos/2.png" alt="profile">
                        <div class="card-content">
                            <div class="user-information">
                                <h3>Adiana Madrigal</h3><img src="/img/svg/stars-black.svg" alt="stars">
                                <h4>Jan 7, 2024</h4>
                            </div>
                            <p class="review-test">The app works great but i think the support team is even better.
                                I had trouble logging in so I sent them an email and they helped me right away.
                                Thank you!!!</p>
                        </div>
                    </div>
                    <div class="cardItem"><img class="profile-image" src="/img/profile-photos/3.png" alt="profile">
                        <div class="card-content">
                            <div class="user-information">
                                <h3>Mark Atty</h3><img src="/img/svg/stars-black.svg" alt="stars">
                                <h4>Feb 12, 2024</h4>
                            </div>
                            <p class="review-test">Love this app. I originally heard about it on TikTok so I
                                decided to try it and it actually works. All my friends use it now too.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-column">
                    <div class="cardItem"><img class="profile-image" src="/img/profile-photos/4.png" alt="profile">
                        <div class="card-content">
                            <div class="user-information">
                                <h3>Scott Moyer</h3><img src="/img/svg/stars-black.svg" alt="stars">
                                <h4>Dec 17, 2023</h4>
                            </div>
                            <p class="review-test">I like that it actually gives explanations instead of just
                                showing me the answers. It is super helpful for studying.</p>
                        </div>
                    </div>
                    <div class="cardItem"><img class="profile-image" src="/img/profile-photos/5.png" alt="profile">
                        <div class="card-content">
                            <div class="user-information">
                                <h3>Devyn Ford</h3><img src="/img/svg/stars-black.svg" alt="stars">
                                <h4>Mar 28, 2024</h4>
                            </div>
                            <p class="review-test">If i would have had this in high school, I would have gotten a
                                4.0 Easy. The only thing I don’t like about it is that I am just now finding it when
                                I’m about to graduate.</p>
                        </div>
                    </div>
                    <div class="cardItem"><img class="profile-image" src="/img/profile-photos/1.png" alt="profile">
                        <div class="card-content">
                            <div class="user-information">
                                <h3>Simon Sozzi</h3><img src="/img/svg/stars-black.svg" alt="stars">
                                <h4>Apr 16, 2024</h4>
                            </div>
                            <p class="review-test">I didn’t use it at first cause it didn’t integrate with
                                BrightSpace but then my friend showed me the screenshot thing so that it can work
                                even if it’s not integrated on the platform.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-column">
                    <div class="cardItem"><img class="profile-image" src="/img/profile-photos/2.png" alt="profile">
                        <div class="card-content">
                            <div class="user-information">
                                <h3>Erik Cabanas</h3><img src="/img/svg/stars-black.svg" alt="stars">
                                <h4>Apr 20, 2024</h4>
                            </div>
                            <p class="review-test">Was kind of doubtful at first but after using it on a few tests,
                                I’ll admit, it’s the real deal. It makes it so I can ace any quiz or assignment
                                without having to do any work. Love it!</p>
                        </div>
                    </div>
                    <div class="cardItem"><img class="profile-image" src="/img/profile-photos/3.png" alt="profile">
                        <div class="card-content">
                            <div class="user-information">
                                <h3>Luna Castillo</h3><img src="/img/svg/stars-black.svg" alt="stars">
                                <h4>Feb 22, 2024</h4>
                            </div>
                            <p class="review-test">Does exactly what it says it does. I use it for every test I
                                have.</p>
                        </div>
                    </div>
                    <div class="cardItem"><img class="profile-image" src="/img/profile-photos/4.png" alt="profile">
                        <div class="card-content">
                            <div class="user-information">
                                <h3>AJ Bell</h3><img src="/img/svg/stars-black.svg" alt="stars">
                                <h4>Mar 23, 2024</h4>
                            </div>
                            <p class="review-test">I never have time to study or prepare for quizzes so StudyBuddy
                                is a lifesaver. I never have to worry about quizzes, assignments, and tests anymore,
                                which is great.</p>
                        </div>
                    </div>
                </div>
            </div><img class="google-reviews-logo" src="/img/logo/google-review.png" alt="google review">
            <div class="curved-line"><img src="/img/svg/curved-line.svg" alt="line" data-xblocker="passed"
                    style="visibility: visible;"></div>
        </div>
        <div id="ChatGPTSection">
            <div id="ChatGPTBox">
                <div id="ChatGPTLogoBox"><img id="ChatGPTLogo" src="/img/svg/ChatGPTLogo.svg" alt="ChatGPTLogo"
                        data-xblocker="passed" style="visibility: visible;"><img id="ChatGPTLogoBackground"
                        src="/img/svg/ChatGPTLogoBackground.svg" alt="ChatGPTLogoBackground" data-xblocker="passed"
                        style="visibility: visible;"></div>
                <div id="InfoBox">
                    <p id="InfoBoxTitle">Running On Latest AI</p>
                    <div id="InfoBoxGrid">
                        <div id="InfoBoxGridItem"><img src="/img/svg/Brain.svg" alt="Brain">
                            <p>Expanded Knowledge Base</p>
                        </div>
                        <div id="InfoBoxGridItem"><img src="/img/svg/Target.svg" alt="Target">
                            <p>Improved Accuracy</p>
                        </div>
                        <div id="InfoBoxGridItem"><img src="/img/svg/Neuron.svg" alt="Neuron">
                            <p>Nuanced Reasoning</p>
                        </div>
                        <div id="InfoBoxGridItem"><img src="/img/svg/LightBulb.svg" alt="LightBulb">
                            <p>Enhanced Understanding</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="faq">
            <div id="faqTitle">Frequently Asked <span>Questions</span></div>
            <div id="faqTitleMobile">FA<span>Q</span>s</div>
            <div id="faqContainer">
                <div class="faqItem">
                    <div class="faqItemTop">
                        <p class="faqItemTitle">How does this work?</p>
                        <div class="faqItemImageContainer active"><img src="/img/svg/plus.svg" alt="faq toggle"
                                class="faqIcon"></div>
                    </div>
                    <div class="faqItemBottom active">
                        <div>
                            <p class="faqContent">Upon opening your assignment, the “Ask Studybuddy” button will
                                appear just below each question in your LMS.
                                Simply click the button and Studybuddy will give you the correct answer. Or,
                                you can use our screenshot tool to take a picture of the question you want
                                Studybuddy to answer.</p>
                        </div>
                    </div>
                </div>
                <div class="faqItem">
                    <div class="faqItemTop">
                        <p class="faqItemTitle">Will my teachers find out?</p>
                        <div class="faqItemImageContainer "><img src="/img/svg/plus.svg" alt="faq toggle"
                                class="faqIcon"></div>
                    </div>
                    <div class="faqItemBottom ">
                        <div>
                            <p class="faqContent">No! Studybuddy is 100% foolproof, undetectable
                                and can even outsmart your teacher’s
                                anti-cheating program.</p>
                        </div>
                    </div>
                </div>
                <div class="faqItem">
                    <div class="faqItemTop">
                        <p class="faqItemTitle">How do we keep your data secure?</p>
                        <div class="faqItemImageContainer "><img src="/img/svg/plus.svg" alt="faq toggle"
                                class="faqIcon"></div>
                    </div>
                    <div class="faqItemBottom ">
                        <div>
                            <p class="faqContent"> We only transmit your information over HTTPS.</p>
                        </div>
                    </div>
                </div>
                <div class="faqItem">
                    <div class="faqItemTop">
                        <p class="faqItemTitle">Is it plagiarism proof?</p>
                        <div class="faqItemImageContainer "><img src="/img/svg/plus.svg" alt="faq toggle"
                                class="faqIcon"></div>
                    </div>
                    <div class="faqItemBottom ">
                        <div>
                            <p class="faqContent">Yes! Studybuddy is 100% original and provides plagiarism-proof
                                answers, guaranteed.</p>
                        </div>
                    </div>
                </div>
                <div class="faqItem">
                    <div class="faqItemTop">
                        <p class="faqItemTitle">What is your refund policy?</p>
                        <div class="faqItemImageContainer "><img src="/img/svg/plus.svg" alt="faq toggle"
                                class="faqIcon"></div>
                    </div>
                    <div class="faqItemBottom ">
                        <div>
                            <p class="faqContent">Our refund process is easy and seamless. If you’re not satisfied
                                with Studybuddy - just email us and we’ll refund/cancel your subscription.</p>
                        </div>
                    </div>
                </div>
                <div class="faqItem">
                    <div class="faqItemTop">
                        <p class="faqItemTitle">Can I promote Studybuddy?</p>
                        <div class="faqItemImageContainer "><img src="/img/svg/plus.svg" alt="faq toggle"
                                class="faqIcon"></div>
                    </div>
                    <div class="faqItemBottom ">
                        <div>
                            <p class="faqContent">Yes! Shoot us over an email at support@studybuddy.gg and we’ll
                                send you details on our affiliate program.</p>
                        </div>
                    </div>
                </div>
            </div><img id="gradientBG" src="/img/svg/GradientBG.4298f47108537292f40ea52ea5ff395f.svg" alt="bg"
                data-xblocker="passed" style="visibility: visible;">
        </div>
        <div id="companies">
            <h3>All major e-learning platforms <span>supported</span></h3>
            <div class="companies-marquee-section">
                <div class="rfm-marquee-container company-marquee-container"
                    style="--pause-on-hover: running; --pause-on-click: running; --width: 100%; --transform: none;">
                    <div class="rfm-marquee"
                        style="--play: running; --direction: normal; --duration: 38.1596875s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;">
                        <div class="rfm-initial-child-container">
                            <div class="rfm-child" style="--transform: none;">
                                <div class="company-marquee-item"><img src="/img/platforms/canvas.png" alt="institution">
                                </div>
                            </div>
                            <div class="rfm-child" style="--transform: none;">
                                <div class="company-marquee-item"><img src="/img/platforms/blackboard.png"
                                        alt="institution"></div>
                            </div>
                            <div class="rfm-child" style="--transform: none;">
                                <div class="company-marquee-item"><img src="/img/platforms/moodle.png" alt="institution">
                                </div>
                            </div>
                            <div class="rfm-child" style="--transform: none;">
                                <div class="company-marquee-item"><img src="/img/platforms/d2l.png" alt="institution">
                                </div>
                            </div>
                            <div class="rfm-child" style="--transform: none;">
                                <div class="company-marquee-item"><img src="/img/platforms/tophat.png" alt="institution">
                                </div>
                            </div>
                            <div class="rfm-child" style="--transform: none;">
                                <div class="company-marquee-item"><img src="/img/platforms/inquisitive.png"
                                        alt="institution"></div>
                            </div>
                        </div>
                    </div>
                    <div class="rfm-marquee"
                        style="--play: running; --direction: normal; --duration: 38.1596875s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;">
                        <div class="rfm-child" style="--transform: none;">
                            <div class="company-marquee-item"><img src="/img/platforms/canvas.png" alt="institution">
                            </div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="company-marquee-item"><img src="/img/platforms/blackboard.png" alt="institution">
                            </div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="company-marquee-item"><img src="/img/platforms/moodle.png" alt="institution">
                            </div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="company-marquee-item"><img src="/img/platforms/d2l.png" alt="institution"></div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="company-marquee-item"><img src="/img/platforms/tophat.png" alt="institution">
                            </div>
                        </div>
                        <div class="rfm-child" style="--transform: none;">
                            <div class="company-marquee-item"><img src="/img/platforms/inquisitive.png"
                                    alt="institution"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="features">
            <div class="featuresTitle">Why <span>Studybuddy?</span></div>
            <div class="featuresContainer">
                <div class="featureItem"><img src="/img/svg/feature_lightening_icon.svg" alt="Instant Answers icon">
                    <div class="featureItemHeaderTitle">Instant Answers</div>
                </div>
                <div class="featureItem"><img src="/img/svg/feature_star_icon.svg" alt="Versatile icon">
                    <div class="featureItemHeaderTitle">Versatile Integration</div>
                </div>
                <div class="featureItem"><img src="/img/svg/feature_eye_icon.svg" alt="Undetectable icon">
                    <div class="featureItemHeaderTitle">Fully Undetectable</div>
                </div>
                <div class="featureItem"><img src="/img/svg/feature_chat_icon.svg" alt="Guesswork icon">
                    <div class="featureItemHeaderTitle">No More Guesswork</div>
                </div>
                <div class="featureItem"><img src="/img/svg/feature_magnify_icon.svg" alt="Plagiarism icon">
                    <div class="featureItemHeaderTitle">Plagiarism Proof</div>
                </div>
                <div class="featureItem"><img src="/img/svg/feature_lightening_icon.svg" alt="Plagiarism icon">
                    <div class="featureItemHeaderTitle">Powered by AI</div>
                </div>
                <div class="featureItem"><img src="/img/svg/check-square.svg" alt="Plagiarism icon">
                    <div class="featureItemHeaderTitle">+1M Questions Answered</div>
                </div>
                <div class="featureItem"><img src="/img/svg/graduate-hat.svg" alt="Plagiarism icon">
                    <div class="featureItemHeaderTitle">400+ Universities</div>
                </div>
                <div class="featureItem"><img src="/img/svg/lock.svg" alt="Plagiarism icon">
                    <div class="featureItemHeaderTitle">100% Encrypted</div>
                </div>
            </div>
            <div class="featuresContainerMobile">
                <div class="featureItem"><img src="/img/svg/check-square.svg" alt="Instant Answers icon">
                    <div class="featureItemHeaderTitle">Fully Undetectable</div>
                </div>
                <div class="featureItem"><img src="/img/svg/graduate-hat.svg" alt="Versatile icon">
                    <div class="featureItemHeaderTitle">400+ Universities</div>
                </div>
                <div class="featureItem"><img src="/img/svg/lock.svg" alt="Undetectable icon">
                    <div class="featureItemHeaderTitle">100% Encrypted</div>
                </div>
            </div>
        </div>
        <div class="cta-section">
            <div class="cta-box">
                <div class="price-tag">
                    <p>72 Hours Unlimited Access</p>
                </div>
                <h1><span>Try for</span> Free</h1>
                <p>Join the 100k+ students using Studybuddy today!</p><button type="button" class="glow shiny-link">Get
                    Started</button>
            </div>
        </div>
        <footer class="footer">
            <div class="footerTop">
                <div class="footerBrand"><a href="/"><img src="/img/logo/newLogo.png" alt="logo"
                            class="footerLogo"></a>
                    <div class="socialsBlock"><a href="#" target="_blank" rel="noreferrer"><img
                                src="/img/svg/TiktokLogo.91f3acfa14ca39e190770861835456c0.svg" alt="tiktok"></a><a
                            href="#" target="_blank" rel="noreferrer"><img
                                src="/img/svg/InstaLogo.be580642be9214bd489367d4d9ba49e8.svg" alt="instagram"></a></div>
                </div>
                <div class="footerLinks">
                    <div>
                        <div class="footerListTitle">Product</div>
                        <ul class="footerList">
                            <li class="footerListItem"><a href="#pricing-section" class="footerLink">Pricing</a>
                            </li>
                            <li class="footerListItem"><a href="#features" class="footerLink">Features</a></li>
                        </ul>
                    </div>
                    <div>
                        <div class="footerListTitle">Company</div>
                        <ul class="footerList">
                            <li class="footerListItem"><a href="/privacy-policy" class="footerLink">Privacy
                                    Policy</a></li>
                            <li class="footerListItem"><a href="/terms-conditions" class="footerLink">Terms of
                                    Service</a></li>
                        </ul>
                    </div>
                    <div>
                        <div class="footerListTitle">Help</div>
                        <ul class="footerList">
                            <li class="footerListItem"><a href="mailto:support@studybuddy.gg" class="footerLink">Contact
                                    Us</a></li>
                            <li class="footerListItem"><a href="#faq" class="footerLink">FAQ's</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="footerHr"><small class="copyright">© Studybuddy2 LLC 2023</small>
        </footer>
        <div class="popup-checkout  ">
            <div class="register-page-container">
                <div class="register-page row">
                    <div class="form-section col-lg-4 col-md-12">
                        <div class="register-form container">
                            <div class="signup-left-align">
                                <p class="small-sign-up">Sign Up</p>
                                <h1>Create new account.</h1>
                                <h3>Already a member? <a href="{{ route('login') }}">Log in</a></h3>
                            </div>
                            <form class="form w-100">
                                <div class="input-field"><label for="Email"
                                        style="font-size: 14px; margin-bottom: 4px; color: rgb(248, 250, 251);">Email<span>*</span></label><input
                                        type="email" placeholder="Enter your email" name="email" id="Email"
                                        value=""
                                        style="height: 48px; font-size: 14px; margin-bottom: 8px; color: rgba(255, 255, 255, 0.56); padding: 14px 20px; border-radius: 30px; border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(255, 255, 255, 0.04);">
                                </div>
                                <div class="input-field"><label for="Password"
                                        style="font-size: 14px; margin-bottom: 4px; color: rgb(248, 250, 251);">Password<span>*</span></label><input
                                        type="password" placeholder="Enter your password" id="Password" name="password"
                                        minlength="8" value=""
                                        style="height: 48px; font-size: 14px; margin-bottom: 8px; color: rgba(255, 255, 255, 0.56); padding: 14px 20px; border-radius: 30px; border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(255, 255, 255, 0.04);">
                                </div><button class="cta-btn" type="submit"><span>Create Account<img
                                            src="/img/svg/rightArrowWhite.svg" alt="arrow"></span></button>
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
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
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
                                                    </svg></div><span class="gsi-material-button-contents">Sign in
                                                    with Google</span><span style="display: none;">Sign in with
                                                    Google</span>
                                            </div>
                                        </button></div>
                                </div>
                            </div>
                            <p class="terms">By creating an account you<span>agree to our Terms &amp;
                                    Conditions</span></p>
                        </div>
                    </div>
                    <div class="info-section col-lg-8">
                        <div class="register-side-panel">
                            <h1>Straight A’s on all ur tests, exams, <br> and assignments</h1>
                            <div class="img-container"><img src="/img/svg/signupsidepanel.svg" alt="register side panel"
                                    data-xblocker="passed" style="visibility: visible;"></div>
                            <div class="Marquee">
                                <div class="MarqueeGroup">
                                    <div class="MarqueeItem"><img src="/img/institutions/harvard.png" alt="institution">
                                    </div>
                                    <div class="MarqueeItem"><img src="/img/institutions/mit.png" alt="institution">
                                    </div>
                                    <div class="MarqueeItem"><img src="/img/institutions/berkeley.png" alt="institution">
                                    </div>
                                    <div class="MarqueeItem"><img src="/img/institutions/stanford.png" alt="institution">
                                    </div>
                                    <div class="MarqueeItem"><img src="/img/institutions/mcgill.png" alt="institution">
                                    </div>
                                    <div class="MarqueeItem"><img src="/img/institutions/thc.png" alt="institution">
                                    </div>
                                </div>
                                <div class="MarqueeGroup">
                                    <div class="MarqueeItem"><img src="/img/institutions/harvard.png" alt="institution">
                                    </div>
                                    <div class="MarqueeItem"><img src="/img/institutions/mit.png" alt="institution">
                                    </div>
                                    <div class="MarqueeItem"><img src="/img/institutions/berkeley.png" alt="institution">
                                    </div>
                                    <div class="MarqueeItem"><img src="/img/institutions/stanford.png" alt="institution">
                                    </div>
                                    <div class="MarqueeItem"><img src="/img/institutions/mcgill.png" alt="institution">
                                    </div>
                                    <div class="MarqueeItem"><img src="/img/institutions/thc.png" alt="institution">
                                    </div>
                                </div>
                            </div>
                            <div class="blur-backdrop-left"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        @if (!empty($invite))
            <script>
                $(document).ready(function() {
                    setInvite()

                    function setInvite() {
                        localStorage.setItem('invite', "{{ $invite }}")
                    }
                })
            </script>
        @endif
    @endpush
@endsection
