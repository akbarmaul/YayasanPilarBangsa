@extends('layouts.app')


@section('title')
<title>Pilar Juanda - Blog</title>
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
                    <li><a href="{{ route('pilar.service')}}" ><div>Services</div></a>
                        {{-- <ul>
                            <li><a href="#"><div></i>Pilar Juanda</div></a></li>
                            <li><a href="#"><div>Dondo Jaya Perkara</div></a></li>
                            <li><a href="#"><div>C Photo</div></a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('pilar.portfolio')}}"><div>Portfolio</div></a></li>
                    <li class="current"><a href="{{ route('pilar.blog')}}"><div>Blog</div></a></li>
                    <li><a href="{{ route('pilar.about')}}"><div>About Us</div></a></li>
                    <li><a href="{{ route('pilar.contact')}}"><div>Contact</div></a></li>
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
        <h1>Blog</h1>
        <span>Showcase of Our Awesome Works in 1 Column</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </div>

</section>
@endsection