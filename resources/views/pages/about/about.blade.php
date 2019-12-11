@extends('pages.app')


@section('title')
<title>Pilar Juanda - About Us</title>
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
                    <li><a href="{{ route('service')}}" ><div>Services</div></a>
                        {{-- <ul>
                            <li><a href="#"><div></i>Pilar Juanda</div></a></li>
                            <li><a href="#"><div>Dondo Jaya Perkara</div></a></li>
                            <li><a href="#"><div>C Photo</div></a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('portfolio')}}"><div>Portfolio</div></a></li>
                    <li class="current"><a href="{{ route('about')}}"><div>About Us</div></a></li>
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
<section id="page-title">

    <div class="container clearfix">
        <h1>About US</h1>
        <span>Lebih dekat dengan kami</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </div>

</section>
@endsection

@section('content')
<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">
            <div class="col_full">

                <div class="heading-block center nobottomborder">
                    <h2>PT. Pilar Juanda</h2>
                    <span>Merupakan perusahaan yang didirikan sejak tahun 2017 dan bergerak dalam beberapa sektor kontruksi.</span>
                </div>

                <div class="fslider" data-pagi="false" data-animation="fade">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide"><a href="#"><img src="{{ asset('sources/images/about/a.jpg')}}" alt="About Image"></a></div>
                            <div class="slide"><a href="#"><img src="{{ asset('sources/images/about/b.jpg')}}" alt="About Image"></a></div>
                            <div class="slide"><a href="#"><img src="{{ asset('sources/images/about/c.jpg')}}" alt="About Image"></a></div>
                            <div class="slide"><a href="#"><img src="{{ asset('sources/images/about/d.jpg')}}" alt="About Image"></a></div>
                        </div>
                    </div>
                </div>

            </div>

        

            <div class="col_one_third">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                    <h4>Sejarah<span> Berdiri</span>.</h4>
                </div>

                <p>Didirikan oleh Bapak Multasim Juanda. Pilar Juanda merupakan inkubasi bisnis dari Yayasan Pilar Bangsa (YPB) dan diharapkan dapat menjadi wadah bagi para peserta didik untuk tenaga kerja terampil.</p>

            </div>

            <div class="col_one_third">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                    <h4>Sejarah <span>YPB</span>.</h4>
                </div>

                <p>YPB adalah sebuah yayasan yang mengusung konsep pengembangan soft-skills for good human resources serta pelestarian lingkungan dan berdiri pada tahun 2003. Yayasan Pilar Bangsa (YPB) terletak di Kota Makassar - Provinsi  Sulawesi Selatan – Indonesia.</p>

            </div>

            <div class="col_one_third col_last">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                    <h4>Visi &amp; <span>Misi</span>.</h4>
                </div>

                <p>Visi dan Misi kami adalah menjadi yayasan berkualitas dan bermutu dengan standar. Untuk membangun peradaban bangsa.</p>

            </div>

        </div>

    </div>
</section>

@endsection