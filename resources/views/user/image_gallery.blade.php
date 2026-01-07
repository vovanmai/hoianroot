@extends('user.layouts.app')

@section('title', 'Gallery | Hoi An Coffee Making Class and Brewing Experience - HoiAnRoots')

@section('description', 'Explore the vibrant atmosphere of HoiAnRoots through our image gallery, showcasing our coffee, ambiance, and events.')

@section('url', route('gallery'))

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Gallery</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    @include('user.layouts.menu_scroll')

    <!-- Photo Gallery Section Start -->
    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                @foreach($galleries as $index => $gallery)
                <div class="col-lg-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                        <a href="{{ asset('user/images/' . $gallery['url']) }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img loading="lazy" src="{{ asset('user/images/' . $gallery['url']) }}" alt="{{ $gallery['alt'] }}">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                @endforeach
            </div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Photo Gallery Section End -->
@endsection

