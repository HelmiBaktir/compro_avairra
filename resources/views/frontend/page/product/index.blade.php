@extends('frontend.layouts.base')
@section('title', 'Product -')
@section('toolbar')

@include('frontend/components/toolbar',['title' => 'Our Shop','backgroundImage' => asset('background/product.jpg')])

@endsection

@section('content')
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
                                <input id="search-field" type="search" name="search-field" placeholder="Search Product"
                                    required="">
                                <button type="buttom"><i class="icon-63"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="category-widget sidebar-widget">
                        <div class="widget-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                <li><button onclick="getProduct('all')"><i class="icon-7"></i>All Product ({{
                                        $productCount }})</button></li>
                                @foreach ($categories as $item)
                                <li><button onclick="getProduct({{ $item->id }})"><i class="icon-7"></i>{{ $item->name
                                        }} ({{ $item->products_count }})</button></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 cols-sm-12 content-side" id="content-side-data">
                <div class="spinner-border text-success" role="status">
                </div>
            </div>

        </div>
    </div>
</section>


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
@endsection

@section('script')
<script>
    function getProduct(category){
        $('#content-side-data').html(`<div class="spinner-border text-success" role="status"></div>`);
        let url = "{{ route('landing.product.data',['category'=>':category']) }}".replace(':category',category)
            $.ajax({
                url: url,
                method: "GET",
                success: function(response) {
                    if (response.status == 'success') {
                        $('#content-side-data').html("");
                        $('#content-side-data').html(response.msg);
                    } else {
                        Swal.fire({
                            title: response.msg,
                            icon: 'error',
                            confirmButtonText: "Oke"
                        })
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: response.msg,
                        icon: 'error',
                        confirmButtonText: "Oke"
                    })
                }
            });
            
    }
    getProduct('all')
</script>

<script>
    $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            $('#content-side-data').html(`<div class="spinner-border text-success" role="status"></div>`);
            var url = $(this).attr('href');
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#content-side-data').html("");
                    $('#content-side-data').html(response.msg);
                    $('.scroll-bar-text').click();
                },
                error: function(xhr, status, error) {

                }
            });
        });

        $('#search-field').on('input', function() {
            $query = $(this).val();
            $('#content-side-data').html(`<div class="spinner-border text-success" role="status"></div>`);
            let act = '{{ route("landing.product.search") }}'
                let form_data = new FormData();
                form_data.append('_token', '{{ csrf_token() }}')
                form_data.append('query', $query)

                $.ajax({
                    url: act
                    , type: "POST"
                    , data: form_data
                    , dataType: "json"
                    , contentType: false
                    , processData: false
                    , success: function(data) {
                        if (data.status == "success") {
                            $('#content-side-data').html("");
                            $('#content-side-data').html(data.msg);

                        } else {
                            $('#content-side-data').html(`<div class="spinner-border text-success" role="status"></div>`);
                            $('#content-side-data').html("Not Found");
                        }
                    }
                })
        });


</script>
@endsection