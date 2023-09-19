<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>PPSSI KALTIM - Perkumpulan Praktisi Sentral Sterilisasi Indonesia Kalimantan Timur</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico">
	<!-- Place favicon.ico in the root directory -->

	<!-- ========================= CSS here ========================= -->
	<link rel="stylesheet" href="/assets/css/bootstrap-5.0.5-alpha.min.css">
	<link rel="stylesheet" href="/assets/css/LineIcons.2.0.css">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/tiny-slider.css">
	<link rel="stylesheet" href="/assets/css/main.css">

	<!-- ========================= FA Icon here ========================= -->
	<link rel="stylesheet" href="https://kit.fontawesome.com/0e5d6c0245.css" crossorigin="anonymous">

</head>

<body>

	<!-- ========================= preloader start ========================= -->
	<div class="preloader">
		<div class="loader">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- preloader end -->

    <!-- ========================= Header Content =========================-->
	<header id="home" class="header">
		@include('sections.header')
	</header>    
	<!-- ========================= End Header Content ========================= -->


    <!-- ========================= Blog Content =========================-->
    @yield('blog')
    <!-- ========================= End Blog Content ========================= -->

	<!-- ========================= footer start ========================= -->
	<footer class="footer pt-100 img-bg" style="background-image:url('/assets/img/bg/footer-bg.jpg');">
		<div class="container">
			<div class="footer-widget-wrapper">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-6">
						<div class="footer-widget mb-2">
							<a href="index.html" class="logo"><img src="/assets/img/PPSSIKaltim.png" style="width: 50%" alt=""></a>
							<p>Perkumpulan Praktisi Sentral Sterilisasi Indonesia Kalimantan Timur</p>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-6">
						<div class="footer-widget mb-30">
							<h4>Quick Link</h4>
							<ul class="footer-links">
								<li><a href="/">Home</a></li>
								<li><a href="#about">Profil</a></li>
								<li><a href="#blog">Event</a></li>
								<li><a href="#services">Tentang</a></li>
								{{-- <li><a href="#berita">Blog</a></li> --}}
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12 col-md-7">
						<div class="footer-widget mb-30">
							<h4>PPSSI KALTIM LOKASI</h4>
							<div class="map-canvas">
								<iframe class="map" id="gmap_canvas"
									src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright-area">
				<p class="mb-0 text-center">© Copyright {{ Carbon\Carbon::now()->format('Y') }}. All rights reserved.</p>
			</div>
		</div>
	</footer>
	<!-- ========================= footer end ========================= -->


	<!-- ========================= scroll-top ========================= -->
	<a href="#" class="scroll-top">
		<i class="lni lni-arrow-up"></i>
	</a>

	<!-- ========================= JS here ========================= -->
	<script src="/assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
	<script src="/assets/js/wow.min.js"></script>
	<script src="/assets/js/tiny-slider.js"></script>
	<script src="/assets/js/main.js"></script>

	<!-- ========================= FA Icon here ========================= -->
	<script src="https://kit.fontawesome.com/0e5d6c0245.js" crossorigin="anonymous"></script>
</body>

</html>