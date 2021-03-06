<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lara Store | @yield('title', '')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	@yield('extra-css')
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
    @include('layouts.partials.nav')
    @include('inc.messages')
    @yield('content')
    
	@include('layouts.partials.subscribe')
    @include('layouts.partials.footer')		

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('js/magnific-popup-options.js')}}"></script>
	<!-- Date Picker -->
	<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js')}}"></script>
	
	@yield('extra-js')
	</body>
</html>

