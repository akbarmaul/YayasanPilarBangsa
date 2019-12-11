@extends('pages.app')


@section('title')
<title>Pilar Juanda - Services</title>
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
        <h1>Services</h1>
        <span>Percayakan kontruksi anda pada kami</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ol>
    </div>

</section>
@endsection

@section('content')
<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">
            
            <div class="heading-block center">
                <h2>Kami <span>Pilar Juanda</span></h2>
                <span>Beberapa service kami dalam sektor kontruksi</span>
            </div>

            <div class="col_one_third">
                <div class="feature-box fbox-rounded fbox-effect">
                    <div class="fbox-icon">
                        <a href="{{route('service.konstruksi')}}"><i class="icon-thumbs-up i-alt"></i></a>
                    </div>
                    <h3>Kontruksi Bangunan</h3>
                    <p>Kami siap membangun bersama anda. <br> Menciptakan bangunan yang kokoh, kuat dan siap pakai.</p>
                </div>
            </div>

            <div class="col_one_third">
                <div class="feature-box fbox-rounded fbox-effect">
                    <div class="fbox-icon">
                        <a href="{{route('service.mekanikal')}}"><i class="icon-thumbs-up i-alt"></i></a>
                    </div>
                    <h3>Mekanikal dan Elektrikal</h3>
                    <p>Siap mendukung pembangunan yang memerlukan sistem mekanis dan sistem tenaga listrik.</p>
                </div>
            </div>

            <div class="col_one_third col_last">
                <div class="feature-box fbox-rounded fbox-effect">
                    <div class="fbox-icon">
                        <a href="{{route('service.tailor')}}"><i class="icon-thumbs-up i-alt"></i></a>
                    </div>
                    <h3>Tailor</h3>
                    <p>Kami didukung alat yang telah memenuhi standar dan jasa jahit kami dikerjakan oleh tenaga kerja yang ahli dalam bidangnya.</p>
                </div>
            </div>

            <div class="clear"></div>

            <div class="col_one_third nobottommargin">
                <div class="feature-box fbox-rounded fbox-effect">
                    <div class="fbox-icon">
                        <a href="{{route('service.ti')}}"><i class="icon-thumbs-up i-alt"></i></a>
                    </div>
                    <h3>Teknologi Informasi</h3>
                    <p>Kami siap mengembangkan kontruksi anda dengan teknologi terkini.</p>
                </div>
            </div>

            <div class="col_one_third nobottommargin">
                <div class="feature-box fbox-rounded fbox-effect">
                    <div class="fbox-icon">
                        <a href="{{route('service.welding')}}"><i class="icon-thumbs-up i-alt"></i></a>
                    </div>
                    <h3>Welding</h3>
                    <p>Pengelasan besi? Kami berani menghasilkan yang terbaik dari yang lain.</p>
                </div>
            </div>

            <div class="col_one_third nobottommargin col_last">
                <div class="feature-box fbox-rounded fbox-effect">
                    <div class="fbox-icon">
                        <a href="{{route('service.support')}}"><i class="icon-thumbs-up i-alt"></i></a>
                    </div>
                    <h3>Sektor Pendukung</h3>
                    <p>Kami siap mendukung segala macam pembangunan baik besar maupun kecil.</p>
                </div>
            </div>




            
        </div>
        
    </div>
    
</section>
@endsection