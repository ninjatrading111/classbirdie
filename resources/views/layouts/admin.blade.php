<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nifty.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/type-c/theme-dark.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/type-a/theme-dark.min.css') }}"> --}}
    <link href='{{ asset('plugins/sweet/sweetalert2.min.css') }}' rel='stylesheet' />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo/nifty-demo-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/pace/pace.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/unitegallery/css/unitegallery.min.css') }}">
    <script src="{{ asset('plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo/nifty-demo.min.css') }}" />
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css-loaders/css/css-loaders.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{!! asset('img/logo/mainlogo-top.png') !!}">
    <link href="{{ asset('plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css') }}"
        rel="stylesheet">
    <style type="text/css">
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            -webkit-border-radius: 10px;
            border-radius: 10px;
            background: #515863;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
        }

        ::-webkit-scrollbar-thumb:window-inactive {
            background: rgba(20, 20, 20, 0.6);
        }

        /*******************************************************/
        .imagePreview {
            width: 100%;
            height: 180px;
            background-position: center center;
            background: url({!! asset('images/avatar/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg.gif') !!});
            background-color: #fff;
            background-size: cover;
            background-repeat: no-repeat;
            display: inline-block;
            box-shadow: 0px -3px 6px 2px rgba(0, 0, 0, 0.2);
        }

        .mar-lft-2 {
            margin-left: -2px;
        }

        .dragenable-icon {
            cursor: pointer;
        }

        .pad-ver-none {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .mar-btm-5 {
            margin-bottom: 5px;
        }

        .mar-rgt-5 {
            margin-right: 5px;
        }

        .mar-lft-5 {
            margin-left: 5px;
        }

        .mar-top-m5 {
            margin-top: -5px;
        }

        .mar-top-5 {
            margin-top: 5px;
        }

        .pad-btm-5 {
            padding-bottom: 5px;
        }

        .pad-rgt-5 {
            padding-right: 5px;
        }

        .pad-ver-5 {
            padding-bottom: 5px;
            padding-top: 5px;
        }

        .pad-hor-2 {
            padding-right: 2px !important;
            padding-left: 2px !important;
        }

        .pad-top-5 {
            padding-top: 5px;
        }

        /*****************************************************************/
        .modal .modal-header {
            background-color: #03a9f4;
        }

        /****************************Edit popu up ********************/
        .crm-edit-panel {
            border: 1px solid #e2e2e2;
            box-shadow: 0 10px 10px 0 rgba(0, 0, 0, .05);
        }

        .crm-edit-panel .panel-body {
            border-left: 5px solid #73b680;
            background: #f7f7f7;
        }

        .crm-edit-button {
            font-size: 12px;
        }

        /************************ panel ****************/
        .crm-panel .panel-heading {
            border-bottom: 1px solid #dbd9d9;
            height: auto;
        }

        .crm-panel.panel-bordered {
            border: 1px solid #d9d7d7;
            border-radius: 4px;
        }

        .no-pad-bottom {
            padding-bottom: 0px;
        }

        .mar-btm-5 {
            margin-bottom: 5px;
        }

        .crm-bordered {
            border: 1px solid #d9d7d7 !important;
        }

        .customfield-button {
            padding-top: 3px;
            padding-bottom: 3px;
        }

        .crm-panel .datepicker[readonly] {
            background-color: #fff;
        }

        .category_name_field .crm-panel,
        .item_name_field .crm-panel {
            border-bottom: 1px solid;
        }

        .category_name_field_placeholder,
        .item_name_field_placeholder {
            background-color: #81c3aa;
            border: 1px solid;
            width: 100%;
            height: 30px;
            float: left;
            margin-left: 20px;
        }

        fieldset.scheduler-border {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow: 0px 0px 0px 0px #000;
            box-shadow: 0px 0px 0px 0px #000;
        }

        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: left !important;
            width: auto;
            padding: 0 10px;
            border-bottom: none;
        }

        .has-error legend.scheduler-border {
            color: #f22;
        }

        /**************************** Menu Details *************************************/
        .category-item {
            background-color: #58585887;
        }

        .category-item .list-cards {
            padding-bottom: 5px;
        }

        .menu-item {
            background-color: #58585887;
            padding: 10px;
            margin-bottom: 10px;
            height: 145px;
        }

        .deleted_item .menu-item {
            border: 1px solid #f22;
        }

        .category-item .category_header {
            color: #fcfcfc;
        }

        .menu-item .menu-item-name {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            font-size: 15px;
            color: #fcfcfc;
        }

        .menu-item .menu-item-price {
            margin-left: auto;
            padding-left: 5px;
        }

        .menu-item .menu-item-img {
            width: 100%;
        }

        .menu-item .menu-item-name-price {
            display: flex;
            margin-bottom: 5px;
        }

        .menu-item .menue-item-modifier {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .menu-item .menu-item-devider-up {
            text-align: center;
            font-size: 30px;
            height: 70px;
        }

        .menu-item .menu-item-devider-up i {
            top: 25%;
            position: relative;
        }

        .menu-item .menu-item-name-price-group {
            height: 75px;
        }

        .category_name_field .crm-panel {
            border-bottom: 1px solid;
        }

        .category_name_field_placeholder {
            background-color: #81c3aa;
            border: 1px solid;
            width: 100%;
            height: 30px;
            float: left;
            margin-left: 20px;
        }


        .btn-neil-blue,
        .btn-neil-blue:focus {
            background-color: #336EFF;
            border-color: #336000 !important;
            color: #fff;
        }


        /***************************** Loading Stuff ****************************************/
        .ajaxloading {
            position: fixed;
            width: 100%;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: rgba(15, 15, 15, 0.7);
            z-index: 9999;
            display: none;
        }

        .ajaxloading .loader {
            top: 50%;
            position: fixed;
            left: 50%;
        }

        #footer {
            height: auto;
        }

        /**************************** nav bar ****************************/
        @media (min-width: 768px) {
            #container.mainnav-sm .brand-icon {
                height: 56px;
            }
        }
    </style>
    @stack('css')
</head>

<body>
    <div id="container" class="effect aside-float aside-bright  mainnav-lg">
        <header id="navbar">
            <div id="navbar-container" class="boxed">
                <div class="navbar-header">
                    <a href="{{ route('admin.dashboard') }}" class="navbar-brand">
                        <img src="{!! asset('img/logo/mainlogo.png') !!}" alt="New Menu Ordering" style="width: auto;"
                            class="brand-icon">
                    </a>
                </div>
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <li>
                            <div class="custom-search-form">
                                <label class="btn btn-trans" for="search-input" data-toggle="collapse"
                                    data-target="#nav-searchbox">
                                    <i class="demo-pli-magnifi-glass"></i>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-top-links">
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <i class="demo-pli-male"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                        localStorage.removeItem('token');
                                        localStorage.removeItem('id');
                                                         document.getElementById('logout-form-nav').submit();"><i
                                                class="demo-pli-unlock icon-lg icon-fw"></i>
                                            Logout </a></li>
                                    <form id="logout-form-nav" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="boxed">
            <div id="content-container">
                @yield('usercontent')
            </div>
            <nav id="mainnav-container">
                <div id="mainnav">
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <a href = "javascript: void(0)" class = "avatar-selector">
                                                <img class="img-circle img-md"
                                                    src="{{ asset('img/profile-photos/1.png') }}" alt="">
                                            </a>
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse"
                                            aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="{{ route('logout') }}" class="logout-button list-group-item"
                                            onclick="event.preventDefault();
                                        localStorage.removeItem('token');
                                        localStorage.removeItem('id');
                                                         document.getElementById('logout-form').submit();"><i
                                                class="demo-pli-unlock icon-lg icon-fw"></i> Logout </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                                <div id="mainnav-shortcut" class="hidden">
                                    <ul class="list-unstyled shortcut-wrap">
                                        <li class="col-xs-3" data-content="My Profile">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                                    <i class="demo-pli-male"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Messages">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                                    <i class="demo-pli-speech-bubble-3"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Activity">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                    <i class="demo-pli-thunder"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Lock Screen">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                                    <i class="demo-pli-lock-2"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <ul id="mainnav-menu" class="list-group">
                                    <li @if (Request::is('admin/dashboard')) class = "active-sub active" @endif>
                                        <a href="/admin/dashboard">
                                            <i class="demo-pli-home"></i>
                                            <span class="menu-title">
                                                Dashboard
                                            </span>
                                        </a>
                                    </li>
                                    <li @if (Request::is('admin/userlist') || Request::is('admin/adduser')) class = "active-sub active" @endif>
                                        <a href="#">
                                            <i class="fa fa-user-circle"></i>
                                            <span class="menu-title">User Management</span>
                                            <i class="arrow"></i>
                                        </a>
                                        <ul class="collapse">
                                            <li class="list-divider"></li>
                                            <li @if (Request::is('admin/userlist')) class = "active-sub active" @endif><a
                                                    href="/admin/userlist"> <i class="fa fa-users"> </i>All Users</a>
                                            </li>
                                            <li class="list-divider"></li>
                                            <li @if (Request::is('admin/adduser')) class = "active-sub active" @endif><a
                                                    href="/admin/adduser"><i class="fa fa-user-plus"></i>Add New
                                                    Users</a></li>
                                            <li class="list-divider"></li>

                                        </ul>
                                    </li>
                                    <li @if (Request::is('admin/transaction') ||
                                            Request::is('admin/complete') ||
                                            Request::is('admin/weekly') ||
                                            Request::is('admin/monthly')) class = "active-sub active" @endif>
                                        <a href="#">
                                            <i class="fa fa-book"></i>
                                            <span class="menu-title">Reports</span>
                                            <i class="arrow"></i>
                                        </a>
                                        <ul class="collapse">
                                            <li @if (Request::is('admin/transaction')) class = "active-sub active" @endif><a
                                                    href="/admin/transaction"><i class="fa fa-file-text-o"></i>
                                                    Transaction</a></li>
                                            <li @if (Request::is('admin/complete')) class = "active-sub active" @endif><a
                                                    href="/admin/complete"><i class="fa fa-hourglass-end"></i>
                                                    Complete Status</a></li>

                                            <li @if (Request::is('admin/weekly')) class = "active-sub active" @endif><a
                                                    href="/admin/weekly"><i class="fa fa-building"></i> Weekly</a>
                                            </li>
                                            <li @if (Request::is('admin/monthly')) class = "active-sub active" @endif><a
                                                    href="/admin/monthly"><i class="fa fa-bookmark-o"></i> Monthly</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="list-divider"></li>
                                </ul>
                                <div class="manin_menu">
                                    <a href="{{ route('logout') }}" class="logout-button list-group-item"
                                        onclick="event.preventDefault();
                                    localStorage.removeItem('token');
                                    localStorage.removeItem('id');
                                                     document.getElementById('logout-form-final').submit();"><i
                                            class="demo-pli-unlock icon-lg icon-fw"></i> Logout </a>
                                    <form id="logout-form-final" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        @stack('footernavcontent')
        <footer id="footer">
            <p class="pad-lft">
                <a href="/" target="_blank">
                    <img src = "{!! asset('img/logo/mainlogo.png') !!}" style="height: 40px;" />
                </a>
            </p>
        </footer>
        <button class="scroll-top btn hidden-xs">
            <i class="pci-chevron chevron-up"></i>
        </button>
    </div>
    <div class="ajaxloading" style="">
        <div class="load5 loader" style="">
            <div class="loader"></div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/nifty.js') }}" type="text/javascript"></script>
    <script src='{{ asset('plugins/sweet/sweetalert2.min.js') }}'></script>
    <script>


        ! function($) {
            "use strict";

            $(document).one('nifty.ready', function() {
                var niftyScrollTop = $('.scroll-top'),
                    niftyScrollDown = $('.scroll-bottom'),
                    niftyWindow = $(window),
                    isMobile = function() {
                        return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator
                            .userAgent))
                    }();
                if (niftyScrollTop.length && !isMobile) {
                    var isVisible = false,
                        offsetTop = 250,
                        calcScroll = function() {
                            if (niftyWindow.scrollTop() > offsetTop && !isVisible) {
                                niftyScrollTop.addClass('in').stop(true, true).css({
                                    'animation': 'none'
                                }).show(0).css({
                                    "animation": "jellyIn .8s"
                                });
                                isVisible = true;
                            } else if (niftyWindow.scrollTop() < offsetTop && isVisible) {
                                niftyScrollTop.removeClass('in');
                                isVisible = false;
                            }
                            if (window.scrollMaxY == window.scrollY) {
                                niftyScrollDown.removeClass('in');
                            } else {
                                niftyScrollDown.addClass('in');
                            }
                        };
                    calcScroll();
                    niftyWindow.scroll(calcScroll);
                    niftyScrollTop.on('click', function(e) {
                        e.preventDefault();
                        $('body, html').animate({
                            scrollTop: 0
                        }, 500);
                    });
                    niftyScrollDown.on('click', function(e) {
                        e.preventDefault();
                        $('body, html').animate({
                            scrollTop: $(document).height()
                        }, 500);
                    });
                } else {
                    niftyScrollTop = null;
                    niftyWindow = null;
                }
                isMobile = null;
            });
        }(jQuery)
    </script>
    <script src="{{ asset('js/demo/nifty-demo.js') }}"></script>
    <script src="{{ asset('plugins/bootbox/bootbox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/unitegallery/js/unitegallery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/unitegallery/themes/carousel/ug-theme-carousel.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/bootbox/bootbox.min.js') }}" type="text/javascript"></script>
    <script src='{{ asset('plugins/sweet/sweetalert2.min.js') }}'></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>

    <script src="{{ asset('js/logout.js') }}"></script>

    <!--DataTables Sample [ SAMPLE ]-->
    <script src="{{ asset('js/demo/tables-datatables.js') }}"></script>
    <script>
        var deleteconfirm_string = "Do you want to remove this item?";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        /***************************************  Notification System  ********************************************/
        var timeoutID;

        function setup() {
            this.addEventListener("mousemove", resetTimer, false);
            this.addEventListener("mousedown", resetTimer, false);
            this.addEventListener("keypress", resetTimer, false);
            this.addEventListener("DOMMouseScroll", resetTimer, false);
            this.addEventListener("mousewheel", resetTimer, false);
            this.addEventListener("touchmove", resetTimer, false);
            this.addEventListener("MSPointerMove", resetTimer, false);
            startTimer();
        }
        setup();

        function startTimer() {
            // wait 2 seconds before calling goInactive
            timeoutID = window.setInterval(goInactive, 2000);
        }

        function resetTimer(e) {
            window.clearInterval(timeoutID);
            goActive();
        }

        function goInactive() {

        }
        var count = 0;

        function goActive() {
            localStorage.setItem('currenttime', new Date().getTime() / 1000);
            startTimer();
        }

        function startTimer() {
            timeoutID = window.setInterval(goInactive, 2000);
        }
        /********************************************************************************************************/
        $(document).on("click", ".deleteaction", function() {
            window.onbeforeunload = null;
            var delete_title = "Notification";
            var delete_strting = deleteconfirm_string;
            if (typeof $(this).attr('data-title') !== 'undefined') {
                delete_title = $(this).attr('data-title');
            }
            if (typeof $(this).attr('data-string') !== 'undefined') {
                delete_strting = $(this).attr('data-string');
            }
            var url = $(this).data('url');
            swal({
                title: delete_title,
                text: delete_strting,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "Yes",
                cancelButtonText: "No"
            }).then((result) => {
                if (result.value) {
                    window.location.href = url;
                }
            });
        });
        $(".paginationitems").change(function() {
            var url = "{!! Request::url() !!}?pagesize=" + $(this).val();
            window.location.href = url;
        });
        $(document).on("click", ".sortbutton", function() {
            var data_key = $(this).attr('data-key');
            var url = "{!! Request::url() !!}?sort=" + data_key;
            window.location.href = url;
        });
        $(document).on("click", ".sortingbutton", function() {
            var data_key = $(this).attr('data-key');
            var data_orderby = $(this).hasClass('fa-sort-amount-asc') ? "desc" : "asc";
            var url = "{!! Request::url() !!}?sort=" + data_key + "&order=" + data_orderby;
            window.location.href = url;
        });

        function hide_and_disable_DIV(obj, action_flag = 0) {
            obj.find("input").each(function() {
                if (action_flag) {
                    $(this).prop('disabled', false);
                } else {
                    $(this).prop('disabled', true);
                }
            });

            obj.find(".form-control").each(function() {
                if (action_flag) {
                    $(this).addClass("edit");
                    $(this).prop('disabled', false);
                } else {
                    $(this).removeClass("edit");
                    $(this).prop('disabled', true);
                }
            });
        }
        /*********************************************************************************************************/

        /*************************************************Validate ********************************************************/
        function isNormalInteger(str) {
            var n = Math.floor(Number(str));
            return n !== Infinity && String(n) === str && n >= 0;
        }
        var validRoutingNumber = function(routing) {
            if (routing.length === 0) {
                return true;
            }
            if (routing.length !== 9) {
                return false;
            }
            var checksumTotal = (7 * (parseInt(routing.charAt(0), 10) + parseInt(routing.charAt(3), 10) + parseInt(
                    routing.charAt(6), 10))) +
                (3 * (parseInt(routing.charAt(1), 10) + parseInt(routing.charAt(4), 10) + parseInt(routing.charAt(7),
                    10))) +
                (9 * (parseInt(routing.charAt(2), 10) + parseInt(routing.charAt(5), 10) + parseInt(routing.charAt(8),
                    10)));

            var checksumMod = checksumTotal % 10;
            if (checksumMod !== 0) {
                return false;
            } else {
                return true;
            }
        };

        function ValidateEmail(mail) {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
                return true;
            else
                return false;
        }

        function is_usZipCode(str) {
            regexp = /^[0-9]{5}(?:-[0-9]{4})?$/;
            if (regexp.test(str))
                return true;
            else
                return false;
        }
        $(document).on("keydown", ".decimal-input", function(event) {
            if (event.shiftKey == true) {
                event.preventDefault();
            }
            if ((event.keyCode >= 48 && event.keyCode <= 57) ||
                (event.keyCode >= 96 && event.keyCode <= 105) ||
                event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
                event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190 || event.keyCode == 110
            ) {} else {
                event.preventDefault();
            }
            if ($(this).val().indexOf('.') !== -1 && (event.keyCode == 190 || event.keyCode == 110))
                event.preventDefault();
        });
        $(document).on("keydown", ".integer-input", function(event) {
            if (event.shiftKey == true) {
                event.preventDefault();
            }
            if ((event.keyCode >= 48 && event.keyCode <= 57) ||
                (event.keyCode >= 96 && event.keyCode <= 105) ||
                event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
                event.keyCode == 39 || event.keyCode == 46) {} else {
                event.preventDefault();
            }
        });
        $(document).on("keyup", ".integer-input", function(event) {
            if ($(this).val() == "")
                $(this).val("1");
            if ($(this).val() == "0")
                $(this).val("1");
        });
        $(document).on("change", ".integer-input", function(event) {
            if ($(this).val() == "")
                $(this).val("1");
            if ($(this).val() == "0")
                $(this).val("1");
        });
        /*******************************************************************************************/
        function addErrorForm(obj, string = "") {

            obj.closest(".form-group").find(".help-block strong").html(string);
            if (string === "") {
                obj.closest(".form-group").removeClass("has-error");
            } else {
                obj.closest(".form-group").addClass("has-error");
            }
        }

        function addErrorItem(obj, string = "") {
            obj.closest("div").find(".help-block strong").html(string);
            if (string === "") {
                obj.closest("div").removeClass("has-error");
            } else {
                obj.closest("div").addClass("has-error");
            }
        }


        function addErrorElement(obj, element_item, string = "") {
            obj.closest(element_item).find(".help-block strong").html(string);
            if (string === "") {
                obj.closest(element_item).removeClass("has-error");
            } else {
                obj.closest(element_item).addClass("has-error");
            }
        }


        $(document).on("click", ".crate-main-fieldbutton", function(event) {
            var flag = 1;
            var current_form = $(this).closest(".main-fields-form");
            current_form.find(".form-control.edit").each(function() {
                if ($(this).prop("required") === true) {
                    if ($.trim($(this).val()) === "") {
                        flag = 0;
                        addErrorForm($(this), "This field is required.");
                    } else {
                        addErrorForm($(this));
                    }
                }
                if (flag && $(this).prop('tagName') == 'INPUT') {
                    if ($(this).attr('type') == 'email') {
                        if (!ValidateEmail($(this).val())) {
                            flag = 0;
                            addErrorForm($(this), "This field should be the email address.");
                        } else
                            addErrorForm($(this));
                    }
                }
            });
            if (!flag) {
                event.preventDefault();
                event.stopPropagation();
            }
        });
        $(document).ajaxError(function myErrorHandler(event, xhr, ajaxOptions, thrownError) {
            $.niftyNoty({
                type: 'danger',
                icon: 'fa fa-check',
                message: "Internal server error.",
                container: 'floating',
                timer: 5000
            });
            console.log(xhr.responseText);
        });


        function copyToClipboard(val) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(val).select();
            document.execCommand("copy");
            $temp.remove();
            $.niftyNoty({
                type: 'purple',
                container: 'floating',
                title: '',
                message: 'The link is copied to the clipboard.',
                closeBtn: false,
                timer: 1500
            });
        }
    </script>


    @stack('scripts')
</body>

</html>
