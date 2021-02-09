<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>InfoSys</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="{{asset('frontend_assets/img/favicon/favicon.png')}}" rel="icon">
	<link href="{{asset('frontend_assets/img/favicon/apple-touch-icon.png')}}" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="{{asset('frontend_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend_assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend_assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend_assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend_assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend_assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
	<link href="{{asset('frontend_assets/vendor/aos/aos.css')}}" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="{{asset('frontend_assets/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('frontend_assets/css/style2.css')}}" rel="stylesheet">
</head>

<body>

	<header id="header" class="fixed-top ">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-9 d-flex align-items-center justify-content-between nav-c">
					<!-- <h1 class="logo"><a href="index.html">Infosys</a></h1> -->

					<a href="index.html" class="logo">
						<img src="{{asset('frontend_assets/img/logo/farjax.png')}}" alt="">
					</a>

					<nav class="nav-menu d-none d-lg-block">
						<ul>
							<li class="active"><a href="#hero">Home</a></li>
							<li><a href="#about">About Farjax</a></li>
							<li><a href="#services">Service</a></li>
							<li><a href="#careers">Platform</a></li>
							<li><a href="#contact">Contact</a></li>

						</ul>
					</nav><!-- .nav-menu -->

					<a href="{{ route('login') }}" class="get-started-btn scrollto">Login</a>
				</div>
			</div>

		</div>
	</header><!-- End Header -->



		<main id="main">

	@yield('content')

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
	

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>Farjax</span></strong>. All Rights Reserved
			</div>
			
		</div>
	</footer><!-- End Footer -->

	<!-- <div id="preloader"></div> -->
	<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

	<!-- Vendor JS Files -->
	<script src="{{asset('frontend_assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('frontend_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('frontend_assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
	<script src="{{asset('frontend_assets/vendor/php-email-form/validate.js')}}"></script>
	<script src="{{asset('frontend_assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend_assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('frontend_assets/vendor/venobox/venobox.min.js')}}"></script>
	<script src="{{asset('frontend_assets/vendor/aos/aos.js')}}"></script>

	<!-- Template Main JS File -->
	<script src="{{asset('frontend_assets/js/main.js')}}"></script>
	<script>
		function redirectC(){
			window.location.href = "";
		}
	</script>

</body>

</html>