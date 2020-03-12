<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Medilab Free Bootstrap HTML5 Template</title>

	<!-- CSRF Token -->	
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="description" content="Prueba de varias cositas...">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="col-md-12">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class=""><a href="#banner">Home</a></li>
						<li class=""><a href="#service">Services</a></li>
						<li class=""><a href="#about">About</a></li>
						<li class=""><a href="#contactpepe">Testimonial</a></li>
						<li class=""><a href="#contactlala">Contact 123</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<main>
		<!-- Bloque creado por Lucas -->
		<section id="contact">
			<div class="container">
				<div class="row">
					@yield('cuerpo')
				</div>
			</div>
		</section>
	</main>

	
	<footer id="footer">
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 marb20">
						<div class="ftr-tle">
							<h4 class="white no-padding">About Us</h4>
						</div>
						<div class="info-sec">
							<p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 marb20">
						<div class="ftr-tle">
							<h4 class="white no-padding">Quick Links</h4>
						</div>
						<div class="info-sec">
							<ul class="quick-info">
								<li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
								<li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
								<li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 marb20">
						<div class="ftr-tle">
							<h4 class="white no-padding">Follow us</h4>
						</div>
						<div class="info-sec">
							<ul class="social-icon">
								<li class="bglight-blue"><i class="fa fa-facebook"></i></li>
								<li class="bgred"><i class="fa fa-google-plus"></i></li>
								<li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
								<li class="bglight-blue"><i class="fa fa-twitter"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-line">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						© Copyright Medilab Theme. All Rights Reserved
						<div class="credits">
							Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/ footer-->

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
	<script src="{{ asset('js/contactform.js') }}"></script>
</body>

</html>