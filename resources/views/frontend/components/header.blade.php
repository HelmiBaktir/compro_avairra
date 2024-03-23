<header class="main-header">
    <div class="header-top">
        <div class="top-inner">
            <div class="left-column">
                <ul class="info clearfix">
                    <li><i class="icon-1"></i>Sun-Fri  08:00AM-05:00PM</li>
                    @if (isset($address))
                    <li><i class="icon-2"></i>{{ $address }}</li>
                    <li><i class="icon-3"></i><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></li>                   
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="outer-box">
            <div class="menu-area clearfix">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route('landing.home') }}"><img src="{{ asset('easton/images/logo.png')}}" alt=""></a></figure>
                </div>
                <div class="mobile-nav-toggler">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li><a href="{{ route('landing.home') }}">Home</a></li>
                            <li><a href="{{ route('landing.aboutUs') }}">About</a></li> 
                            <li><a href="{{ route('landing.products') }}">Product</a></li> 
                            <li><a href="{{ route('landing.contact') }}">Contact</a></li> 
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="nav-right">
                <div class="btn-box">
                    @if (isset($address))
                        <a href="https://wa.me/+{{ $phone_number }}?text=Halo%20Admin%2C%20Saya%20ingin%20mendapatkan%20informasi%20lebih%20lanjut"></a>
                    @endif              
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="menu-area clearfix">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route('landing.home') }}"><img src="{{ asset('easton/images/logo.png')}}" alt=""></a></figure>
                </div>
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
            <div class="nav-right">
                <div class="btn-box">
                <a href="https://wa.me/6282229372706?text=Halo%20Admin%2C%20Saya%20ingin%20mendapatkan%20informasi%20lebih%20lanjut" class="theme-btn btn-one">Any Question?</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href="{{ route('landing.home') }}"><img src="{{ asset('easton/images/logo-2.png')}}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li><i class="icon-1"></i>Sun-Fri  08:00AM-05:00PM</li>
                @if (isset($address))
                    <li><i class="icon-2"></i>{{ $address }}</li>
                    <li><i class="icon-3"></i><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></li>
                @endif
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                
                <li><a href="{{ count($sosial_media->where('platform','Twitter')) > 0 ? $sosial_media->where('platform','Twitter')[0]->link : '!#' }}"><span class="fab fa-twitter"></span></a></li>
                <li><a href="{{ count($sosial_media->where('platform','Facebook')) > 0 ? $sosial_media->where('platform','Facebook')[0]->link : '!#' }}"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="{{ count($sosial_media->where('platform','Pinterest')) > 0 ? $sosial_media->where('platform','Pinterest')[0]->link : '!#' }}"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="{{ count($sosial_media->where('platform','Instagram')) > 0 ? $sosial_media->where('platform','Instagram')[0]->link : '!#' }}"><span class="fab fa-instagram"></span></a></li>
                <li><a href="{{ count($sosial_media->where('platform','Youtube')) > 0 ? $sosial_media->where('platform','Youtube')[0]->link : '!#' }}"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->