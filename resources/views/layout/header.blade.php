<div id="kt_header" class="header header-fixed" style="background-color:#99328f">
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <ul class="menu-nav">
                    <img alt="Logo" class="img-fluid p-3" src="{{ asset('media/logo-kabayan.svg') }}" />
                </ul>
            </div>
        </div>

        <div class="topbar">
            <div class="dropdown">
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-danger">
                        <span class="flaticon flaticon-bell icon-xl text-muted"></span>
                        <span class="label label-dot label-danger label-xl" style="margin-top:-10px"></span>
                        <span class="pulse-ring"></span>
                    </div>
                </div>

                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                    <form>
                        <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url({{ asset('media/misc/bg-1.jpg') }})">
                            <h4 class="d-flex flex-center rounded-top">
                                <span class="text-white">Updates</span>
                                {{-- <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">{{ $count_notifikasi }} new</span> --}}
                            </h4>
                            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-tansparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">TR</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="tab-content">
                            <div class="tab-pane active show " id="topbar_notifications_events" role="tabpanel">
                                <div class="navi navi-hover scroll my-4 p-5" data-scroll="true" data-height="300" data-mobile-height="200">
                                    
                                </div>

                                <div class="d-flex flex-center pt-3 mb-3">
                                    <a href=" class="btn btn-light-primary font-weight-bold text-center" style="display: none;">Read All Notification</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="topbar-item">
                <div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Click here to View Guideline(s)">
                    <span class="svg-icon svg-icon-xl svg-icon-muted">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
            </div>

            <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi, </span>
                    <span class="text-muted font-weight-bolder font-size-base d-none d-md-inline mr-3">
                        Admin
                    </span>

                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                        <span class="symbol-label font-size-h5 font-weight-bold">
                            {{ substr('Admin', 0, 1) }}
                        </span>
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>