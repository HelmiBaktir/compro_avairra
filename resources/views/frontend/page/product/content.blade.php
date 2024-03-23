<div class="our-shop">
    <div class="item-shorting p_relative d_block clearfix">
        <div class="left-column pull-left clearfix">
            <div class="text float_left"><p class="fs_16 font_family_poppins">All Product - Showing <span class="color_black">{{ $pagination['current_page'] }}–{{ ceil($pagination['total']/$pagination['per_page']) }}</span> of <span class="color_black">{{ $pagination['total'] }}</span> Results</p></div>
        </div>
    </div>
    <div class="wrapper grid">
        <div class="shop-grid-content">
            <div class="row clearfix">
                @foreach ($product as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                        <a href="{{ route('landing.product.detail',['product'=>encrypt($item->id)]) }}" class="shop-block-one">
                            <div class="inner-box" >
                                <div class="image-box" style="width: 300px; height: 200px;">
                                    <figure class="image"><img src="{{ asset($item->image_path)}}" alt="" style="width: 300px; height: 200px;"></figure>
                                </div>
                                <div class="lower-content">
                                    <h6>{{ $item->name }}</h6>
                                    <hr>
                                    <h6>{{ $item->series }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>  
                @endforeach
            </div>
        </div>
    </div>
    @if ($pagination['last_page'] != 1)     
    <div class="pagination-wrapper centred mt_30 centred">
        <ul class="pagination clearfix">
            @for ($i = 1; $i <= ceil($pagination['total']/$pagination['per_page']); $i++)
            <li><a href="{{ $pagination['url'].'?page='.$i }}" class="{{ $i == $pagination['current_page'] ? 'current' : '' }} ">{{ $i }}</a>
            @endfor
            <li><a href="{{ $pagination['next_page_url'] }}" class="{{ !$pagination['next_page_url'] ? 'disable' : '' }} "><i class="icon-7"></i></a></li>
        </ul>
    </div>
    @endif

</div>