
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('sources/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('sources/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('sources/pt-style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('sources/css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('sources/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('sources/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('sources/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('sources/css/magnific-popup.css')}}" type="text/css" />

	
	<link rel="stylesheet" href="{{ asset('sources/css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('sources/logo-pilar.ico')}}">
	<link rel="shortcut icon" href="{{asset('sources/logo_pilar.ico')}}">
	@yield('title')
	

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		@yield('header')

		<!-- #header end -->

		
		<!-- Page Title
		============================================= -->
		@yield('page-title')
		<!-- #page-title end -->


		<!-- Content
		============================================= -->

		@yield('content')

		<!-- Footer
		============================================= -->

		<footer id="footer" class="dark" style="background: url('{{ asset('sources/images/footer-bg.jpg')}}') repeat; background-size: cover;">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_one_third">

						{{-- <img src="{{ asset('sources/images/footer-logo-pilar.png')}}" alt="" class="alignleft footer-logo" style="max-width: 50%; position: relative; top: -30px; margin-top: 8px; padding-right: 18px; "> --}}

						<div class="widget clearfix">

							<img src="{{ asset('sources/images/footer-logo-pilar.png')}}" alt="Footer Logo" class="footer-logo" style="max-width: 50%; position: relative; top: -10px;">

							<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%; ">
								<address>
									<strong>Headquarters:</strong><br>
									Bumi Antang Permai Blok IV No.88 <br>
									Makassar<br>
								</address>
								<abbr title="Phone Number"><strong>Phone:</strong></abbr> (0411) 493236<br>
								<abbr title="Mobile Phone"><strong>Mobile Phone:</strong></abbr> 085394067172 <br>
								<abbr title="Whatsapp"><strong>Whatsapp:</strong></abbr> 085394067172<br>
								<abbr title="Email Address"><strong>Email:</strong>info@pilarjuanda.com</abbr> 
							</div>

						</div>
	

					</div>

					<div class="col_two_third col_last">

						<div class="widget clearfix">

							<p>Menjadi yayasan <strong>Berkualitas</strong> dan <strong>Bermutu</strong> dengan <strong>Standar</strong>, untuk membangun peradaban bangsa.</p>

							<div class="line" style="margin: 30px 0;"></div>

							<div class="row">

								<div class="col-lg-3 col-6 bottommargin-sm widget_links">
									<ul>
										<li><a href="{{route('dashboard')}}">Home</a></li>
										<li><a href="{{route('service')}}">Service</a></li>
										<li><a href="{{route('portfolio')}}">Portfolio</a></li>
										
									</ul>
								</div>

								<div class="col-lg-3 col-6 bottommargin-sm widget_links">
									<ul>
										<li><a href="{{route('about')}}">About Us</a></li>
										<li><a href="{{route('contact')}}">Contact</a></li>
										<li><a href="{{route('service.konstruksi')}}">Konstruksi Bangunan</a></li>
										
										
									</ul>
								</div>

								<div class="col-lg-3 col-6 bottommargin-sm widget_links">
									<ul>
										<li><a href="{{route('service.mekanikal')}}">Mekanikal Elektrikal</a></li>
										<li><a href="{{route('service.tailor')}}">Tailor</a></li>
										<li><a href="{{route('service.ti')}}">Teknologi Informasi</a></li>
										
									</ul>
								</div>

								<div class="col-lg-3 col-6 bottommargin-sm widget_links">
									<ul>
										<li><a href="{{route('service.welding')}}">Welding</a></li>
										<li><a href="{{route('service.support')}}">Sektor Pendukung</a></li>
									</ul>
								</div>

							</div>

						</div>

					</div>

					

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half copyrights-menu copyright-links">
						<div class="clearfix">
							<a href="{{ route('dashboard')}}">Home</a>/<a href="{{ route('service')}}">Services</a>/<a href="{{ route('portfolio')}}">Portfolio</a>/<a href="{{ route('about')}}">About</a>/<a href="{{ route('contact')}}">Contact</a>
						</div>
						{{-- Copyrights &copy; 2018 All Rights Reserved by <a href="http://ayaide.com" target="blank" style="margin-left: 0;">Ayaide.com</a> --}}
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="https://www.facebook.com/pilar.juanda" target="blank" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="https://www.instagram.com/pilar.juanda/?hl=en" target="blank" class="social-icon si-small si-borderless nobottommargin si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>

							{{-- <a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a> --}}

						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer>
		
		<!-- #footer end -->


	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('sources/js/jquery.js')}}"></script>
	<script src="{{ asset('sources/js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('sources/js/functions.js')}}"></script>

</body>
</html>