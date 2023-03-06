
<!DOCTYPE html>
<html lang="en">
	<head>
        <base href="{{ url('../../') }}">
		<meta charset="utf-8" />
		<title>Hiro - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> -->
		<link href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/themes/layout/brand/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/themes/layout/aside/light.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/pages/wizard/wizard-4.css') }}" rel="stylesheet" />
		<link rel="shortcut icon" type="image/x-icon" href="{!! asset('app-assets/images/ico/ioh-favicon.png') !!}">
        <link rel="stylesheet" href="{{ asset('plugins/custom/holdon/css/HoldOn.min.css') }}">
        @yield('css')
	</head>
    <body id="kt_body" class="app-blank">
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Page bg image-->
            <style>
                body {
                    background-image: url('/media/background.jpeg');
                }
            </style>
            <!--end::Page bg image-->
            
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Aside-->
                <div class="d-flex flex-lg-row-fluid">
                    <!--begin::Content-->
                    <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100"> 
                        <!--begin::Image-->                
                        <img class="theme-light-show mx-auto mw-150 w-200px w-lg-400px mb-10 mb-lg-5" src="{{ asset('media/hiro-logo.png') }}" alt="">    
                        <!--end::Image-->
            
                        <!--begin::Title-->
                        {{-- <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7"> 
                            Hiro
                        </h1>   --}}
                        <!--end::Title-->
            
                        <!--begin::Text-->
                        <div class="text-gray-600 fs-base text-center fw-semibold">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, reprehenderit! Adipisci minima esse ipsum. Aliquam, <br> repudiandae magni corporis placeat magnam soluta dolorem? Temporibus sunt nisi soluta ad. Iure, rem illum?
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--begin::Aside-->
            
                <!--begin::Body-->
                <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                    <!--begin::Wrapper-->
                    <div class="bg-white d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                        <!--begin::Content-->
                        <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-center flex-column-fluid pb-15 pb-lg-20">
                                
                                <!--begin::Form-->
                                <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_in_form" method="GET" action="{{ route('dashboard') }}">
                                    @csrf
                                    <!--begin::Heading-->
                                    <div class="text-center mb-11">
                                        <img src="{{ asset('media/hiro-logo.png') }}" class="img-fluid mb-5">
                                        <!--begin::Title-->
                                        <h1 class="text-dark fw-bolder mb-3">
                                            Welcome Back!
                                        </h1>
                                        <!--end::Title-->
                                
                                        <!--begin::Subtitle-->
                                        <div class="text-gray-500 fw-semibold fs-6">
                                            Please login first
                                        </div>
                                        <!--end::Subtitle--->
                                    </div>
                                    <!--begin::Heading-->
                                
                                
                                    <!--begin::Input group--->
                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                        <!--begin::Email-->
                                        {{-- <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent">  --}}
                                        <select name="email" class="form-control">
                                            <option value="admin@example.com">Admin</option>
                                            <option value="leader1@example.com">Leader</option>
                                            <option value="client1@example.com">Client</option>
                                            <option value="teknisi1@example.com">Teknisi</option>
                                        </select>
                                        <!--end::Email-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                
                                    <!--end::Input group--->
                                    <div class="fv-row mb-3 fv-plugins-icon-container">    
                                        <!--begin::Password-->
                                        <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" value="password">
                                        <!--end::Password-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group--->
                                
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                        <div></div>
                                
                                        <!--begin::Link-->
                                        <a href="/metronic8/demo1/../demo1/authentication/layouts/overlay/reset-password.html" class="link-primary">
                                            Forgot password?
                                        </a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->    
                                
                                    <!--begin::Submit button-->
                                    <div class="d-grid mb-10">
                                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                            
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">
                                                Masuk
                                            </span>
                                            <!--end::Indicator label-->
                                        </button>
                                    </div>
                                    <!--end::Submit button-->
                                </form>
                                <!--end::Form-->     
            
                            </div>
                            <!--end::Wrapper-->
            
                            <!--begin::Footer-->  
                            <div class=" d-flex flex-stack">
            
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold text-muted fs-base gap-5 me-auto">
                                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                    <a href="" target="_blank" class="text-gray-800 text-hover-primary">Hiro - Hire Your Future Hero</a>
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Root-->

        <!--begin::Javascript-->
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{ asset('/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('/js/scripts.bundle.js') }}"></script>
        <!--end::Global Javascript Bundle-->
        <!--end::Javascript-->
        <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
            style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
            <defs id="SvgjsDefs1002"></defs>
            <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
            <path id="SvgjsPath1004" d="M0 0 "></path>
        </svg>
    </body>
</html>
