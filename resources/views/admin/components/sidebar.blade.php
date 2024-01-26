<div id="kt_app_sidebar" class="app-sidebar flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo px-6 border border-0 flex-column-auto" id="kt_app_sidebar_logo">
        <a href="/">
        <img alt="Logo" src="{{ asset('assets/icon/logo.png') }}" class=" mt-1 h-50px app-sidebar-logo-default" />
        <img alt="Logo" src="{{ asset('assets/icon/logo.png') }}" class="h-25px app-sidebar-logo-minimize" />
        </a>
        <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-double-left fs-2 rotate-180">
            <span class="path1"></span>
            <span class="path2"></span>
            </i>
        </div>
    </div>

    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-element-11 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-handcart fs-1"></i>
                        </span>
                    <span class="menu-title">Product Data</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('categories.index') ? 'active' : '' }}" href="{{ route('categories.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-book-open fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Category Data</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('company.index') ? 'active' : '' }}" href="{{ route('company.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-profile-user fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Company Profile</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('sosial-media.index') ? 'active' : '' }}" href="{{ route('sosial-media.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-technology-4 fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                            </i>
                        </span>
                        <span class="menu-title">Social Media</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('banner-slider.index') ? 'active' : '' }}" href="{{ route('banner-slider.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-picture fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Banner</span>
                    </a>
                </div>

             
            </div>
        </div>
    </div>
</div>
