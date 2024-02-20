@extends('frontend.layouts.base')
@section('title', 'Product -')
@section('toolbar')

@section('styles')
{{-- <style>
    .single-item .icon-box {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 80px;
        height: 80px;
        line-height: 80px;
        font-size: 40px;
        color: #fff;
        text-align: center;
        border-radius: 50%;
    }
</style> --}}
@endsection

@include('frontend/components/toolbar',['title' => 'Product','subtitle' => 'Details', 'backgroundImage' => asset('background/product_detail.jpg')])

@endsection

@section('content')
<section class="shop-details p_relative pt_120 pb_120 bg-color-4">
    <div class="auto-container">
        <div class="product-details-content p_relative d_block mb_110">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box p_relative d_block">
                        <figure class="image"><img src="{{ asset($product->image_path) }}"  alt=""></figure>
                        {{-- <div class="preview-link p_absolute t_20 r_20"><a href="assets/images/shop/shop-1.jpg" class="lightbox-image p_relative d_iblock fs_20 centred z_1 w_50 h_50 color_black lh_50" data-fancybox="gallery"><i class="icon-63"></i></a></div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="product-details p_relative d_block ml_20">
                        <h2 class="d_block fs_30 lh_40 fw_sbold mb_5">{{ $product->name }}</h2>
                        {{-- <span class="price p_relative d_block fs_20 lh_30 fw_medium mb_25">$70.30</span> --}}
                        <div class="other-option">
                            <ul class="list">
                                <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Nomor: </span>{{ $product->nomor }}</li>
                                <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Series: </span>{{ $product->series }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-discription p_relative d_block mb_100">
                        <div class="content-box">
                            <h5 class="">Guarantee Product</h5>
                            <hr>
                            <div>
                                <p>Each product we offer comes with a comprehensive one-year warranty, giving you a guarantee of safety and satisfaction. We are ready to provide a responsive and comprehensive after-sales service throughout the warranties. With our one year guarantee, you can be sure that your investment is well protected.</p>
                                <p>Do not doubt the reliability of our warranty, as we are committed to providing comprehensive protection and the best quality of service as long as the guarantee remains valid. </p>
                                <div class="content_block_one">
                                    <div class="content-box p_relative d_block ml_30">
                                     
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
@endsection

@section('script')

@endsection
