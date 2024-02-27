@extends('frontend.layouts.base')
@section('title', 'About Us -')

@section('toolbar')
@include('frontend/components/toolbar', ['title' => 'About Us', 'backgroundImage' => asset('background/about_us.jpg')])
@endsection

@section('content')

<!-- start about us section  -->
<section class="about-section sec-pad">
    <div class="pattern-layer-2" style="background-image: url({{ asset('easton/images/shape/shape-24.png') }});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_eight">
                    <div data-animation-box class="image-box p_relative d_block">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('easton/images/shape/shape-45.png') }});"></div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('easton/images/shape/shape-45.png') }});"></div>
                        </div>
                        <div class="icon-box float-bob-y"><img src="{{ asset('easton/images/icons/icon-1.png') }}"
                                alt=""></div>
                        @if ($banner_1)
                        <figure data-animation-text class="overlay-anim-black-bg image image-1" data-animation="overlay-animation">
                            <img src="{{ asset($banner_1->image_path) }}" alt="" style="max-width: 470px; max-height: 470px; width: 100%; height: auto;">
                        </figure>
                        @else
                        <figure data-animation-text class="overlay-anim-black-bg image image-1"
                            data-animation="overlay-animation"><img
                                src="{{ asset('easton/images/resource/about-5.jpg') }}" alt=""></figure>
                        @endif
                        @if ($banner_2)
                        <figure class="image image-2"><img src="{{ asset($banner_2->image_path) }}"
                            alt="" style="max-width: 360px; max-height: 250px; width: 100%; height: auto;"></figure>
                        @else
                        <figure class="image image-2"><img src="{{ asset('easton/images/resource/about-6.jpg') }}"
                            alt=""></figure>
                        @endif     
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
                        <figure class="signature"><img src="{{ asset('easton/images/icons/signature-1.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section about us -->

<!-- start section our service -->
<section class="service-style-three p_relative sec-pad bg-color-3 centred">
    <div class="pattern-layer" style="background-image: url({{ asset('easton/images/shape/shape-32.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title p_relative mb_50">
            <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Our Services</h5>
            <h2 class="d_block fs_40 lh_50 fw_bold">Best Service From Our Heart to <br />All Customer</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
            <div class="service-block-two">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('background/our_service_1.jpg') }}" alt=""></figure>
                    <div class="lower-content">
                        <div class="icon-box">
                            <div class="icon-shape"
                                style="background-image: url({{ asset('easton/images/shape/shape-31.png') }});"></div>
                            <div class="icon"><i class="icon-13"></i></div>
                        </div>
                        <h3>Energy Management System</h3>
                        <p>Maximize electrical system management with real-time data acquisition.</p>
                    </div>
                </div>
            </div>
            <div class="service-block-two">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('background/our_service_2.jpg') }}" alt=""></figure>
                    <div class="lower-content">
                        <div class="icon-box">
                            <div class="icon-shape"
                                style="background-image: url({{ asset('easton/images/shape/shape-31.png') }});"></div>
                            <div class="icon"><i class="icon-19"></i></div>
                        </div>
                        <h3>Measuring and Monitoring of Pumps Performance</h3>
                        <p>Optimize pump efficiency and reliability.</p>
                    </div>
                </div>
            </div>
            <div class="service-block-two">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('background/our_service_3.jpg') }}" alt=""></figure>
                    <div class="lower-content">
                        <div class="icon-box">
                            <div class="icon-shape"
                                style="background-image: url({{ asset('easton/images/shape/shape-31.png') }});"></div>
                            <div class="icon"><i class="icon-12"></i></div>
                        </div>
                        <h3>Energy Metering Solution</h3>
                        <p>Energy measurement solutions provide accurate and efficient monitoring.</p>
                    </div>
                </div>
            </div>
            <div class="service-block-two">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('background/our_service_4.jpg') }}" alt=""></figure>
                    <div class="lower-content">
                        <div class="icon-box">
                            <div class="icon-shape"
                                style="background-image: url({{ asset('easton/images/shape/shape-31.png') }});"></div>
                            <div class="icon"><i class="icon-14"></i></div>
                        </div>
                        <h3>Integrated Energy Systems</h3>
                        <p>Monitoring and analysis of asset security systems, automation of energy production.</p>
                    </div>
                </div>
            </div>
            <div class="service-block-two">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('background/our_service_5.jpg') }}" alt=""></figure>
                    <div class="lower-content">
                        <div class="icon-box">
                            <div class="icon-shape"
                                style="background-image: url({{ asset('easton/images/shape/shape-31.png') }});"></div>
                            <div class="icon"><i class="icon-18"></i></div>
                        </div>
                        <h3>Asset Security Systems</h3>
                        <p>onitor and secure assets with state-of-the-art security system solutions for optimal protection.</p>
                    </div>
                </div>
            </div>
            <div class="service-block-two">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('background/our_service_6.jpg') }}" alt=""></figure>
                    <div class="lower-content">
                        <div class="icon-box">
                            <div class="icon-shape"
                                style="background-image: url({{ asset('easton/images/shape/shape-31.png') }});"></div>
                            <div class="icon"><i class="icon-20"></i></div>
                        </div>
                        <h3>Automation Systems</h3>
                        <p>Advanced automation system to improve the efficiency and productivity of your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section our service end -->

<!-- start testimonial section -->
<section class="testimonial-style-two about-page p_relative">
    <div class="bg-layer"></div>
    <div class="auto-container">
        <div class="sec-title light p_relative mb_50 centred">
            <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Testimonials</h5>
            <h2 class="d_block fs_40 lh_50 fw_bold">What Our Client Say <br />About PT.Avairra.</h2>
        </div>
        <div class="two-item-carousel owl-carousel owl-theme owl-nav-none">
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png') }}" alt="">
                    </div>
                    <p>Produk yang diberikan memiliki kualitas produk yang sangat baik dan sangat membantu memenuhi kebutuhan. Harga yang diberikan juga sepadan dengan yang di dapatkan</p>
                    <div class="author-box p_relative d_block">
                        <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img
                                src="{{ asset('easton/images/avatar/testimonial_1.jpg') }}" alt="">
                        </figure>
                        <h5>Harry Sunarsa</h5>
                        <span class="designation p_relative d_block">PT.Teravisindo Sukses</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png') }}" alt="">
                    </div>
                    <p>Produk cukup bersaing dan kompetitif, bisa request produk bedasarkan permintaan dan kebutuhan. Sepadan dengan harganya tetapi mohon diperhitungkan kembali untuk harga terbaik</p>
                    <div class="author-box p_relative d_block">
                        <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img
                                src="{{ asset('easton/images/avatar/testimonial_2.jpg') }}" alt="">
                        </figure>
                        <h5>Witarto</h5>
                        <span class="designation p_relative d_block">PT.Kifa Citra Pratama</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png') }}" alt="">
                    </div>
                    <p>Produk-produk yang ditawarkan sangat bagus dan bergaransi. Layanan yang diberikan juga bagus dan saya bisa memahami produk dengan sangat baik.</p>
                    <div class="author-box p_relative d_block">
                        <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img
                                src="{{ asset('easton/images/avatar/testimonial_3.jpg') }}" alt="">
                        </figure>
                        <h5>Yan Budi Setiawan</h5>
                        <span class="designation p_relative d_block">PT.Prima Mitranti Sejati</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png') }}" alt="">
                    </div>
                    <p>Pendapat saya untuk produknya bagus dan memenuhi kebutuhan, memiliki kualitas yang baik serta layanan yang baik juga, harganya juga affordable</p>
                    <div class="author-box p_relative d_block">
                        <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img
                                src="{{ asset('easton/images/avatar/testimonial_4.jpg') }}" alt="">
                        </figure>
                        <h5>Andi Diani Ambarwati</h5>
                        <span class="designation p_relative d_block">PT.Powertek Indoasia</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="light-icon"><img src="{{ asset('easton/images/icons/icon-3.png') }}" alt="">
                    </div>
                    <p>Pendapat umum saya tentang produk yang ditawarkan bagus dan menarik, kualitas baik dan sudah memenuhi sesuai dengan kebutuhan. layanan nya juga bagus dan sudah memenuhi, dan harga juga sebanding</p>
                    <div class="author-box p_relative d_block">
                        <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img
                                src="{{ asset('easton/images/avatar/testimonial_5.jpg') }}" alt="">
                        </figure>
                        <h5>Pak Tirto</h5>
                        <span class="designation p_relative d_block">PT.Intimuara Electrindo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end testimonial section -->


<!-- how its work section start -->
<section class="working-style-two p_relative sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                <div class="sec-title p_relative">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">How It’s Work</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">3 Easiest Step To Work with PT.Avairra</h2>
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
                                <h3><i class="icon-45"></i>Ask a Product and Make an Appointment</h3>
                                <p>When you're interested in a specific product, the first step is to schedule an appointment with us for further inquiries. Our experienced sales team will be delighted to provide more detailed information about the product. 
                                    Whether it's technical questions, specifications, or customization options, we're ready to help you 
                                    find the solution that best fits your needs.</p>
                                <a href="appointment.html" class="theme-btn btn-one">Appointment</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box ml_120">
                                <div class="shape"
                                    style="background-image: url({{ asset('easton/images/shape/shape-33.png') }});">
                                </div>
                                <figure class="image"><img src="{{ asset('background/schedule_step1.jpg') }}"
                                        alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab active-tab" id="tab-2">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="text mr_30">
                                <h3><i class="icon-45"></i>Select Your Product</h3>
                                <p>After gaining a clear understanding of your needs, we'll provide a comprehensive quotation. This includes related product catalogs, the latest price list, 
                                    and additional information you may need to make an informed decision. 
                                    We ensure you have all the necessary tools to make the right choice.</p>
                                <a href="appointment.html" class="theme-btn btn-one">Appointment</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box ml_120">
                                <div class="shape"
                                    style="background-image: url({{ asset('easton/images/shape/shape-33.png') }});">
                                </div>
                                <figure class="image"><img src="{{ asset('background/select_product_step2.jpg') }}"
                                        alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="tab-3">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="text mr_30">
                                <h3><i class="icon-45"></i>Price Negotiation and Order Processing</h3>
                                <p>If there's a need for price negotiation or additional considerations before you make the final decision, 
                                    we're always open to discussions. Once the price agreement is reached, and order details are confirmed, our team will promptly process your order with the Pre-Order (PO) system. 
                                    With an efficient process, we ensure that your order is handled quickly and accurately to meet your requirements.</p>
                                <a href="appointment.html" class="theme-btn btn-one">Appointment</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box ml_120">
                                <div class="shape"
                                    style="background-image: url({{ asset('easton/images/shape/shape-33.png') }});">
                                </div>
                                <figure class="image"><img src="{{ asset('background/order_step3.jpg') }}"
                                        alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- how its work section end -->

@endsection