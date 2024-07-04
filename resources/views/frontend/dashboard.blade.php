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
                    <div class="nav-item active"><img src="/img/svg/home-active.svg" alt="Dashboard">
                        <a href="{{ route('dashboard') }}">
                            <p>Dashboard</p>
                        </a>
                    </div>
                    <div class="nav-item false"><img src="/img/svg/user.svg" alt="Profile &amp; Billing">
                        <a href="{{ route('profile') }}">
                            <p>Profile &amp; Billing</p>
                        </a>
                    </div>
                    <div class="nav-item false"><img src="/img/svg/message.svg" alt="Contact Us">
                        <a href="{{ route('contact') }}">
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
                            <p>{{ __('Logout') }}</p>

                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                <div class="menu-button" id='menuBtn2'><img src="/img/svg/menu.png" alt="menu"></div>
            </div>
            <div class="hero-content">
                <div class="banner ">
                    <p></p><button>Resubscribe</button>
                </div>
                <div class="container">
                    <div class="dashboard-overview">
                        <div class="dashboard-overview__content">
                            <div class="dashboard-header">
                                <div class="dashboard-header__welcome"><img src="/img/svg/wave.svg" alt="wave emoji">
                                    <h2>Hello, pavel</h2>
                                </div>
                                <div class="social-links">
                                    <p>Connect with Us</p>
                                    <div class="social-items">
                                        <div class="social-items__item"><a href="https://www.instagram.com/studybuddy.gg/"
                                                target="_blank" rel="noreferrer"><img src="/img/svg/instagram.svg"
                                                    alt="instagram"></a></div>
                                        <div class="social-items__item"><a href="https://www.tiktok.com/@getstuddybuddy"
                                                target="_blank" rel="noreferrer"><img src="/img/svg/tictoc.svg"
                                                    alt="tiktok"></a></div>
                                        <div class="social-items__item"><a
                                                href="https://www.youtube.com/channel/UC8OdItprhjNESy7Cy_Wy4LA"
                                                target="_blank" rel="noreferrer"><img src="/img/svg/youtube.svg"
                                                    alt="youtube"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-knowledges">
                                <div class="knowledge-box">
                                    <div class="knowledge-info">
                                        <h3>Ready to Download The Extension?</h3>
                                        <p>Studybuddy works seamlessly with Chrome
                                            browsers.</p>
                                    </div><button><a
                                            href="https://chromewebstore.google.com/detail/studybuddy+/ehaanimekcjndnhnkojcckjcgalkfgee?pli=1"
                                            target="blank">Install Studybuddy+<img src="/img/svg/arrow-up-right.svg"
                                                alt="arrow"></a></button>
                                </div>
                                <div class="knowledge-box">
                                    <div class="knowledge-info">
                                        <h3>How to use Studybuddy+ ?</h3>
                                        <p>Watch our step by step guide.</p>
                                    </div><button>Watch Video<img src="/img/svg/youtube-white.svg" alt="arrow"></button>
                                </div>
                            </div>
                            <div class="refer">
                                <h2>Get a <span>FREE WEEK</span> For Every Referral</h2>
                                <div class="input-group"><input readonly="" id="myInput" class="form-control"
                                        value="{{ $output['url'] }}"><button id="copyButton">Copy <img
                                            src="/img/svg/copy.svg" alt="copy"></button></div>
                            </div>
                            <div class="help-btn"><button><a href="{{route('contact')}}">Need Help<img
                                            src="/img/svg/arrow-up-right-purple.svg" alt="help"></a></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            $(document).ready(function() {

                if ({{ !empty($output['messages']) }}) {
                    toastr.success('{{ $output['messages'] }}', 'Notification', {
                        positionClass: 'toast-top-right',
                        timeOut: 5000,
                        progressBar: true,
                        showMethod: 'fadeIn',
                        hideMethod: 'fadeOut'
                    });
                }
                $('#copyButton').click(function() {
        console.log('ddd');
        var inputValue = $('#myInput').val();
        console.log(inputValue);

        // Fallback function for unsupported environments
        function unsecuredCopyToClipboard(text) {
          const textArea = document.createElement("textarea");
          textArea.value = text;
          document.body.appendChild(textArea);
          textArea.focus();
          textArea.select();
          try {
            document.execCommand('copy');
          } catch (err) {
            console.error('Unable to copy to clipboard', err);
          }
          document.body.removeChild(textArea);
        }

        // Attempt to use the Clipboard API
        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(inputValue)
             .then(() => {
                    toastr.success('Input value copied to clipboard!');
                })
             .catch(err => {
                    console.error('Error in copying text: ', err);
                    toastr.warning('Failed to copy text.');
                });
        } else {
            // Fallback to the execCommand method if Clipboard API is not available
            unsecuredCopyToClipboard(inputValue);
            toastr.success('Using legacy copy method due to Clipboard API limitations.');
        }
    });
            });
        </script>
    @endpush
@endsection
