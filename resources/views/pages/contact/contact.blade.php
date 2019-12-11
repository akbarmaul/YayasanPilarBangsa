@extends('pages.app')


@section('title')
<title>Pilar Juanda - Contact</title>
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
                    <li><a href="{{ route('about')}}"><div>About Us</div></a></li>
                    <li class="current"><a href="{{ route('contact')}}"><div>Contact</div></a></li>
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
        <h1>Contact</h1>
        <span>Informasi mengenai kontak kami</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </div>

</section>
@endsection

@section('content')
<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">
            <div class="col_two_fifth nobottommargin" style="min-height: 250px; margin-top: 10px;">
                {{-- <canvas id="chart-doughnut"></canvas> --}}
                <div class="fbox-media">
                    <img src="{{ asset('sources/images/services/step-order.jpg')}}" alt="Why choose Us?">
                </div>
                

            </div>

            
            <div class="col_three_fifth nobottommargin col_last">

                <div class="heading-block">
                    <h3>Lebih Dekat dengan kami</h3>
                    <span>Kenali lebih dekat dan mulai sesuatu yang lebih baik bersama kami. 
                        Untuk pemesanan produk, kalian dapat menghubungi kami melalui telepon/email pada perusahaan kami.</span>
                </div>

                <p>Jika kalian ingin mengetahui informasi tentang kami lebih lanjut? Hubungi kami di: </p>

                <div>
                    <address style="float: left; margin-right: 50px;">
                        <strong>Headquarters:</strong><br>
                        Jl. Bumi Antang Permai Blok IV,<br>
                        No. 88, Makassar-Indonesia<br>
                    </address>
                    <div style=" float: left; margin-bottom: 30px">
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (0411) 493-236<br>
                        <abbr title="Mobile Phone"><strong>Mobil Phone:</strong></abbr> 0853 9406 7172<br>
                        <abbr title="Whatsapp"><strong>Whatsapp:</strong></abbr> 085394067172<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr> info@pilarjuanda.com
                    </div>
                    
                </div>
                
            </div>

            
        </div>
    </div>
</section>

@endsection