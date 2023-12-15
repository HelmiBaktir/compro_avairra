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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link {{ request()->is('*pengajuan*') ? 'active' : '' }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-tablet-text-up fs-2">
                                <i class="path1"></i>
                                <i class="path2"></i>
                            </i>
                        </span>
                        <span class="menu-title">Product</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}">
                            <span class="menu-title">
                                Data
                            </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('categories.index') ? 'active' : '' }}" href="{{ route('categories.index') }}">
                            <span class="menu-title">
                                Category
                            </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link {{ request()->is('*keuangan*') ? 'active' : '' }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-bill fs-2">
                                <i class="path1"></i>
                                <i class="path2"></i>
                                <i class="path3"></i>
                                <i class="path4"></i>
                                <i class="path5"></i>
                                <i class="path6"></i>
                            </i>
                        </span>
                        <span class="menu-title">Company</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('company.index') ? 'active' : '' }}" href="{{ route('company.index') }}">
                            <span class="menu-title">
                                Data
                            </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('sosial-media.index') ? 'active' : '' }}" href="{{ route('sosial-media.index') }}">
                            <span class="menu-title">
                                Sosial Media
                            </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-tablet-text-down fs-2">
                    <i class="path1"></i>
                    <i class="path2"></i>
                    <i class="path3"></i>
                    <i class="path4"></i>
                    </i>
                    </span>
                    <span class="menu-title">Banner</span>
                    </a>
                </div>

             
            </div>
        </div>
    </div>
</div>
