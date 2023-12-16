@extends('frontend.layouts.base')
@section('title', 'Product -')
@section('toolbar')

@include('frontend/components/toolbar',['title' => 'Product','subtitle' => 'Details'])

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
                </div>
            </div>
        </div>
        <div class="product-discription p_relative d_block mb_100">
            <div class="content-box">
                <h5 class="">Description</h5>
                <hr>
                <div>
                    {!! $product->desc !!}
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@section('script')

@endsection
