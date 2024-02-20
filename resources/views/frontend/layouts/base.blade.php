<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>@yield('title') Avairra Website</title>
<link rel="icon" href="{{ asset('assets/icon/logo.png') }}" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
@yield('styles')
</head>


<body>
    <div class="boxed_wrapper">
        {{-- Loader --}}
        @include('frontend.components.loader')
        {{-- Search --}}
        @include('frontend.components.search')
        {{-- Header --}}
        @include('frontend.components.header')
        {{-- Toolbar --}}
        @yield('toolbar')
        {{-- Content --}}
        @yield('content')
        {{-- Footer --}}
        @include('frontend.components.footer')
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
        
    </div>

    {{-- JS --}}
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
    <script src="{{ asset('easton/js/script.js')}}"></script>
    <script src="{{ asset('easton/js/jquery.bootstrap-touchspin.js')}}"></script>
    @yield('script')
</body>
</html>
