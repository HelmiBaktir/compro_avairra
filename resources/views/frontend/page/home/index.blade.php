@extends('frontend.layouts.base')

@section('content')
<!-- banner-section -->
<section class="banner-section banner-style-one p_relative">
    <div class="shape">
        <div class="shape-1 p_absolute l_0 b_0 z_2"></div>
        <div class="shape-2 p_absolute l_0 t_0 z_2"></div>
        <div class="shape-3 p_absolute l_0 t_0 z_2"></div>
    </div>
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
        @foreach ($banner as $item)     
        <div class="slide-item p_relative pt_180">
            <div class="image-layer p_absolute" style="background-image:url({{ asset($item->image_path)}})"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    <h2 class="p_relative d_block fs_60 lh_70 fw_bold mb_18">Best <span>Solution</span> for Your Company</h2>
                    <p class="p_relative d_block fs_18">Best Choice to Provide Solutions the Latest on Security Solutions and Energy & Efficiency Measurements for Protect Asset.</p>
                </div>
            </div>
        </div>
        @endforeach
        {{-- <div class="slide-item p_relative pt_180">
            <div class="image-layer p_absolute" style="background-image:url({{ asset('easton/images/banner/banner-2.jpg')}})"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    <h2 class="p_relative d_block fs_60 lh_70 fw_bold mb_18">Best <span>Solution</span> for Your Company</h2>
                    <p class="p_relative d_block fs_18">Best Choice to Provide Solutions the Latest on Security Solutions and Energy & Efficiency Measurements for Protect Asset.</p>
                </div>
            </div>
        </div>
        <div class="slide-item p_relative pt_180">
            <div class="image-layer p_absolute" style="background-image:url({{ asset('easton/images/banner/banner-3.jpg')}})"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    <h2 class="p_relative d_block fs_60 lh_70 fw_bold mb_18">Best <span>Solution</span> for Your Company</h2>
                    <p class="p_relative d_block fs_18">Best Choice to Provide Solutions the Latest on Security Solutions and Energy & Efficiency Measurements for Protect Asset.</p>
                </div>
            </div>
        </div> --}}
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
                        <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block" data-animation="overlay-animation"><img src="{{ asset('background/about_us_in_home.jpg')}}" alt=""></figure>
                        <div class="icon p_absolute l_25 float-bob-y"><img src="{{ asset('easton/images/icons/icon-1.png')}}" alt=""></div>
                        <div class="text-box centred p_absolute l_0 b_0 z_2">
                            <div class="light-icon p_absolute"><img src="{{ asset('easton/images/icons/icon-2.png')}}" alt=""></div>
                            <h2 class="d_block fs_40 lh_40 fw_bold mb_18">10</h2>
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
                            <h2 class="d_block fs_40 lh_50 fw_bold">Security and Efficient Energy Services</h2>
                        </div>
                        <div class="text p_relative d_block mb_30">
                            <p>PT. Avairra Indo Karya was founded in 2014 by two highly competent people in its field, namely Mr. Abdullah Baraja (Chief Commissioner) and Mr. Ali Baraja(Chief Director) with the aim of providing the latest solutions on security and energy & efficiency measurement solutions to protect Asset. We are trusted as the sole agent of several international companies to provide the best solution. Moreover, we have ISO 9000 certification which we have international standard quality assurance.</p>
                        </div>
                        <div class="inner p_relative d_block mb_40">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-11"></i></div>
                                        <h4>Trusted Product</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-10"></i></div>
                                        <h4>Guaranteed All Products</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <ul class="list-style-one clearfix">
                            <li>Emergency power solutions (generators)</li>
                            <li>Wiring and installation/upgrades</li>
                            <li>Full-service electrical layout, design</li>
                        </ul> -->
                        <figure class="signature"><img src="{{ asset('easton/images/icons/signature-1.png')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- service-section DONE-->
<section class="service-section">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{ asset('easton/images/shape/shape-3.png')}});"></div>
        <div class="pattern-2" style="background-image: url({{ asset('easton/images/shape/shape-4.png')}});"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title p_relative mb_50 centred">
            <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Our Services</h5>
            <h2 class="d_block fs_40 lh_50 fw_bold">Best Service From Our Heart to <br />All Customer</h2>
        </div>
        <div class="tabs-box">
            <div class="tab-btn-box p_relative d_block mb_60 centred">
                <ul class="tab-btns tab-buttons clearfix">
                    <li class="tab-btn" data-tab="#tab-1">Our Services</li>
                    <li class="tab-btn active-btn" data-tab="#tab-2">Our Products</li>
                    <li class="tab-btn" data-tab="#tab-3">Our Guaranteed</li>
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
                                            <h3>Our Service</h3>
                                            <p>We are committed to delivering state-of-the-art solutions in energy security and measurement, with a focus on efficiency to protect your revenue. We have reliable and experienced technicians to deliver quality services.</p>
                                            <p>With a team of reliable, experienced engineers, we are ready to provide the best solutions to ensure optimal security and energy efficiency, so that your income remains protected.</p>
                                            <p>Our top-notch products are presented by a team of technicians who are not only expert, but also ready to provide in-depth explanations to ensure you understand every detail well.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                                <div class="image_block_two">
                                    <div class="image-box p_relative d_block mt_8">
                                        <figure class="image p_relative d_block"><img src="{{ asset('background/service_1.jpg')}}" alt=""></figure>
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
                                            <h3>Our Products</h3>
                                            <p>We provide products for security as well as energy and efficiency measurements to protect your income. You can customize your needs according to the company and adjust your budget for the price.</p>
                                            <p>Don't be ashamed to ask about our products as we will serve all our customers with all our heart.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                                        <div class="inner-content">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                    <div class="single-item p_relative d_block">
                                                        <div class="icon-box"><i class="icon-13"></i></div>
                                                        <h4>Energy Management System</h4>
                                                        <p>Maximize electrical system management with real-time data acquisition and monitoring software for seamless control across industries.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                    <div class="single-item p_relative d_block">
                                                        <div class="icon-box"><i class="icon-19"></i></div>
                                                        <h4>Measuring and Monitoring of Pumps Performance</h4>
                                                        <p>Optimize pump efficiency and reliability with best performance measurement and monitoring.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                    <div class="single-item p_relative d_block">
                                                        <div class="icon-box"><i class="icon-12"></i></div>
                                                        <h4>Energy Metering Solution</h4>
                                                        <p>Energy measurement solutions provide accurate and efficient monitoring of electricity consumption, supporting energy efficiency and cost management.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                    <div class="single-item p_relative d_block">
                                                        <div class="icon-box"><i class="icon-14"></i></div>
                                                        <h4>Integrated Energy Systems</h4>
                                                        <p>Monitoring and analysis of asset security systems, automation of energy production, and fuel consumption in power plants.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                    <div class="single-item p_relative d_block">
                                                        <div class="icon-box"><i class="icon-18"></i></div>
                                                        <h4>Asset Security Systems </h4>
                                                        <p>Monitor and secure assets with state-of-the-art security system solutions for optimal protection.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                    <div class="single-item p_relative d_block">
                                                        <div class="icon-box"><i class="icon-20"></i></div>
                                                        <h4>Automation Systems</h4>
                                                        <p>Advanced automation system to improve the efficiency and productivity of your business.</p>
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
                                        <figure class="image p_relative d_block"><img src="{{ asset('background/service_2.jpg')}}" alt=""></figure>
                                        <div class="text">
                                            <h5><i class="icon-45"></i>100% Guarantee</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                                <div class="content_block_three">
                                    <div class="content-box">
                                        <div class="text">
                                            <h3>Our Guaranteed</h3>
                                            <p>Each product we offer comes with a comprehensive one-year warranty, giving you a guarantee of safety and satisfaction. We are ready to provide a responsive and comprehensive after-sales service throughout the warranties. With our one year guarantee, you can be sure that your investment is well protected.</p>
                                            <p>Do not doubt the reliability of our warranty, as we are committed to providing comprehensive protection and the best quality of service as long as the guarantee remains valid. </p>
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
                            <h2 class="d_block fs_40 lh_50 fw_bold mb_25">Great Reasons For People Choose PT.Avairra</h2>
                            <p>Why choose us? Our commitment to excellence is backed by a solid one-year warranty on our products. Our skilled technicians are dedicated to providing unparalleled service and expert explanations, ensuring your peace of mind.</p>
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
                                        <h5 class="fs_18 fw_sbold">Quality Assitance</h5>
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
                                        <h5 class="fs_18 fw_sbold">Efficient Solutions</h5>
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
                        <figure class="image-layer"><img src="{{ asset('background/choose_us.jpg')}}" alt=""></figure>
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
            @foreach($products  as $product)
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block">
                            <figure class="image-box"><a href="{{ route('landing.product.detail',['product'=>encrypt($product->id)]) }}"><img src="{{ asset($product->image_path)}}" alt=""></a></figure>
                            <div class="lower-content p_relative d_block">
                                <h3><a href="{{ route('landing.product.detail',['product'=>encrypt($product->id)]) }}">{{ $product->name }}</a></h3>
                                <!-- <ul class="post-info clearfix">
                                    <li><i class="icon-42"></i>10 Oct, 2021</li>
                                    <li><i class="icon-43"></i><a href="blog-details.html">Ashley Bronks</a></li>
                                </ul> -->
                                <p class="h-25px overflow: hidden;">{!! Str::limit($product->desc, 100) !!}</p>
                                <div class="link"><a href="{{ route('landing.product.detail',['product'=>encrypt($product->id)]) }}">Read more<i class="icon-7"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- <div class="col-lg-4 col-md-6 col-sm-12 news-block">
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
            </div> -->
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
                        <span class="count-text" data-speed="1500" data-stop="19">0</span>
                    </div>
                    <p>Successful projects</p>
                </div>
            </div>
            <div class="counter-block-one wow slideInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="icon-box p_relative d_block fs_60"><i class="icon-39"></i></div>
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="250">0</span>
                    </div>
                    <p>Satisfied Clients</p>
                </div>
            </div>
            <div class="counter-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="icon-box p_relative d_block fs_60"><i class="icon-40"></i></div>
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="12">0</span>
                    </div>
                    <p>Experienced Staff</p>
                </div>
            </div>
            <div class="counter-block-one wow slideInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="icon-box p_relative d_block fs_60"><i class="icon-41"></i></div>
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="9">0</span><span> K</span>
                    </div>
                    <p>ISOO</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section -->


<!-- testimonial-section -->
<section class="testimonial-section p_relative">
    <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{ asset('background/testimonial_bg.jpg')}});"></div>
    <div class="bg-layer-2" style="background-image: url({{ asset('easton/images/background/testimonial-bg-2.jpg')}});"></div>
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                <div class="sec-title light p_relative mb_50">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Testimonials</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">What Our Client Say <br />About PT.Avairra.</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 testimonial-column">
                <div class="testimonial-inner p_relative d_block ml_30">
                    <div class="single-item-carousel owl-carousel owl-dots-none nav-style-one">
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png')}}" alt=""></div>
                                <p>Produk yang diberikan memiliki kualitas produk yang sangat baik dan sangat membantu memenuhi kebutuhan.</p>
                                <div class="author-box p_relative d_block">
                                    <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('easton/images/avatar/testimonial_1.jpg')}}" alt=""></figure>
                                    <h5>Harry Sunarsa</h5>
                                    <span class="designation p_relative d_block">PT.Teravisindo Sukses</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png')}}" alt=""></div>
                                <p>Produk cukup bersaing dan kompetitif, bisa request produk bedasarkan permintaan dan kebutuhan. Sepadan dengan harganya tetapi mohon diperhitungkan kembali untuk harga terbaik</p>
                                <div class="author-box p_relative d_block">
                                    <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('easton/images/avatar/testimonial_2.jpg')}}" alt=""></figure>
                                    <h5>Witarto</h5>
                                    <span class="designation p_relative d_block">PT.Kifa Citra Pratama</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png')}}" alt=""></div>
                                <p>Produk-produk yang ditawarkan sangat bagus dan bergaransi. Layanan yang diberikan juga bagus dan saya bisa memahami produk dengan sangat baik.</p>
                                <div class="author-box p_relative d_block">
                                    <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('easton/images/avatar/testimonial_3.jpg')}}" alt=""></figure>
                                    <h5>Yan Budi Setiawan</h5>
                                    <span class="designation p_relative d_block">PT.Prima Mitranti Sejati</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png')}}" alt=""></div>
                                <p>Pendapat saya untuk produknya bagus dan memenuhi kebutuhan, memiliki kualitas yang baik serta layanan yang baik juga, harganya juga affordable</p>
                                <div class="author-box p_relative d_block">
                                    <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('easton/images/avatar/testimonial_4.jpg')}}" alt=""></figure>
                                    <h5>Andi Diani Ambarwati</h5>
                                    <span class="designation p_relative d_block">PT.Powertek Indoasia</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png')}}" alt=""></div>
                                <p>Pendapat umum saya tentang produk yang ditawarkan bagus dan menarik, kualitas baik dan sudah memenuhi sesuai dengan kebutuhan. layanan nya juga bagus dan sudah memenuhi, dan harga juga sebanding</p>
                                <div class="author-box p_relative d_block">
                                    <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('easton/images/avatar/testimonial_5.jpg')}}" alt=""></figure>
                                    <h5>Pak Tirto</h5>
                                    <span class="designation p_relative d_block">PT.Intimuara Electrindo</span>
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
                        <figure class="image image-1"><img src="{{ asset('background/faq_1.jpg')}}" alt=""></figure>
                        <figure class="image image-2"><img src="{{ asset('background/faq_1.jpg')}}" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_five">
                    <div class="content-box p_relative d_block ml_30">
                        <div class="sec-title p_relative mb_50">
                            <h5 class="d_block fs_17 lh_25 fw_medium mb_9">FAQ’S</h5>
                            <h2 class="d_block fs_40 lh_50 fw_bold mb_25">Frequently Asked Question</h2>
                        </div>
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><i class="far fa-angle-down"></i></div>
                                    <h5>How do your solutions protect revenue?</h5>
                                </div>
                                <div class="acc-content current">
                                    <div class="text">
                                        <p>Our solutions are designed to provide real-time monitoring and security, ensuring energy efficiency and safeguarding your revenue from potential risks.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="far fa-angle-down"></i></div>
                                    <h5>Can we integrate solutions with existing systems?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Certainly. Our solutions are designed to be seamlessly integrated with your existing systems, ensuring a smooth implementation without disrupting your operations.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="far fa-angle-down"></i></div>
                                    <h5>How does product efficiency compare to others?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Our products excel in terms of energy efficiency and durability. With cutting-edge technology, we provide superior solutions to ensure the sustainability and reliability of your business.</p>
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

<br>
<br>

<!-- contact-section -->
<section class="cta-section bg-color-1 p_relative pt_120 pb_120">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{ asset('easton/images/shape/shape-12.png')}});"></div>
        <div class="pattern-2" style="background-image: url({{ asset('easton/images/shape/shape-13.png')}});"></div>
        <div class="pattern-3" style="background-image: url({{ asset('easton/images/shape/shape-7.png')}});"></div>
        <div class="pattern-4" style="background-image: url({{ asset('easton/images/shape/shape-7.png')}});"></div>
    </div>
    <figure class="image-layer"><img src="{{ asset('background/contact_bg1.jpg')}}" alt=""></figure>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_six">
                    <div class="content-box p_relative d_block mr_20">
                        <div class="sec-title p_relative mb_13">
                            <h5 class="d_block fs_17 lh_25 fw_medium mb_13">Contact</h5>
                            <h2 class="d_block fs_40 lh_50 fw_bold">Need Help? Contact us!</h2>
                        </div>
                        <div class="text">
                            <p>All of our services are backed by our 100% satisfaction guarantee Our electricians can install anything.</p>
                        </div>
                        <div class="support-box p_relative d_block">
                            <div class="icon-box p_absolute l_0 t_0 w_70 h_70 lh_70 b_radius_50 fs_40"><i class="icon-37"></i></div>
                            <h5>For Emergency</h5>
                            <h3><a href="https://wa.me/6282229372706?text=Halo%20Admin%2C%20Saya%20ingin%20mendapatkan%20informasi%20lebih%20lanjut">+62-822-2937-2706</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->
@endsection
