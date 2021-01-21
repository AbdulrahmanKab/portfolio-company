
<!DOCTYPE html>

<html lang="en" >
<!--begin::Head-->
<head><base href="">
    <meta charset="utf-8"/>
    <title>Portfolio website</title>
    <meta name="description" content="Updates and statistics"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/master.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href=""/>
    <style>
    html,body{
        overflow-x: hidden!important;
    }
    </style>
</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"   class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading"  >

<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile bg-dark " >
    <!--begin::Logo-->
    <a href="/admin">
       <span>Portfolio Website</span>
    </a>
    <!--end::Logo-->

    <!--begin::Toolbar-->
    <div class="d-flex align-items-center bg-dark">

        <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
            <span></span>
        </button>

        <button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
			<span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>		</button>
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header  bg-dark " >
                <!--begin::Container-->
                <div class=" container  d-flex align-items-stretch justify-content-between">
                    <!--begin::Left-->
                    <div class="d-flex align-items-stretch mr-3">
                        <!--begin::Header Logo-->
                        <div class="header-logo">
                            <a href="/">
                                <span>Portfolio Website</span>
                            </a>
                        </div>

                        <!--end::Header Logo-->
            @if(Auth::check())
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left bg-dark" id="kt_header_menu_wrapper">
                            <!--begin::Header Menu-->
                            <div id="kt_header_menu" class="header-menu header-menu-left bg-dark header-menu-mobile  header-menu-layout-default " >
                                <!--begin::Header Nav-->
                                <ul class="menu-nav  ">

                                <li class="menu-item bg-dark nav-custom  menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here">
                                    <a href="{{asset('/')}}" class="menu-link text-light ">
                                         Home
                                    </a>
                                </li>



                                </ul>
                                <!--end::Header Nav-->
                            </div>
                            <!--end::Header Menu-->
                        </div>
                 @endif
                        <!--end::Header Menu Wrapper-->
                    </div>
                    <!--end::Left-->

                    <!--begin::Topbar-->
        @if(Auth::check())
                    <div class="topbar">
                        <!--begin::Search-->
                        <div class="dropdown">
                            <!--begin::Toggle-->
                            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                <div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
	        				<span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>	        			</div>
                            </div>
                            <!--end::Toggle-->

                            <!--begin::Dropdown-->
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                                    <!--begin:Form-->
                                    <form method="get" class="quick-search-form">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search..."/>
                                            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                </span>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Form-->

                                    <!--begin::Scroll-->
                                    <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200">
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Search-->



                        <!--begin::Languages-->
                        <div class="dropdown">
                            <!--begin::Toggle-->
                            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
                                    <img class="h-20px w-20px rounded-sm" src="/assets/media/svg/flags/226-united-states.svg" alt=""/>
                                </div>
                            </div>
                            <!--end::Toggle-->

                            <!--begin::Dropdown-->
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Nav-->
                                <ul class="navi navi-hover py-4">
                                    <!--begin::Item-->
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="/assets/media/svg/flags/226-united-states.svg" alt=""/>
            </span>
                                            <span class="navi-text">English</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <li class="navi-item active">
                                        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="/assets/media/svg/flags/128-spain.svg" alt=""/>
            </span>
                                            <span class="navi-text">Spanish</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="/assets/media/svg/flags/162-germany.svg" alt=""/>
            </span>
                                            <span class="navi-text">German</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="/assets/media/svg/flags/063-japan.svg" alt=""/>
            </span>
                                            <span class="navi-text">Japanese</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="/assets/media/svg/flags/195-france.svg" alt=""/>
            </span>
                                            <span class="navi-text">French</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Nav-->
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Languages-->

                        <!--begin::User-->
                        <div class="dropdown">
                            <!--begin::Toggle-->
                            <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                                <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto">
                                    <span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                    <span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">
                                        @if(Auth::check())
                                        {{Auth::user()->name}}</span>
                                    @endif
                                    <span class="symbol symbol-35">
	                            <span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">S</span>
	                        </span>
                                </div>
                            </div>
                            <!--end::Toggle-->

                            <!--begin::Dropdown-->
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                                <!--begin::Header-->
                                <div class="d-flex align-items-center p-8 rounded-top">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
                                        <img src="/assets/media/users/300_21.jpg" alt=""/>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Text-->
                                    <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">@if(Auth::check())
                                            {{Auth::user()->name}}
                                        @endif
                                    </div>

                                    <!--end::Text-->
                                </div>

                                <!--end::Header-->

                                <!--begin::Nav-->
                                <div class="navi navi-spacer-x-0 pt-5">



                                    <!--begin::Footer-->
                                    <div class="navi-separator mt-3"></div>
                                    <div class="navi-footer  px-8 py-5">
                                        <form action="/logout" method="post">
                                            @csrf
                                        <button href="/logout" target="_blank" class="btn btn-light-primary font-weight-bold">Sign Out</button>

                                        </form>

                                    </div>
                                    <!--end::Footer-->
                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::User-->
                    </div>
                    @endif
                        <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->

            <!--begin::Content-->
            <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Subheader-->
            @yield('content')

            </div>
            <!--end::Content-->

            <!--begin::Footer-->
            <div class="footer bg-dark py-4 d-flex flex-lg-column " id="kt_footer">
                <!--begin::Container-->
                <div class=" container  d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted text-dark font-weight-bold mr-2">{{date("Y")}}&copy;</span>
                    </div>
                    <!--end::Copyright-->

                    <!--begin::Nav-->
               </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->

<!--end::Main-->







<!--begin::Quick Panel-->

<!--end::Quick Panel-->


<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
	<span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span></div>
<!--end::Scrolltop-->

<!--begin::Sticky Toolbar-->

<!--end::Sticky Toolbar-->
<!--begin::Demo Panel-->
<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <!--end::Header-->

    <!--begin::Content-->
    <div class="offcanvas-content">
        <!--begin::Wrapper-->
        <!--end::Wrapper-->

        <!--begin::Purchase-->
        <div class="offcanvas-footer">
            <a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">
                Buy Metronic Now!
            </a>
        </div>
        <!--end::Purchase-->
    </div>
    <!--end::Content-->
</div>
<!--end::Demo Panel-->

<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#6993FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1E9FF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="/assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
<script src="/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
<script src="/assets/js/scripts.bundle.js?v=7.0.6"></script>
<script src="/assets/js/pages/features/miscellaneous/sweetalert2.min.js" type="text/javascript"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6"></script>
<!--end::Page Vendors-->

<!--begin::Page Scripts(used by this page)-->
<script src="/assets/js/pages/widgets.js?v=7.0.6"></script>
<script src="/assets/js/pages/crud/file-upload/image-input.js?v=7.1.8"></script>
@yield('js')
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
