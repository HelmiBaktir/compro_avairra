<header class="main-header">
    <div class="header-top">
        <div class="top-inner">
            <div class="left-column">
                <ul class="info clearfix">
                    <li><i class="icon-1"></i>Sun-Fri  08:00AM-05:00PM</li>
                    <li><i class="icon-2"></i>Jln. Parang Kusuma No. 9i, Surabaya</li>
                    <li><i class="icon-3"></i><a href="mailto:needhelp@info.com">avairra@gmail.com</a></li>
                </ul>
            </div>
            <div class="right-column">
                <ul class="social-links clearfix">
                    <li><p>Follow Us:</p></li>
                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="outer-box">
            <div class="menu-area clearfix">
                <div class="logo-box">
                    <figure class="logo"><a href="index.html"><img src="{{ asset('easton/images/logo.png')}}" alt=""></a></figure>
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
                            <li><a href="{{ route('landing.product') }}">Product</a></li> 
                            <li><a href="{{ route('landing.contact') }}">Contact</a></li> 
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="nav-right">
                <div class="support-box">
                    <h6><i class="icon-4"></i>Call: <a href="tel:123045615523">+1 (230)-456-155-23</a></h6>
                </div>
                <div class="search-box-outer search-toggler">
                    <i class="icon-5"></i>
                </div>
                <div class="btn-box">
                    <a href="index.html" class="theme-btn btn-one">Appointment</a>
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
                <div class="support-box">
                    <h6><i class="icon-4"></i>Call: <a href="tel:123045615523">+1 (230)-456-155-23</a></h6>
                </div>
                <div class="search-box-outer search-toggler">
                    <i class="icon-5"></i>
                </div>
                <div class="btn-box">
                    <a href="index.html" class="theme-btn btn-one">Appointment</a>
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
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->