@extends('user.layouts.app')

@section('title', 'About Us | Hoi An Coffee Making Class and Brewing Experience - HoiAnRoots')

@section('url', route('about'))

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">About us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    @include('user.layouts.greeting_scroll')

    <!-- About us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">The Bamboo- A cozy little café by the river — a place to relax, explore, and connect</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Body List Start -->
                        <div class="about-body-list">
                            <!-- About Body Item Start -->
                            <div class="about-body-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ asset('user/images/icon-about-body-item-1.svg') }}" alt="Traditional Coffee Brewing Classes">
                                </div>
                                <div class="about-body-list-content">
                                    <h3>Traditional Coffee Brewing Classes</h3>
                                    <p>Come and experience our community-based tourism model — make your visit truly special!</p>
                                </div>
                            </div>
                            <!-- About Body Item End -->

                            <!-- About Body Item Start -->
                            <div class="about-body-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('user/images/icon-about-body-item-2.svg') }}" alt="Refreshing Drinks & Local Treats">
                                </div>
                                <div class="about-body-list-content">
                                    <h3>Refreshing Drinks & Local Treats</h3>
                                    <p>Sip on cool, refreshing drinks and savor tasty local favorites that bring you the true flavors of our hometown..</p>
                                </div>
                            </div>
                            <!-- About Body Item End -->
                        </div>
                        <!-- About Body List End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.6s">
                            <!-- About Button Start -->
                            <div class="about-btn">
                                <a href="{{ route('contact') }}" class="btn-default">Contact us</a>
                            </div>
                            <!-- About Button End -->

                            <!-- Video Play Button Start -->
                            {{-- <div class="video-play-button">
                                <a href="https://www.youtube.com/watch?v=22zSd8GXA1A" class="popup-video" data-cursor-text="Play">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                                <p>watch video</p>
                            </div> --}}
                            <!-- Video Play Button End -->
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About us Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-us-image">
                        <!-- About Us Image Start -->
                        <div class="about-us-img">
                            <figure class="image-anime">
                                <img src="{{ asset('user/images/about-us.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- About Us Image End -->

                        <!-- Opening Time Box Start -->
                        <div class="opening-time-box">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Opening Time Content Start -->
                            <div class="opening-time-content">
                                <h3>Open hours</h3>
                                <ul>
                                    <li>Everyday<span style="padding-left: 10px">09:00 - 18:00</span></li>
                                </ul>
                            </div>
                            <!-- Opening Time Content End -->
                        </div>
                        <!-- Opening Time Box End -->
                    </div>
                    <!-- About Us Image End -->
                </div>
            </div>
        </div>
    </div>

    <div class="about-activity light-bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about activity</h3>
                        </div>
                        <!-- Section Title End -->

                        <div class="about-body-list">
                            <!-- About Body Item Start -->
                            <div class="about-body-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ asset('user/images/calendar-check.svg') }}" alt="">
                                </div>
                                <div class="about-body-list-content">
                                    <h3>Free cancellation</h3>
                                    <p>Book with confidence! Change your plans anytime without extra charges.</p>
                                </div>
                            </div>
                            <!-- About Body Item End -->

                            <!-- About Body Item Start -->
                            <div class="about-body-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('user/images/calendar-clock.svg') }}" alt="">
                                </div>
                                <div class="about-body-list-content">
                                    <h3>Reserve now and pay later</h3>
                                    <p>Keep your travel plans flexible - book your spot now and pay nothing today.</p>
                                </div>
                            </div>

                            <div class="about-body-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('user/images/clock-fading.svg') }}" alt="">
                                </div>
                                <div class="about-body-list-content">
                                    <h3>Duration 2 - 2,5 hours</h3>
                                    <p>Check availability to see starting times.</p>
                                </div>
                            </div>

                            <div class="about-body-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('user/images/flag.svg') }}" alt="">
                                </div>
                                <div class="about-body-list-content">
                                    <h3>Instructor</h3>
                                    <p>English, Vietnamese.</p>
                                </div>
                            </div>

                            <div class="about-body-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('user/images/users.svg') }}" alt="">
                                </div>
                                <div class="about-body-list-content">
                                    <h3>Small group</h3>
                                    <p>2 - 7 participants.</p>
                                </div>
                            </div>
                            <!-- About Body Item End -->
                        </div>

                    </div>
                    <!-- About us Content End -->
                </div>
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="activity-images">
                        <div class="row activity-items">
                            <div class="col-lg-6 col-6">
                                <div class="activity-image wow fadeInUp" data-wow-delay="0.2s">
                                    <a href="{{ asset('user/images/hoi-an-coffee-making-class-activity-1.jpeg') }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img loading="lazy" src="{{ asset('user/images/hoi-an-coffee-making-class-activity-1.jpeg') }}" alt="Hoi an coffee making class activity">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="activity-image wow fadeInUp" data-wow-delay="0.2s">
                                    <a href="{{ asset('user/images/hoi-an-coffee-making-class-activity-2.jpeg') }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img loading="lazy" src="{{ asset('user/images/hoi-an-coffee-making-class-activity-2.jpeg') }}" alt="Hoi an coffee making class activity">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="activity-image wow fadeInUp" data-wow-delay="0.2s">
                                    <a href="{{ asset('user/images/hoi-an-coffee-making-class-activity-3.webp') }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img loading="lazy" src="{{ asset('user/images/hoi-an-coffee-making-class-activity-3.webp') }}" alt="Hoi an coffee making class activity">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="activity-image wow fadeInUp" data-wow-delay="0.2s">
                                    <a href="{{ asset('user/images/hoi-an-coffee-making-class-activity-4.webp') }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img loading="lazy" src="{{ asset('user/images/hoi-an-coffee-making-class-activity-4.webp') }}" alt="Hoi an coffee making class activity">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Us Image End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">why choose us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Where flavor meets comfort and services</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Button Start -->
                        <div class="why-choose-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="{{ url('/contact') }}" class="btn-default">contact us</a>
                        </div>
                        <!-- Why Choose Button End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Why Choose List Start -->
                    <div class="why-choose-list wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-why-choose-1.svg') }}" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>Riverside Experience</h3>
                                <p>Learn coffee brewing right by the peaceful riverside, where every cup tells a cultural story of Hoi An.100% Handcrafted Brewing. No machines – only traditional tools and skilled hands to preserve the authentic flavor.</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-why-choose-2.svg') }}" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>Premium Vietnamese Coffee</h3>
                                <p>We use only ground coffee carefully selected from Vietnam’s most reputable brands.</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-why-choose-3.svg') }}" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>Fast & Fun Learning</h3>
                                <p>Enjoy a lively class where you can master brewing skills in just a short session.</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-why-choose-4.svg') }}" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>Friendly Atmosphere</h3>
                                <p>Small, interactive groups so you feel comfortable and connected while learning.</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-why-choose-5.svg') }}" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>Refreshing Drinks & Local Treats</h3>
                                <p>Sip on cool, refreshing drinks and savor tasty local favorites that bring you the true flavors of our hometown.</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-why-choose-6.svg') }}" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>Free WIFI</h3>
                                <p>Share your unique coffee-making moments instantly with friends and family.</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Our Approach Section Start -->
    <div class="our-approach light-bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Approach Content Start -->
                    <div class="our-approach-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our approach</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Crafting the perfect coffee experience</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Mission Vision List Start -->
                        <div class="mission-vision-list">
                            <!-- Mission Vision Item Start -->
                            <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ asset('user/images/icon-our-mission.svg') }}" alt="">
                                </div>
                                <div class="mission-vision-content">
                                    <h3>our mission</h3>
                                    <p>Our mission is to deliver exceptional coffee crafted with the finest beans care, providing a rich experience that celebrates quality.</p>
                                </div>
                            </div>
                            <!-- Mission Vision Item End -->

                            <!-- Mission Vision Item Start -->
                            <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('user/images/icon-our-vision.svg') }}" alt="">
                                </div>
                                <div class="mission-vision-content">
                                    <h3>our vision</h3>
                                    <p>Our vision is to inspire a love for coffee by crafting rich, high-quality experiences that bring people together.</p>
                                </div>
                            </div>
                            <!-- Mission Vision Item End -->

                            <!-- Mission Vision Item Start -->
                            <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('user/images/icon-our-value.svg') }}" alt="">
                                </div>
                                <div class="mission-vision-content">
                                    <h3>our value</h3>
                                    <p>Our values are built on passion, quality, and sustainability, focusing on ethical sourcing and excellence in every cup.</p>
                                </div>
                            </div>
                            <!-- Mission Vision Item End -->
                        </div>
                        <!-- Mission Vision List End -->
                    </div>
                    <!-- Our Approach Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Approach Image Start -->
                    <div class="our-approach-image">
                        <figure class="image-anime">
                            <img src="{{ asset('user/images/our-approach.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Our Approach Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <!-- Intro Video Content Start -->
                    <div class="intro-video-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our journey of success</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Our coffee class adventure</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Intro Video Content End -->
                </div>

                {{-- <div class="col-lg-6 col-md-4">
                    <!-- Intro Video Box Start -->
                    <div class="intro-video-box about-intro-video wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="https://www.youtube.com/watch?v=22zSd8GXA1A" class="popup-video" data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a>
                            <p>watch video</p>
                        </div>
                        <!-- Video Play Button End -->
                    </div>
                    <!-- Intro Video Box End -->
                </div> --}}
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Intro Video Counters Start -->
                    <div class="intro-video-counters">
                        <!-- Video Counter Item Start -->
                        <div class="video-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-intro-video-counter-1.svg') }}" alt="">
                            </div>
                            <div class="video-counter-content">
                                <h2><span class="counter">100</span>+</h2>
                                <p>daily visitors</p>
                            </div>
                        </div>
                        <!-- Video Counter Item End -->

                        <!-- Video Counter Item Start -->
                        <div class="video-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-intro-video-counter-3.svg') }}" alt="">
                            </div>
                            <div class="video-counter-content">
                                <h2><span class="counter">70</span>+</h2>
                                <p>events hosted</p>
                            </div>
                        </div>
                        <!-- Video Counter Item End -->

                        <!-- Video Counter Item Start -->
                        <div class="video-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-intro-video-counter-4.svg') }}" alt="">
                            </div>
                            <div class="video-counter-content">
                                <h2><span class="counter">500</span>+</h2>
                                <p>happy customer</p>
                            </div>
                        </div>
                        <!-- Video Counter Item End -->
                    </div>
                    <!-- Intro Video Counters End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials parallaxie">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our testimonials</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Hear from those who know us best</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p>“ The coffee class was amazing, Tin presented us 5 traditional recipes and they were all so tasty. The thing I liked the most is that everything we did was the traditional way from boiling water to shaving ice. He also has a very good english. More points for showing us ingredients that we could use in our own country to make these recipes!!! </p>
                                        </div>
                                        <div class="author-info">
                                            <p>Alexa Baragan- CANADA</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p>“ We had the most amazing time with Bang making coffee. We made all the traditional Vietnamese coffees in a beautiful setting. Bang was so friendly and made the experience one to remember ☕️. </p>
                                        </div>
                                        <div class="author-info">
                                            <p>Karen Salisbury - HOLAND</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p>“ We experienced a wonderful coffee making class with Bang. He took us through all the steps and we made 5 coffees! A wonderful and peaceful place next to the river with an opportunity to do basket boat rides too! 100% recommend giving this place a visit! </p>
                                        </div>
                                        <div class="author-info">
                                            <p>Bethany - HOLAND</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-btn-prev"></div>
                                <div class="testimonial-btn-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

    <!-- Our Faqs Section Start -->
    {{-- <div class="our-faqs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Faqs Content Start -->
                    <div class="faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">frequently asked questions</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Common coffee questions and answers</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What is the best way to store coffee beans?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Coffee beans are best used within 2-3 weeks of roasting for optimal flavor and the freshest experience.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        How long do coffee beans stay fresh?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Coffee beans are best used within 2-3 weeks of roasting for optimal flavor and the freshest experience.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        What's the difference between espresso and coffee?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Coffee beans are best used within 2-3 weeks of roasting for optimal flavor and the freshest experience.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Can I brew coffee without a coffee maker?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Coffee beans are best used within 2-3 weeks of roasting for optimal flavor and the freshest experience.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- Faqs Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Faqs Image Start -->
                    <div class="faqs-image">
                        <figure class="image-anime">
                            <img src="{{ asset('user/images/faq.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Faqs Image End -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Our Faqs Section End -->
@endsection

