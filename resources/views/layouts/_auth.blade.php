<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login-Content Management</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('jeremia-assets/brand/logo-small.png') }}" />
    <link href="{{ asset('jeremia-assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('jeremia-assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/icon/logo.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('auth/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('auth/css/fontawesome-all.min.css') }}">
	<!-- Vegas CSS -->
	<link rel="stylesheet" href="{{ asset('auth/css/vegas.min.css') }}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('auth/font/flaticon.css') }}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('auth/style.css') }}">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
	<section class="fxt-template-animation fxt-template-layout29">
		@yield('content')
	</section>

	<!-- jquery-->
	<script src="{{ asset('auth/js/jquery-3.5.0.min.js') }}"></script>
	<!-- Bootstrap js -->
	<script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ asset('auth/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- Vegas js -->
	<script src="{{ asset('auth/js/vegas.min.js') }}"></script>
	<!-- Validator js -->
	<script src="{{ asset('auth/js/validator.min.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ asset('auth/js/main.js') }}"></script>

    <script src="{{ asset('jeremia-assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('jeremia-assets/js/scripts.bundle.js') }}"></script>

</body>

</html>