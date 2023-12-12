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
<link href="{{ asset('easton/css/nice-select.css')}}" rel="stylesheet">
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
                    <h2>Our Shop</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Our Shop</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- shop-page-section -->
        <section class="shop-page-section bg-color-4">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                        <div class="shop-sidebar">
                            <div class="search-widget sidebar-widget">
                                <div class="widget-title">
                                    <h4>Search</h4>
                                </div>
                                <form action="shop.html" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Search" required="">
                                        <button type="submit"><i class="icon-63"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="category-widget sidebar-widget">
                                <div class="widget-title">
                                    <h4>Categories</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="shop-details.html"><i class="icon-7"></i>Power Tools (9)</a></li>
                                        <li><a href="shop-details.html"><i class="icon-7"></i>Electrical & Lighting (1)</a></li>
                                        <li><a href="shop-details.html"><i class="icon-7"></i>Measuring Tools (5)</a></li>
                                        <li><a href="shop-details.html"><i class="icon-7"></i>Ware Accessories (3)</a></li>
                                        <li><a href="shop-details.html"><i class="icon-7"></i>Hammer Drills (7)</a></li>
                                        <li><a href="shop-details.html"><i class="icon-7"></i>Screw Driver (2)</a></li>
                                        <li><a href="shop-details.html"><i class="icon-7"></i>Home Appliance (6)</a></li>
                                        <li><a href="shop-details.html"><i class="icon-7"></i>Accessories (4)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-filter sidebar-widget">
                                <div class="widget-title">
                                    <h4>by Price</h4>
                                </div>
                                <div class="range-slider clearfix p_relative">
                                    <div class="price-range-slider"></div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <button class="filter-btn">Filter</button>
                                        </div>
                                        <div class="pull-right">
                                            <p>Price:</p>
                                            <div class="title p_relative d_iblock"></div>
                                            <div class="input p_relative d_iblock"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tags-widget sidebar-widget">
                                <div class="widget-title">
                                    <h4>Tags</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="shop-details.html">Electrical</a></li>
                                        <li><a href="shop-details.html">Hammer</a></li>
                                        <li><a href="shop-details.html">Screw Driver</a></li>
                                        <li><a href="shop-details.html">External</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 cols-sm-12 content-side">
                        <div class="our-shop">
                            <div class="item-shorting p_relative d_block clearfix">
                                <div class="left-column pull-left clearfix">
                                    <div class="btn-box float_left p_relative clearfix mr_30">
                                        <button class="grid-view on p_relative d_iblock fs_20 b_radius_5 mr_2 centred"><i class="icon-76"></i></button>
                                        <button class="list-view p_relative d_iblock fs_20 b_radius_5 centred"><i class="icon-77"></i></button>
                                    </div>
                                    <div class="text float_left"><p class="fs_16 font_family_poppins">Showing <span class="color_black">1–12</span> of <span class="color_black">50</span> Results</p></div>
                                </div>
                                <div class="right-column pull-right clearfix">
                                    <div class="short-box clearfix">
                                        <div class="select-box">
                                            <select class="wide">
                                               <option data-display="Popularity">Popularity</option>
                                               <option value="1">New Collection</option>
                                               <option value="2">Top Sell</option>
                                               <option value="4">Top Ratted</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper grid">
                                <div class="shop-grid-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-48.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-48.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Gedore 7R182C0 Torque Screwdriver</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$60.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-49.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-49.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Globe Bulbs Lights 3W Cheap LED Light Bulb</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$50.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-50.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-50.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Bahco 4559-18 Bolt Cutter 430mm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$25.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="sale">Sale</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-51.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-51.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Vakuumski trimer za kosu i bradu</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$40.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-52.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-52.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Glass Pendant Light Hanging Lamps Lighting</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$30.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-53.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-53.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Tankless Instant Electric Water Heater</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$75.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-54.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-54.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Bahco 4559-18 Bolt Cutter 430mm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$70.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-55.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-55.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Men's Electric Trimmer in Black Shaver</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$90.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-56.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-56.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">DS300 Large Tool Box Carry Case</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$60.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-57.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-57.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Aluminium Hammer Size 2 38mm 950gm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$40.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="sale">Sale</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-58.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-58.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Custom Leather Electrical Tool Carrier</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$80.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-59.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-59.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Westek Battery Operated Wall Sconces</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$44.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-52.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-52.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Glass Pendant Light Hanging Lamps Lighting</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$30.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-53.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-53.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Tankless Instant Electric Water Heater</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$75.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-54.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-54.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Bahco 4559-18 Bolt Cutter 430mm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$70.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-55.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-55.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Men's Electric Trimmer in Black Shaver</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$90.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-56.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-56.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">DS300 Large Tool Box Carry Case</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$60.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-48.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-48.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Gedore 7R182C0 Torque Screwdriver</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$60.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-49.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-49.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Globe Bulbs Lights 3W Cheap LED Light Bulb</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$50.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-50.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-50.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Bahco 4559-18 Bolt Cutter 430mm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$25.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="sale">Sale</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-51.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-51.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Vakuumski trimer za kosu i bradu</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$40.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-57.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-57.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Aluminium Hammer Size 2 38mm 950gm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$40.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="sale">Sale</span>
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-58.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-58.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Custom Leather Electrical Tool Carrier</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$80.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset('easton/images/shop/shop-59.png')}}" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.html"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.html"><i class="icon-61"></i></a></li>
                                                            <li><a href="{{ asset('easton/images/shop/shop-59.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.html">Westek Battery Operated Wall Sconces</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$44.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper centred mt_30 centred">
                                <ul class="pagination clearfix">
                                    <li><a href="shop.html" class="current">1</a></li>
                                    <li><a href="shop.html">2</a></li>
                                    <li><a href="shop.html">3</a></li>
                                    <li class="dot">...</li>
                                    <li><a href="shop.html">9</a></li>
                                    <li><a href="shop.html"><i class="icon-7"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-page-section -->


        <!-- subscribe-section -->
        <section class="subscribe-section p_relative bg-color-4">
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
    <script src="{{ asset('easton/js/product-filter.js')}}"></script>

    <!-- main-js -->
    <script src="{{ asset('easton/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>