<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Easton - HTML 5 Template Preview</title>

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


        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{ asset('easton/images/background/page-title.jpg')}});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>About Us</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- about-section -->
        <section class="about-section sec-pad">
            <div class="pattern-layer-2" style="background-image: url({{ asset('easton/images/shape/shape-24.png')}});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_eight">
                            <div data-animation-box class="image-box p_relative d_block">
                                <div class="shape">
                                    <div class="shape-1" style="background-image: url({{ asset('easton/images/shape/shape-45.png')}});"></div>
                                    <div class="shape-2" style="background-image: url({{ asset('easton/images/shape/shape-45.png')}});"></div>
                                </div>
                                <div class="icon-box float-bob-y"><img src="{{ asset('easton/images/icons/icon-1.png')}}" alt=""></div>
                                <figure data-animation-text class="overlay-anim-black-bg image image-1" data-animation="overlay-animation"><img src="{{ asset('easton/images/resource/about-5.jpg')}}" alt=""></figure>
                                <figure class="image image-2"><img src="{{ asset('easton/images/resource/about-6.jpg')}}" alt=""></figure>
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


        <!-- service-style-three -->
        <section class="service-style-three p_relative sec-pad bg-color-3 centred">
            <div class="pattern-layer" style="background-image: url({{ asset('easton/images/shape/shape-32.png')}});"></div>
            <div class="auto-container">
                <div class="sec-title p_relative mb_50">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Our Services</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">We are a Full Service Electrical <br />Contractor</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                    <div class="service-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><a href="air-conditioning.html"><img src="{{ asset('easton/images/service/service-9.jpg')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="icon-shape" style="background-image: url({{ asset('easton/images/shape/shape-31.png')}});"></div>
                                    <div class="icon"><i class="icon-15"></i></div>
                                </div>
                                <h3><a href="air-conditioning.html">Air Conditioning</a></h3>
                                <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                <div class="link"><a href="air-conditioning.html"><span>Read more</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><a href="heating-service.html"><img src="{{ asset('easton/images/service/service-10.jpg')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="icon-shape" style="background-image: url({{ asset('easton/images/shape/shape-31.png')}});"></div>
                                    <div class="icon"><i class="icon-16"></i></div>
                                </div>
                                <h3><a href="heating-service.html">Heating Service</a></h3>
                                <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                <div class="link"><a href="heating-service.html"><span>Read more</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><a href="electrical-panels.html"><img src="{{ asset('easton/images/service/service-11.jpg')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="icon-shape" style="background-image: url({{ asset('easton/images/shape/shape-31.png')}});"></div>
                                    <div class="icon"><i class="icon-17"></i></div>
                                </div>
                                <h3><a href="electrical-panels.html">Eectrical Service</a></h3>
                                <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                <div class="link"><a href="electrical-panels.html"><span>Read more</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><a href="air-conditioning.html"><img src="{{ asset('easton/images/service/service-9.jpg')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="icon-shape" style="background-image: url({{ asset('easton/images/shape/shape-31.png')}});"></div>
                                    <div class="icon"><i class="icon-15"></i></div>
                                </div>
                                <h3><a href="air-conditioning.html">Air Conditioning</a></h3>
                                <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                <div class="link"><a href="air-conditioning.html"><span>Read more</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><a href="heating-service.html"><img src="{{ asset('easton/images/service/service-10.jpg')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="icon-shape" style="background-image: url({{ asset('easton/images/shape/shape-31.png')}});"></div>
                                    <div class="icon"><i class="icon-16"></i></div>
                                </div>
                                <h3><a href="heating-service.html">Heating Service</a></h3>
                                <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                <div class="link"><a href="heating-service.html"><span>Read more</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><a href="electrical-panels.html"><img src="{{ asset('easton/images/service/service-11.jpg')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="icon-shape" style="background-image: url({{ asset('easton/images/shape/shape-31.png')}});"></div>
                                    <div class="icon"><i class="icon-17"></i></div>
                                </div>
                                <h3><a href="electrical-panels.html">Eectrical Service</a></h3>
                                <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                <div class="link"><a href="electrical-panels.html"><span>Read more</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><a href="air-conditioning.html"><img src="{{ asset('easton/images/service/service-9.jpg')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="icon-shape" style="background-image: url({{ asset('easton/images/shape/shape-31.png')}});"></div>
                                    <div class="icon"><i class="icon-15"></i></div>
                                </div>
                                <h3><a href="air-conditioning.html">Air Conditioning</a></h3>
                                <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                <div class="link"><a href="air-conditioning.html"><span>Read more</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><a href="heating-service.html"><img src="{{ asset('easton/images/service/service-10.jpg')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="icon-shape" style="background-image: url({{ asset('easton/images/shape/shape-31.png')}});"></div>
                                    <div class="icon"><i class="icon-16"></i></div>
                                </div>
                                <h3><a href="heating-service.html">Heating Service</a></h3>
                                <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                <div class="link"><a href="heating-service.html"><span>Read more</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><a href="electrical-panels.html"><img src="{{ asset('easton/images/service/service-11.jpg')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="icon-shape" style="background-image: url({{ asset('easton/images/shape/shape-31.png')}});"></div>
                                    <div class="icon"><i class="icon-17"></i></div>
                                </div>
                                <h3><a href="electrical-panels.html">Eectrical Service</a></h3>
                                <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                <div class="link"><a href="electrical-panels.html"><span>Read more</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-style-three end -->


        <!-- testimonial-style-two -->
        <section class="testimonial-style-two about-page p_relative">
            <div class="bg-layer"></div>
            <div class="auto-container">
                <div class="sec-title light p_relative mb_50 centred">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Testimonials</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">What Our Client Say <br />About Easton.</h2>
                </div>
                <div class="two-item-carousel owl-carousel owl-theme owl-nav-none">
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block">
                            <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png')}}" alt=""></div>
                            <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
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
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
                            <div class="author-box p_relative d_block">
                                <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('easton/images/resource/testimonial-2.jpg')}}" alt=""></figure>
                                <h5>Jhon Haris</h5>
                                <span class="designation p_relative d_block">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block">
                            <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png')}}" alt=""></div>
                            <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
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
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
                            <div class="author-box p_relative d_block">
                                <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('easton/images/resource/testimonial-2.jpg')}}" alt=""></figure>
                                <h5>Jhon Haris</h5>
                                <span class="designation p_relative d_block">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block">
                            <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png')}}" alt=""></div>
                            <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
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
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
                            <div class="author-box p_relative d_block">
                                <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('easton/images/resource/testimonial-2.jpg')}}" alt=""></figure>
                                <h5>Jhon Haris</h5>
                                <span class="designation p_relative d_block">Electrician</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end -->


        <!-- working-style-two -->
        <section class="working-style-two p_relative sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                         <div class="sec-title p_relative">
                            <h5 class="d_block fs_17 lh_25 fw_medium mb_9">How It’s Work</h5>
                            <h2 class="d_block fs_40 lh_50 fw_bold">3 Easiest Step To Work with Easton</h2>
                        </div>
                    </div>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box centred">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn" data-tab="#tab-1"><i class="icon-49"></i></li>
                            <li class="tab-btn active-btn" data-tab="#tab-2"><i class="icon-50"></i></li>
                            <li class="tab-btn" data-tab="#tab-3"><i class="icon-51"></i></li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab" id="tab-1">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="text mr_30">
                                        <h3><i class="icon-45"></i>Make An Appointment</h3>
                                        <p>Adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enim minim veniam quis nostrud exercition ulamco laboris nis aliquip commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                        <p>Cillum dolore eu fugiat nulla pariatur. excepteur sint occaecat cup idatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <a href="appointment.html" class="theme-btn btn-one">Appointment</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box ml_120">
                                        <div class="shape" style="background-image: url({{ asset('easton/images/shape/shape-33.png')}});"></div>
                                        <figure class="image"><img src="{{ asset('easton/images/resource/working-5.jpg')}}" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab active-tab" id="tab-2">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="text mr_30">
                                        <h3><i class="icon-45"></i>Select Your Service</h3>
                                        <p>Adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enim minim veniam quis nostrud exercition ulamco laboris nis aliquip commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                        <p>Cillum dolore eu fugiat nulla pariatur. excepteur sint occaecat cup idatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <a href="appointment.html" class="theme-btn btn-one">Appointment</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box ml_120">
                                        <div class="shape" style="background-image: url({{ asset('easton/images/shape/shape-33.png')}});"></div>
                                        <figure class="image"><img src="{{ asset('easton/images/resource/working-4.jpg')}}" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="text mr_30">
                                        <h3><i class="icon-45"></i>Handover Service</h3>
                                        <p>Adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enim minim veniam quis nostrud exercition ulamco laboris nis aliquip commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                        <p>Cillum dolore eu fugiat nulla pariatur. excepteur sint occaecat cup idatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <a href="appointment.html" class="theme-btn btn-one">Appointment</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box ml_120">
                                        <div class="shape" style="background-image: url({{ asset('easton/images/shape/shape-33.png')}});"></div>
                                        <figure class="image"><img src="{{ asset('easton/images/resource/working-6.jpg')}}" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- working-style-two end -->


        <!-- project-style-two -->
        <section class="project-style-two">
            <div class="outer-container">
                <div class="project-carousel-2 owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="project-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('easton/images/project/project-5.jpg')}}" alt=""></figure>
                            <div class="view-btn"><a href="{{ asset('easton/images/project/project-5.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-28"></i></a></div>
                            <div class="text">
                                <h4><a href="project-details.html">House Wiring Repair</a></h4>
                                <span>Installation</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('easton/images/project/project-6.jpg')}}" alt=""></figure>
                            <div class="view-btn"><a href="{{ asset('easton/images/project/project-6.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-28"></i></a></div>
                            <div class="text">
                                <h4><a href="project-details.html">House Wiring Repair</a></h4>
                                <span>Installation</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('easton/images/project/project-7.jpg')}}" alt=""></figure>
                            <div class="view-btn"><a href="{{ asset('easton/images/project/project-7.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-28"></i></a></div>
                            <div class="text">
                                <h4><a href="project-details.html">House Wiring Repair</a></h4>
                                <span>Installation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-style-two end -->


        <!-- team-style-two -->
        <section class="team-style-two p_relative">
            <div class="auto-container">
                <div class="sec-title p_relative mb_45 centred">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Our Staff</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">Our Professional Electrician <br />Staff</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('easton/images/team/team-4.jpg')}}" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <h3><a href="index-3.html">Jack Nicholson</a></h3>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('easton/images/team/team-5.jpg')}}" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <h3><a href="index-3.html">Robert Downey</a></h3>
                                <span class="designation">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('easton/images/team/team-6.jpg')}}" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <h3><a href="index-3.html">Gerard Butler</a></h3>
                                <span class="designation">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('easton/images/team/team-4.jpg')}}" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <h3><a href="index-3.html">Jack Nicholson</a></h3>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('easton/images/team/team-5.jpg')}}" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <h3><a href="index-3.html">Robert Downey</a></h3>
                                <span class="designation">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('easton/images/team/team-6.jpg')}}" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <h3><a href="index-3.html">Gerard Butler</a></h3>
                                <span class="designation">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('easton/images/team/team-4.jpg')}}" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <h3><a href="index-3.html">Jack Nicholson</a></h3>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('easton/images/team/team-5.jpg')}}" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <h3><a href="index-3.html">Robert Downey</a></h3>
                                <span class="designation">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('easton/images/team/team-6.jpg')}}" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-3.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <h3><a href="index-3.html">Gerard Butler</a></h3>
                                <span class="designation">Electrician</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-style-two end -->


        <!-- subscribe-section -->
        <section class="subscribe-section p_relative">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text p_relative d_block">
                                <h2>Subscribe to Our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="form-inner p_relative d_block">
                                <form action="index.html" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your email address" required="">
                                        <button type="submit">Subscribe Now<i class="icon-7"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


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
