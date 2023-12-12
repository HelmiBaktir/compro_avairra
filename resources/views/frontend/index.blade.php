<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Avairra-Website</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('easton/images/favicon.ico')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('easton/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{ asset('easton/css/flaticon.css')}}" rel="stylesheet">
<link href="{{ asset('easton/css/owl.css')}}" rel="stylesheet">
<link href="{{ asset('easton/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('easton/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{ asset('easton/css/animate.css')}}" rel="stylesheet">
<link href="{{ asset('easton/css/color.css')}}" rel="stylesheet">
<link href="{{ asset('easton/css/elpath.css')}}" rel="stylesheet">
<link href="{{ asset('easton/css/jquery-ui.css')}}" rel="stylesheet">
<link href="{{ asset('easton/css/style.css')}}" rel="stylesheet">
<link href="{{ asset('easton/css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="v" class="letters-loading">
                                v
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.html"><img src="{{ asset('easton/images/logo.png')}}" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
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
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="menu-area clearfix">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="{{ asset('easton/images/logo.png')}}" alt=""></a></figure>
                        </div>
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/Dashboard') }}">Home</a></li>
                                    <li><a href="{{ url('/about_us') }}">About</a></li> 
                                    <li><a href="{{ url('/product_us') }}">Product</a></li> 
                                    <li><a href="{{ url('/contact') }}">Contact</a></li> 
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
                            <figure class="logo"><a href="index.html"><img src="{{ asset('easton/images/logo.png')}}" alt=""></a></figure>
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
        <!-- main-header end -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('easton/images/logo-2.png')}}" alt="" title=""></a></div>
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


        <!-- banner-section -->
        <section class="banner-section banner-style-one p_relative">
            <div class="shape">
                <div class="shape-1 p_absolute l_0 b_0 z_2"></div>
                <div class="shape-2 p_absolute l_0 t_0 z_2"></div>
                <div class="shape-3 p_absolute l_0 t_0 z_2"></div>
            </div>
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item p_relative pt_180">
                    <div class="image-layer p_absolute" style="background-image:url({{ asset('easton/images/banner/banner-1.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_block fs_60 lh_70 fw_bold mb_18">Best <span>Electricty</span> Service for Your Family</h2>
                            <p class="p_relative d_block fs_18">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim.</p>
                        </div> 
                    </div>
                </div>
                <div class="slide-item p_relative pt_180">
                    <div class="image-layer p_absolute" style="background-image:url({{ asset('easton/images/banner/banner-2.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_block fs_60 lh_70 fw_bold mb_18">Best <span>Electricty</span> Service for Your Family</h2>
                            <p class="p_relative d_block fs_18">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim.</p>
                        </div> 
                    </div>
                </div>
                <div class="slide-item p_relative pt_180">
                    <div class="image-layer p_absolute" style="background-image:url({{ asset('easton/images/banner/banner-3.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_block fs_60 lh_70 fw_bold mb_18">Best <span>Electricty</span> Service for Your Family</h2>
                            <p class="p_relative d_block fs_18">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- about-section -->
        <section class="about-section sec-pad">
            <div class="pattern-layer" style="background-image: url({{ asset('easton/images/shape/shape-2.png')}});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div data-animation-box class="image-box p_relative d_block pl_120 pb_100 mr_30">
                                <div class="shape-box">
                                    <div class="shape-1 p_absolute l_70 t_40 w_130 h_130" style="background-image: url({{ asset('easton/images/shape/shape-1.png')}});"></div>
                                    <div class="shape-2 p_absolute b_45 r_40 w_130 h_130" style="background-image: url({{ asset('easton/images/shape/shape-1.png')}});"></div>
                                </div>
                                <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block" data-animation="overlay-animation"><img src="{{ asset('easton/images/resource/about-1.jpg')}}" alt=""></figure>
                                <div class="icon p_absolute l_25 float-bob-y"><img src="{{ asset('easton/images/icons/icon-1.png')}}" alt=""></div>
                                <div class="text-box centred p_absolute l_0 b_0 z_2">
                                    <div class="light-icon p_absolute"><img src="{{ asset('easton/images/icons/icon-2.png')}}" alt=""></div>
                                    <h2 class="d_block fs_40 lh_40 fw_bold mb_18">30</h2>
                                    <h3 class="d_block fw_medium">Years Experience of This Field</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box p_relative d_block ml_30">
                                <div class="sec-title p_relative mb_25">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">About Us</h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold">Residential & Commercial Electrical Services</h2>
                                </div>
                                <div class="text p_relative d_block mb_30">
                                    <p>All of our services are backed by our 100% satisfaction guarantee. Our electricians can install anything from new security lighting for outdoors to a whole home generator that will keep your appliances working during a power outage.</p>
                                </div>
                                <div class="inner p_relative d_block mb_40">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><i class="icon-9"></i></div>
                                                <h4>Emergency Repairs</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><i class="icon-10"></i></div>
                                                <h4>Rewiring and Check-up</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-style-one clearfix">
                                    <li>Emergency power solutions (generators)</li>
                                    <li>Wiring and installation/upgrades</li>
                                    <li>Full-service electrical layout, design</li>
                                </ul>
                                <figure class="signature"><img src="{{ asset('easton/images/icons/signature-1.png')}}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- service-section -->
        <section class="service-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('easton/images/shape/shape-3.png')}});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('easton/images/shape/shape-4.png')}});"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title p_relative mb_50 centred">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Our Services</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">We are a Full Service Electrical <br />Contractor</h2>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box p_relative d_block mb_60 centred">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn" data-tab="#tab-1">Domestic Services</li>
                            <li class="tab-btn active-btn" data-tab="#tab-2">Industrial Services</li>
                            <li class="tab-btn" data-tab="#tab-3">Commercial Services</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab" id="tab-1">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_two">
                                            <div class="content-box p_relative d_block mr_70">
                                                <div class="text p_relative d_block">
                                                    <h3>Domestic Service</h3>
                                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam quis nostrud exercitation ullamco laboris nis ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                        <div class="single-item p_relative d_block">
                                                            <div class="icon-box"><i class="icon-15"></i></div>
                                                            <h4><a href="air-conditioning.html">Air Conditioning</a></h4>
                                                            <p>Lorem ipsum dolor amet con adicing elit sed.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                        <div class="single-item p_relative d_block">
                                                            <div class="icon-box"><i class="icon-16"></i></div>
                                                            <h4><a href="heating-service.html">Heating Service</a></h4>
                                                            <p>Lorem ipsum dolor amet con adicing elit sed.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                        <div class="single-item p_relative d_block">
                                                            <div class="icon-box"><i class="icon-17"></i></div>
                                                            <h4><a href="indoor-lighting.html">Indoor Lighting</a></h4>
                                                            <p>Lorem ipsum dolor amet con adicing elit sed.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                        <div class="single-item p_relative d_block">
                                                            <div class="icon-box"><i class="icon-18"></i></div>
                                                            <h4><a href="security-system.html">Security System</a></h4>
                                                            <p>Lorem ipsum dolor amet con adicing elit sed.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                                        <div class="image_block_two">
                                            <div class="image-box p_relative d_block mt_8">
                                                <figure class="image p_relative d_block"><img src="{{ asset('easton/images/service/service-1.jpg')}}" alt=""></figure>
                                                <div class="icon-box"><i class="icon-45"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab active-tab" id="tab-2">
                            <div class="inner-box">
                                <div class="content_block_two">
                                    <div class="content-box p_relative d_block">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-12 col-sm-12 text-column">
                                                <div class="text p_relative d_block">
                                                    <h3>Industrial Service</h3>
                                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam quis nostrud exercitation ullamco laboris nis ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <p>Excepteur sint occaecat cupidatat non proid ent, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                                                <div class="inner-content">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-15"></i></div>
                                                                <h4><a href="air-conditioning.html">Air Conditioning</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-16"></i></div>
                                                                <h4><a href="heating-service.html">Heating Service</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-17"></i></div>
                                                                <h4><a href="indoor-lighting.html">Indoor Lighting</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-18"></i></div>
                                                                <h4><a href="security-system.html">Security System</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-19"></i></div>
                                                                <h4><a href="power-outlets.html">Power Outlets</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-20"></i></div>
                                                                <h4><a href="electrical-panels.html">Electrical Panels</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                                        <div class="image_block_three">
                                            <div class="image-box p_relative d_block">
                                                <figure class="image p_relative d_block"><img src="{{ asset('easton/images/service/service-2.jpg')}}" alt=""></figure>
                                                <div class="text">
                                                    <h5><i class="icon-45"></i>Best of Electrical Services</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_three">
                                            <div class="content-box">
                                                <div class="text">
                                                    <h3>Commercial Service</h3>
                                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam quis nostrud exercitation ullamco laboris nis ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                                </div>
                                                <div class="list-box clearfix">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Air Conditioning</li>
                                                        <li>Electric Heating Systems</li>
                                                        <li>Telephone & Computer Wiring</li>
                                                        <li>Lighting</li>
                                                        <li>Power Outlets</li>
                                                        <li>Appliances Overheat</li>
                                                    </ul>
                                                    <ul class="list-style-one clearfix">
                                                        <li>Frequent Power Surges</li>
                                                        <li>Rising Power Bills</li>
                                                        <li>Flickering Lights</li>
                                                        <li>Pool & Hot Tub Wiring</li>
                                                        <li>Whole House Surge Protector</li>
                                                        <li>New Construction</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- chooseus-section -->
        <section class="chooseus-section p_relative">
            <div class="pattern-layer" style="background-image: url({{ asset('easton/images/shape/shape-5.png')}});"></div>
            <div class="bg-layer"></div>
            <div class="outer-container p_relative">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_four">
                            <div class="content-box">
                                <div class="sec-title p_relative mb_30">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Why Choose Us</h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold mb_25">Great Reasons For People Choose Easton</h2>
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam quis nostrud exercitation ullamco laboris nis ut aliquip ex ea commodo consequat.</p>
                                </div>
                                <div class="inner-box centred p_relative d_block">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-21"></i></div>
                                                <h5 class="fs_18 fw_sbold">Affordable Price</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-22"></i></div>
                                                <h5 class="fs_18 fw_sbold">Quality Assistance</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-23"></i></div>
                                                <h5 class="fs_18 fw_sbold">Free Estimation</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-24"></i></div>
                                                <h5 class="fs_18 fw_sbold">Advance Systems</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-25"></i></div>
                                                <h5 class="fs_18 fw_sbold">Optimized Solutions</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-26"></i></div>
                                                <h5 class="fs_18 fw_sbold">24/7 Availability</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_four">
                            <div class="image-box mt_8">
                                <div class="image-shape">
                                    <div class="shape-1" style="background-image: url({{ asset('easton/images/shape/shape-6.png')}});"></div>
                                    <div class="shape-2" style="background-image: url({{ asset('easton/images/shape/shape-7.png')}});"></div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-image">
                                        <figure class="image-1 p_relative d_block"><img src="{{ asset('easton/images/resource/chooseus-1.jpg')}}" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 video-column">
                                        <div class="video-inner p_relative d_block">
                                            <figure class="image-2 p_relative d_block"><img src="{{ asset('easton/images/resource/chooseus-2.jpg')}}" alt=""></figure>
                                            <div class="video-btn">
                                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="icon-27"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- news-section ----- jadi product section -->
        <section class="news-section p_relative sec-pad">
            <div class="auto-container">
                <div class="sec-title p_relative mb_50 centred">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Our Product</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">Check This Out! <br />Avairra Product</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset('easton/images/news/news-1.jpg')}}" alt=""></a></figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.html">The Importance Of The Air Quality.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>10 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.html">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.html">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset('easton/images/news/news-2.jpg')}}" alt=""></a></figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.html">How to Repair Electricity to Car Engine.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>09 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.html">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.html">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{ asset('easton/images/news/news-3.jpg')}}" alt=""></a></figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.html">Electrical Wiring For Home & Office.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>08 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.html">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.html">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->

        
        <!-- funfact-section -->
        <section class="funfact-section p_relative centred bg-color-2">
            <div class="auto-container">
                <div class="inner-container p_relative">
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box p_relative d_block fs_60"><i class="icon-38"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="90">0</span>
                            </div>
                            <p>Successful projects</p>
                        </div>
                    </div>
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box p_relative d_block fs_60"><i class="icon-39"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="2.6">0</span><span>M</span>
                            </div>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box p_relative d_block fs_60"><i class="icon-40"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="35">0</span>
                            </div>
                            <p>Experienced Staff</p>
                        </div>
                    </div>
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box p_relative d_block fs_60"><i class="icon-41"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="10">0</span>
                            </div>
                            <p>Awards Win</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section -->


        <!-- testimonial-section -->
        <section class="testimonial-section p_relative">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{ asset('easton/images/background/testimonial-bg.jpg')}});"></div>
            <div class="bg-layer-2" style="background-image: url({{ asset('easton/images/background/testimonial-bg-2.jpg')}});"></div>
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                        <div class="sec-title light p_relative mb_50">
                            <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Testimonials</h5>
                            <h2 class="d_block fs_40 lh_50 fw_bold">What Our Client Say <br />About Easton.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 testimonial-column">
                        <div class="testimonial-inner p_relative d_block ml_30">
                            <div class="single-item-carousel owl-carousel owl-dots-none nav-style-one">
                                <div class="testimonial-block-one">
                                    <div class="inner-box p_relative d_block">
                                        <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png')}}" alt=""></div>
                                        <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                                        <p>Lorem ipsum dolor sit amet consectur adiptist ing elit sed eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quis nostrud exercit.</p>
                                        <div class="author-box p_relative d_block">
                                            <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('easton/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                                            <h5>Rachel McAdams</h5>
                                            <span class="designation p_relative d_block">Electrician</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-block-one">
                                    <div class="inner-box p_relative d_block">
                                        <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png')}}" alt=""></div>
                                        <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                                        <p>Lorem ipsum dolor sit amet consectur adiptist ing elit sed eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quis nostrud exercit.</p>
                                        <div class="author-box p_relative d_block">
                                            <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('easton/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                                            <h5>Rachel McAdams</h5>
                                            <span class="designation p_relative d_block">Electrician</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-block-one">
                                    <div class="inner-box p_relative d_block">
                                        <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png')}}" alt=""></div>
                                        <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                                        <p>Lorem ipsum dolor sit amet consectur adiptist ing elit sed eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quis nostrud exercit.</p>
                                        <div class="author-box p_relative d_block">
                                            <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('easton/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                                            <h5>Rachel McAdams</h5>
                                            <span class="designation p_relative d_block">Electrician</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- faq-section -->
        <section class="faq-section p_relative">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_five">
                            <div class="image-box">
                                <div class="shape" style="background-image: url({{ asset('easton/images/shape/shape-9.png')}});"></div>
                                <figure class="image image-1"><img src="{{ asset('easton/images/resource/faq-1.jpg')}}" alt=""></figure>
                                <figure class="image image-2"><img src="{{ asset('easton/images/resource/faq-2.jpg')}}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_five">
                            <div class="content-box p_relative d_block ml_30">
                                <div class="sec-title p_relative mb_50">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">FAQ’S</h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold mb_25">Frequently Asked Question</h2>
                                    <p class="fs_16">All of our services are backed by our 100% satisfaction guarantee Our electricians.</p>
                                </div>
                                <ul class="accordion-box">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"><i class="far fa-angle-down"></i></div>
                                            <h5>Do You Do Residential Work?</h5>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit elit consectur sed eiusmod tempor set aliquat enim minim veniam exercitation ullamco nis laboris aliquip commodo.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="far fa-angle-down"></i></div>
                                            <h5>Are You Licensed and Insured?</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit elit consectur sed eiusmod tempor set aliquat enim minim veniam exercitation ullamco nis laboris aliquip commodo.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="far fa-angle-down"></i></div>
                                            <h5>Do You Do Commercial Electrical Repair?</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit elit consectur sed eiusmod tempor set aliquat enim minim veniam exercitation ullamco nis laboris aliquip commodo.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-section end -->


        <!-- contact-section -->
        <section class="cta-section bg-color-1 p_relative pt_120 pb_120">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('easton/images/shape/shape-12.png')}});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('easton/images/shape/shape-13.png')}});"></div>
                <div class="pattern-3" style="background-image: url({{ asset('easton/images/shape/shape-7.png')}});"></div>
                <div class="pattern-4" style="background-image: url({{ asset('easton/images/shape/shape-7.png')}});"></div>
            </div>
            <figure class="image-layer"><img src="{{ asset('easton/images/resource/vector-1.png')}}" alt=""></figure>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_six">
                            <div class="content-box p_relative d_block mr_20">
                                <div class="sec-title p_relative mb_13">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_13">Contact</h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold">Need Help with The Best Electrical Services</h2>
                                </div>
                                <div class="text">
                                    <p>All of our services are backed by our 100% satisfaction guarantee Our electricians can install anything.</p>
                                </div>
                                <div class="support-box p_relative d_block">
                                    <div class="icon-box p_absolute l_0 t_0 w_70 h_70 lh_70 b_radius_50 fs_40"><i class="icon-37"></i></div>
                                    <h5>For Emergency</h5>
                                    <h3><a href="tel:01243507689">+012-4350-7689</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- main-footer -->
        <footer class="main-footer p_relative bg-color-2">
            <div class="icon-layer"><img src="{{ asset('easton/images/icons/icon-5.png')}}" alt=""></div>
            <div class="footer-top p_relative d_block">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="{{ asset('easton/images/footer-logo.png')}}" alt=""></a></figure>
                                <div class="text">
                                    <p>Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incididunt labore dolore magna aliqua enim ad minim.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml_100">
                                <div class="widget-title">
                                    <h3>Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">About</a></li>
                                        <li><a href="index.html">Services</a></li>
                                        <li><a href="index.html">Job</a></li>
                                        <li><a href="index.html">opportunities</a></li>
                                        <li><a href="index.html">Location</a></li>
                                        <li><a href="index.html">Article</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">About</a></li>
                                        <li><a href="index.html">Services</a></li>
                                        <li><a href="index.html">Job</a></li>
                                        <li><a href="index.html">opportunities</a></li>
                                        <li><a href="index.html">Location</a></li>
                                        <li><a href="index.html">Article</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li>Flat 20, Reynolds Neck, North Helenaville, FV77 8WS</li>
                                        <li><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                        <li><a href="mailto:sample@example.com">sample@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom p_relative">
                <div class="auto-container">
                    <div class="bottom-inner p_relative">
                        <div class="copyright"><p><a href="index.html">Easton</a> &copy; 2022 All Right Reserved</p></div>
                        <ul class="footer-nav">
                            <li><a href="index.html">Terms of Service</a></li>
                            <li><a href="index.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
        
    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('easton/js/jquery.js')}}"></script>
    <script src="{{ asset('easton/js/popper.min.js')}}"></script>
    <script src="{{ asset('easton/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('easton/js/plugins.js')}}"></script>
    <script src="{{ asset('easton/js/owl.js')}}"></script>
    <script src="{{ asset('easton/js/wow.js')}}"></script>
    <script src="{{ asset('easton/js/validation.js')}}"></script>
    <script src="{{ asset('easton/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('easton/js/appear.js')}}"></script>
    <script src="{{ asset('easton/js/scrollbar.js')}}"></script>
    <script src="{{ asset('easton/js/isotope.js')}}"></script>
    <script src="{{ asset('easton/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('easton/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('easton/js/parallax-scroll.js')}}"></script>

    <!-- main-js -->
    <script src="{{ asset('easton/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>
