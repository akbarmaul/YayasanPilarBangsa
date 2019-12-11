@extends('pages.app')


@section('title')
<title>Pilar Juanda - Home</title>
@endsection

@section('header')
<header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark">

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
                    <li class="current"><a href="{{ route('dashboard')}}"><div>Home</div></a></li>
                    <li><a href="{{ route('service')}}" ><div>Services</div></a>
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
<!-- #header end -->

<!-- background image Header -->

<section id="slider" class="slider-element slider-parallax full-screen force-full-screen with-header swiper_wrapper page-section clearfix">

    <div class="slider-parallax-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('{{ asset('sources/images/slider/swiper/a1.jpg')}}');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-caption-animate="fadeInUp">Kualitas Terbaik</h2>
                            <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Perusahaan kami mengutamakan kualitas, mutu dan harga terjangkau untuk para pelanggan kami.</p>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide dark" style="background-image: url('{{ asset('sources/images/slider/swiper/a2.jpg')}}');">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 data-caption-animate="fadeInUp" style="color: white" >Efisien</h2>
                            <p class="d-none d-sm-block dark" data-caption-animate="fadeInUp" data-caption-delay="200">Kami bekerja dengan efisien tanpa <br> menurunkan kualitas produk kami.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide dark" style="background-image: url('{{ asset('sources/images/slider/swiper/a3.jpg')}}'); background-position: center top;">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 data-caption-animate="fadeInUp">Consultan Model</h2>
                            <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Mendesain model produk sebelum dibuat, sesuai kesepakatan dengan pelanggan kami terhormat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
            
        </div>

    </div>

</section>
<!-- bacnkground end -->
@endsection

@section('content')
<section id="content">

    <div class="content-wrap">

        <!-- Little Description -->
        <section id="section-about" class="page-section" style="padding-bottom: 80px">

            <div class="container clearfix">

                <div class="heading-block center">
                    <h2>Kami <span>Pilar Juanda</span></h2>
                    <span>Perusahaan konstruksi besi dengan  mengutamakan kualitas, mutu, dan harga terjangkau.</span>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img src="{{ asset('sources/images/services/a.jpg')}}" alt="Kenapa memilih kami?">
                        </div>
                        <div class="fbox-desc">
                            <h3>Kenapa memilih kami.<span class="subtitle">Karna kami dapat diandalkan</span></h3>
                            <p>Kami selalu menghadirkan produk berkualitas. Dengan didukung tenaga kerja ahli dan bahan baku terbaik yang kami punya.</p>
                        </div>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img src="{{ asset('sources/images/services/b.jpg')}}" alt="Kenapa memilih kami?">
                        </div>
                        <div class="fbox-desc">
                            <h3>Renovasi produk<span class="subtitle">Lebih baik kenapa tidak?</span></h3>
                            <p>Memperbaiki konstruksi menjadi tampak seperti baru, bahkan lebih baik!</p>
                        </div>
                    </div>
                </div>

                <div class="col_one_third nobottommargin col_last">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img src="{{ asset('sources/images/services/c.jpg')}}" alt="Kenapa memilih kami?">
                        </div>
                        <div class="fbox-desc">
                            <h3>Segala Bidang Konstruksi<span class="subtitle">Dari luar hingga ke dalam</span></h3>
                            <p>Membuat bahkan memperbaiki, kami hadir dengan tanggung jawab sesuai dengan permintaan pelanggan.</p>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

            </div>
            
        </section>
        <!-- End Little Description-->

        <!-- section services-->
        <section id="section-services" class="page-section topmargin-lg">

            <div class="section header-stick">
                <div class="container clearfix">
                    <div class="row">

                        <div class="col-lg-9">
                            <div class="heading-block bottommargin-sm">
                                <h3>Percayakan konstruksi pada kami</h3>
                            </div>

                            <p class="nobottommargin">Kami bergerak dalam beberapa sektor industri khususnya konstruksi dan telah terpercaya lebih dari satu tahun. Menghadirkan inovasi-inovasi terkini dalam dunia industri Indonesia.</p>
                        </div>

                        <div class="col-lg-3">
                            <a href="{{ route('service')}}" class="button button-3d button-dark button-large btn-block center" style="margin-top: 30px;">Kenali Lebih dalam</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end section services-->

        <!-- section portfolio -->
        <section id="section-portfolio" class="page-section topmargin-lg">
            
            <div class="container clearfix">

                    <div class="heading-block center">
                        <h3>Beberapa <span>Portfolio</span> Kami</h3>
                        <span>Kami telah menghasilkan produk-produk terbaik di bidang konstruksi.</span>
                    </div>

                    @if (count($photos) === 0)
                        <div style="text-align: center">
                            <h4>There is no portfolio here</h4>
                        </div>
                    @else
                        <div id="oc-portfolio" class="owl-carousel portfolio-carousel portfolio-nomargin carousel-widget" data-margin="1" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">
                            @foreach($albums as $album)
                            <div class="oc-item">
                                <div class="iportfolio">
                                    
                                    <div class="portfolio-image">
                                        
                                        @if(count($album->photo) > 0)
                                            <img class="img-pt" src="storage/image/portfolio/{{$album->name}}/{{$album->photo->random()->photo}}" alt="{{$album->name}}">
                                        @endif
                                        
                                        @if(count($album->photo) == 1)
                                            
                                            <div class="portfolio-overlay">
                                                @foreach($photos as $pho)
                                                    @if($pho->album_id == $album->id)
                                                    <a href="storage/image/portfolio/{{$album->name}}/{{$pho->photo}}" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                    @endif
                                                @endforeach
                                                
                                            </div>
                                            
                                        
                                        @elseif(count($album->photo) > 1)
                                            <div class="portfolio-overlay" data-lightbox="gallery">
                                                
                                                <a href="storage/image/portfolio/{{$album->name}}/{{$album->photo->random()->photo}}" class="center-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                                @foreach($photos as $pho)
                                                    @if($pho->album_id == $album->id)
                                                        <a href="storage/image/portfolio/{{$album->name}}/{{$pho->photo}}" class="hidden" data-lightbox="gallery-item"></a>
                                                    @endif
                                                @endforeach
                                                
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <div class="portfolio-desc">
                                        <h3>{{$album->name}}</h3>
                                        {{-- <span><a href="#">{{$photo->album->name}}</a></span> --}}
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif

                </div>
            
            </div>
            
        </section>
        <!-- end section portfolio -->

    </div>

</section><!-- #content end -->
@endsection