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
                    <h2>Contact Us</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner p_relative d_block">
                <div 
                    class="google-map" 
                    id="contact-google-map" 
                    data-map-lat="40.712776" 
                    data-map-lng="-74.005974" 
                    data-icon-path="{{ asset('easton/images/icons/map-marker.png')}}"  
                    data-map-title="Brooklyn, New York, United Kingdom" 
                    data-map-zoom="12" 
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","{{ asset('easton/images/icons/map-marker.png')}}"]
                    }'>

                </div>
            </div>
        </section>
        <!-- google-map-section end -->


        <!-- contact-style-three -->
        <section class="contact-style-three">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                        <div class="contact-info mr_70">
                            <h3>Get In Touch</h3>
                            <p>Give us a call or drop by anytime, we answer all enquiries within 24 hours.</p>
                            <ul class="info-list clearfix">
                                <li>Modesto, 629 12th St, CA 95354 United States</li>
                                <li><a href="mailto:infomain@gmail.com">infomain@gmail.com</a></li>
                                <li><a href="tel:123045615523">+1 (230)-456-155-23</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <form method="post" action="sendemail.php" id="contact-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Your email" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Phone">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="check-box">
                                            <input class="check" type="checkbox" id="checkbox">
                                            <label for="checkbox">I agree that my submitted data is being collected and stored. *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                        <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message <i class="far fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-three end -->


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
    <script src="{{ asset('easton/js/product-filter.js')}}"></script>
    <script src="{{ asset('easton/js/jquery.bootstrap-touchspin.js')}}"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="{{ asset('easton/js/gmaps.js')}}"></script>
    <script src="{{ asset('easton/js/map-helper.js')}}"></script>

    <!-- main-js -->
    <script src="{{ asset('easton/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>
