@extends('pages.app')


@section('title')
<title>Pilar Juanda - Portfolio</title>
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
                    <li class="current"><a href="{{ route('portfolio')}}"><div>Portfolio</div></a></li>
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
        <h1>Portfolio</h1>
        <span>Beberapa produk yang telah kami buat</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
        </ol>
    </div>

</section>
@endsection

@section('content')
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            

            <div class="clear"></div>

            <!-- Portfolio Items
            ============================================= -->
            <div id="portfolio" class="portfolio grid-container clearfix">

                @if (count($photos) === 0)
                    <div style="text-align: center">
                        <h4>There is no portfolio here</h4>
                    </div>
                @else
                    @foreach($albums as $album)    
                        <article class="portfolio-item {{$album->name}}">
                                    
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
                                    
                        </article>
                    @endforeach
                @endif


            </div><!-- #portfolio end -->

        </div>

    </div>

</section>
@endsection