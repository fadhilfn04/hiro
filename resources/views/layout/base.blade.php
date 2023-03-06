
<!DOCTYPE html>
<html lang="en">
	<head>
        <base href="{{ url('../../') }}">
		<meta charset="utf-8" />
		<title>Hiro - {{ $main }}</title>
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
        <style type="text/css">
            @font-face {
            font-family: "CustomFont1";
            /* src: url('http://188.166.184.95:7777/talentmanagement3/public/assets/font/ooredoo-Regular.woff'); */
            src: url( "{{ asset('assets/font/ooredoo-Regular.woff') }}")format("woff");
            }
            @font-face {
                font-family: CustomFont2;
                /* src: url( 'http://188.166.184.95:7777/talentmanagement3/public/assets/font/Ooredoo-Heavy2.otf')format("woff"); */
                src: url( "{{ asset('assets/font/Ooredoo-Heavy2.otf') }}")format("woff");
            }

            body{
                font-family: "Customfont1", Verdana, Tahoma;
            }

            .customfont2 {
                font-family: "Customfont2", Verdana, Tahoma;
            }

            h1,h2,h3,h4,h5,h6{
                font-family: "Customfont1", Verdana, Tahoma;
            }

            .heading2 {
                font-family: "Customfont2", Verdana, Tahoma;
                color: #ED1C24;
            }

            .title-menu {
                font-family: "Customfont1", Verdana, Tahoma;
            }

            .bg-button-indosat-merah{
                background-color: #ED1C24;
                color:white;
            }

            .bg-button-indosat-kuning{
                background-color: #FFCD00;
                color:white;
            }

            /* width */
            ::-webkit-scrollbar {
                width: 10px;
                height: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey;
                border-radius: 10px;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #ccc;
                border-radius: 10px;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #c7c7c7;
            }
            
            .career-editable.editable-empty,
            .career-new-editable.editable-empty,
            .targeted-editable.editable-empty,
            .targeted-new-editable.editable-empty
            {
                display: inline-block;
                font-weight: normal;
                color: #3F4254;
                text-align: center;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-color: transparent;
                border: 1px solid transparent;
                padding: 0.65rem 1rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.42rem;
                -webkit-transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s ease-in-out;
                transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s ease-in-out;
                transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out, -webkit-box-shadow 0.3s ease-in-out;
                color: #ffffff;
                background-color: #F64E60;
                border-color: #F64E60;
            }

            .career-editable.editable-empty:hover,
            .career-new-editable.editable-empty:hover,
            .targeted-editable.editable-empty:hover,
            .targeted-new-editable.editable-empty:hover
            {
                color: #fff;
                background-color: #c82333;
                border-color: #bd2130;
            }

            .career-editable.editable-empty:focus,
            .career-new-editable.editable-empty:focus,
            .targeted-editable.editable-empty:focus,
            .targeted-new-editable.editable-empty:focus
            {
                color: #fff;
                background-color: #c82333;
                border-color: #bd2130;
                box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
            }

            .badge-notify{
                background:red !important;
                position:relative;
                top: -50px;
                left: -35px;
            }
            #kt_header_mobile, #kt_header, #kt_subheader {
                /* z-index: 9999; */
            }

            .btn.btn-clean:hover, .show .btn.btn-clean.btn-dropdown {
                background: #7d2b74!important;
            }
            /* .select2-selection__rendered{
                word-wrap: break-word !important;
                text-overflow: inherit !important;
                white-space: normal !important;
            } */

            ::-webkit-scrollbar {
                width: 10px;
                height: 10px;
            }
    
            /* Track */
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey;
                border-radius: 10px;
            }
    
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #ccc;
                border-radius: 10px;
            }
    
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #c7c7c7;
            }
    
            @media only screen and (max-width: 600px) {
                .d-flex {
                    flex-direction: column;
                    flex-flow: wrap;
                    justify-content: space-between;
                }
    
                .d-flex>.btn {
                    margin: 4px;
                }
            }
    
            .container-customeHeight {
                height: 200px;
            }
    
            .label-custome {
                padding: 6px 8px;
                width: 40px;
                height: 40px;
                justify-content: center;
                margin: 0;
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                border-radius: 50%;
                background-color: #EBEDF3;
                font-weight: 900 !important;
                color: black !important;
                font-size: 3rem !important;
            }
    
            .content {
                overflow-x: auto;
            }
    
            .overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
            }
    
            .blockOverlay {
                background-color: transparent !important
            }
    
            /* .height-custome {
                    height: 12vh;
                    overflow:auto;
                } */
    
            .placeHold {
                border: 1px dashed blue;
                background-color: #c7c7c7;
                height: 40px;
                width: 228px;
                list-style-type: none;
            }
    
            .symbol-label-custome {
                width: 35px !important;
                height: 25px !important;
            }
    
            /* .card-customize {
                    height: 20vh;
                    overflow: hidden;
                }
                .card-customize-bigger {
                    height: 35vh;
                    overflow: hidden;
                }
                .card-customize-small {
                    height: 15vh;
                    overflow: hidden;
                } */
            /*
                .card-customize {
                    height: 280px!important;
                    overflow: hidden;
                }
                .card-customize-bigger {
                    height: 95%!important;
                    overflow: hidden;
                }
                 */
            .facet {
                width: 228px;
                height: 40px;
                margin-right: 2px;
                display: flex;
                overflow-x: hidden;
                flex: auto;
            }
    
            .blockOverlay {
                background-color: transparent !important
            }
    
            .master-facet {
                list-style-type: none;
                min-width: 100%;
                flex-wrap: wrap;
                flex-direction: row;
                overflow-y: auto;
                /* height: 180px; */
                place-content: flex-start;
                /* flex-flow: column; */
            }
    
            .master-facet-bigger {
                list-style-type: none;
                min-width: 100%;
                flex-wrap: wrap;
                flex-direction: row;
                overflow-x: auto;
                overflow-y: auto;
                height: 214px;
                /* flex-flow: column; */
            }
    
            .xxxx {
                list-style-type: none;
                overflow: auto;
                flex-flow: wrap;
                flex-direction: row;
                flex-wrap: wrap;
                flex-basis: auto;
                display: flex;
                align-items: flex-start;
                height: 228px;
            }
    
            .custom-width-potential {
                width: 35%;
            }
    
            .custom-width-remark {
                width: 35%;
            }
        </style>
        @yield('css')
	</head>

	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<a href="">
				<img alt="Logo" style="width: 125px" src="{{ asset('media/logos/logo_mytalent.png') }}" />
				<img alt="Logo" style="width: 70px" src="{{ asset('media/logos/logo_ioh.png') }}" />
			</a>
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<button hidden class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
					</span>
				</button>
			</div>
		</div>
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-row flex-column-fluid page">
				@include('layout.sidebar')

				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					@include('.layout.header')

					<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
                        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <div class="d-flex align-items-baseline flex-wrap mr-5">
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">{{ $main }}</h5>
                                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                        <li class="breadcrumb-item">
                                            <text href="" class="text-muted">{{ $sub }}</text>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                @yield('action')
                            </div>
                        </div>
                    </div>


                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        @yield('content')
                    </div>
                    @include('layout.footer')
				</div>
			</div>
		</div>
        
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
				<h3 class="font-weight-bold m-0">User Profile
				<small class="text-muted font-size-sm ml-2">10 Notification</small></h3>
				<a href="javascript:void(0)" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<div class="offcanvas-content pr-5 mr-n5">
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
                        <div class="symbol-label" style="background-image:url(''); background-position:top;"></div>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="javascript:void(0)" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">Test Nama </a>
						<div class="text-muted mt-1">Test Posisi</div>
						<div class="navi mt-2">
                            <form id="logout-form" action=" method="POST" style="display: none;">
                                @csrf
                            </form>
							<a href="" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign Out</a>
						</div>
					</div>
				</div>
				<div class="separator separator-dashed mt-8 mb-5"></div>
			</div>
		</div>

        <div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
			<!--begin::Header-->
			<div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5" kt-hidden-height="44" style="">
				<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#x">Guidelines</a>
					</li>
				</ul>
				<div class="offcanvas-close mt-n1 pr-5">
					<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
						<i class="ki ki-close icon-xs text-muted"></i>
					</a>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content px-10" style="height:90vh;overflow-y:auto">
				<div class="tab-content">
					<!--begin::Tabpane-->
					<div class="tab-pane fade pt-3 pr-5 mr-n5 scroll active show ps" id="x" role="tabpanel" style="height: 1235px; overflow: hidden">
                        <!--begin::Section-->
                        <div class="mb-5">
                            <div class="accordion accordion-light accordion-toggle-arrow accordion-svg-toggle" id="accordion-guide-side">
                            
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                </div>
			</div>
			<!--end::Content-->
		</div>

		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
		</div>

		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('js/scripts.bundle.min.js') }}"></script>
        <script src="{{ asset('plugins/custom/holdon/js/HoldOn.min.js') }}"></script>
		<script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<script src="{{ asset('js/pages/custom/wizard/wizard-4.js') }}"></script>
		<!-- <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script> -->
		<script src="{{ asset('plugins/custom/gmaps/gmaps.js') }}"></script>
		<script src="{{ asset('js/pages/widgets.js') }}"></script>
        <script src="{{ asset('js/pages/features/miscellaneous/toastr.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
        <script>
            //turn to inline mode
            $.fn.editable.defaults.mode = 'inline';
            $.fn.editable.defaults.onblur = "submit";

            // Button x-editable
            // $.fn.editableform.buttons =
            // '<button type="submit" class="btn btn-primary btn-sm editable-submit">'+
            //     '<i class="fa fa-fw fa-check"></i>'+
            // '</button>'+
            // '<button type="button" class="btn btn-default btn-sm editable-cancel">'+
            //     '<i class="fa fa-fw fa-times"></i>'+
            // '</button>';

            $.fn.editableform.buttons =
            ''+
                ''+
            ''+
            ''+
                ''+
            '';

            var load_custom = () => {
                HoldOn.open({
                    theme: "sk-circle"
                });
            }

            var close_custom = () => {
                HoldOn.close();
            }
        </script>
        @yield('script')
	</body>
</html>
