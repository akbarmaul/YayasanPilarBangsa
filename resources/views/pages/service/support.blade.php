@extends('pages.app')


@section('title')
<title>Pilar Juanda - Sektor Pendukung</title>
@endsection

@section('header')
<header id="header" class="full-header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="{{ route('dashboard')}}" class="standard-logo" data-dark-logo="{{ asset('sources/images/logo-pilar-dark.png')}}"><img src="{{ asset('sources/images/logo-pilar.png')}}" alt="Pilar Juanda Logo"></a>
                <a href="{{ route('dashboard')}}" class="retina-logo" data-dark-logo="{{ asset('sources/images/logo-pilar-dark.png')}}"><img src="{{ asset('sources/images/logo-pilar-dark.png')}}" alt="Pilar Juanda Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                    <li><a href="{{ route('dashboard')}}"><div>Home</div></a></li>
                    <li class="current"><a href="{{ route('service')}}" ><div>Services</div></a>
                        {{-- <ul>
                            <li><a href="#"><div></i>Pilar Juanda</div></a></li>
                            <li><a href="#"><div>Dondo Jaya Perkara</div></a></li>
                            <li><a href="#"><div>C Photo</div></a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('portfolio')}}"><div>Portfolio</div></a></li>
                    <li><a href="{{ route('about')}}"><div>About Us</div></a></li>
                    <li><a href="{{ route('contact')}}"><div>Contact</div></a></li>
                </ul>

                <!-- Top Search
                ============================================= -->
                {{-- <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                    </form>
                </div> --}}
                <!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header>
@endsection

@section('page-title')
<section id="page-title" >

    <div class="container clearfix">
        <h1>Sektor Pendukung</h1>
        <span>Percayakan kontruksi anda pada kami</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Services</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sektor Pendukung</li>
        </ol>
    </div>

</section>
@endsection

@section('content')
<!-- Portfolio Single Gallery
		============================================= -->
		<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix" style="height: 600px;">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image: url('images/portfolio/extended/3.jpg');"></div>
					<div class="swiper-slide" style="background-image: url('images/portfolio/extended/1.jpg');"></div>
					<div class="swiper-slide" style="background-image: url('images/portfolio/extended/4.jpg');"></div>
				</div>
				<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
			</div>

		</section><!-- .portfolio-single-image end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_half">

						<h3>Work Required</h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa repellendus adipisci laborum placeat delectus labore cupiditate deserunt minus numquam consequatur esse, hic at earum illo animi eaque et, dolorem quo qui eos? Quam rerum possimus maxime veniam aut ratione eveniet aliquid cumque aspernatur ipsum libero quaerat, nam. Ad, sunt, error!</p>

					</div>

					<div class="col_half col_last">

						<h3>Our Strategy</h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa repellendus adipisci laborum placeat delectus labore cupiditate deserunt minus numquam consequatur esse, hic at earum illo animi eaque et, dolorem quo qui eos? Quam rerum possimus maxime veniam aut ratione eveniet aliquid cumque aspernatur ipsum libero quaerat, nam. Ad, sunt, error!</p>

					</div>

                </div>
            </div>
		</section>

@endsection