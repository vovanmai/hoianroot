@extends('user.layouts.app')

@section('title', 'Hoi An Coffee Making Class and Brewing Experience | 100% Handcrafted Vietnamese Flavor - HoiAnRoots')

{{-- @section('description', 'Experience the art of coffee making at HoiAnRoots. Join our classes to learn from the best and elevate your coffee skills.') --}}

@section('content')
    <!-- Hero Section Start -->
    <div class="hero parallaxie">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            {{-- <h3 class="wow fadeInUp">crafted with love, served with passion</h3> --}}
                            <h2 class="wow fadeInUp text-center">Hoi An Coffee Making Class</h2>
                            <div class="hand-crafted-coffee wow fadeInUp text-center text-transform-uppercase">The only 100% hand-crafted coffee class in Hoi An</div>
                            <div class="wow fadeInUp d-flex justify-content-center coffee-cups-container">
                                <img src="https://ik.imagekit.io/ejqr7rydp/hoianroots-production/cup-1.webp?tr=h-150,q-50" alt="Hoi An Coffee Making Class">
                                <img src="https://ik.imagekit.io/ejqr7rydp/hoianroots-production/cup-2.webp?tr=h-150,q-50" alt="Hoi An Coffee Making Class">
                                <img src="https://ik.imagekit.io/ejqr7rydp/hoianroots-production/cup-3.webp?tr=h-150,q-50" alt="Hoi An Coffee Making Class">
                                <img src="https://ik.imagekit.io/ejqr7rydp/hoianroots-production/cup-4.webp?tr=h-150,q-50" alt="Hoi An Coffee Making Class">
                                <img src="https://ik.imagekit.io/ejqr7rydp/hoianroots-production/cup-5.webp?tr=h-150,q-50" alt="Hoi An Coffee Making Class">
                            </div>
                            <p class="wow fadeInUp text-center" data-wow-delay="0.2s">Join our refined workshop by the poetic riverside in Hoi An and discover the secrets of authentic Vietnamese coffee. This hands-on class will guide you through making five iconic drinks:</p>
                            <p class="wow fadeInUp text-center font-bold">Vietnamese black coffee, Vietnamese coffee with a unique 4-layer style, coconut coffee, egg coffee, and salted coffee.</p>
                            <p class="wow fadeInUp text-center">An inspiring and flavorful experience awaits!</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp d-flex justify-content-center" data-wow-delay="0.4s">
                            <a href="{{ route('about') }}" class="btn-default">Discover Hoi An Coffee Making Class</a>
                            {{-- <a href="{{ route('make-reservation') }}" class="btn-default btn-highlighted">Make Reservation</a> --}}
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    {{-- <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe đen đá">Cafe đen đá</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Bạc xỉu">Bạc xỉu</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe dừa">Cafe dừa</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe trứng">Cafe trứng</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe muối">Cafe muối</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe đen đá">Cafe đen đá</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Bạc xỉu">Bạc xỉu</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe dừa">Cafe dừa</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe trứng">Cafe trứng</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe muối">Cafe muối</span>
            </div>

            <div class="scrolling-content">
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe đen đá">Cafe đen đá</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Bạc xỉu">Bạc xỉu</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe dừa">Cafe dừa</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe trứng">Cafe trứng</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe muối">Cafe muối</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe đen đá">Cafe đen đá</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Bạc xỉu">Bạc xỉu</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe dừa">Cafe dừa</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe trứng">Cafe trứng</span>
                <span><img src="{{ asset('user/images/asterisk-icon.svg') }}" alt="Cafe muối">Cafe muối</span>
            </div>
        </div>
        <!-- Scrolling Ticker End -->
    </div>
    <!-- Scrolling Ticker Section End --> --}}

    @include('user.layouts.menu_scroll')

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
                                    <img src="{{ asset('user/images/icon-about-body-item-1.svg') }}" alt="">
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
                                    <img src="{{ asset('user/images/icon-about-body-item-2.svg') }}" alt="">
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
                                <a href="{{ route('about') }}" class="btn-default">More about us</a>
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
                                <img src="https://ik.imagekit.io/ejqr7rydp/hoianroots-production/hoianroots-coffee-2.webp?tr=q-1" alt="">
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
    <!-- About us Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us light-bg-section">
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
                            <a href="{{ route('contact') }}" class="btn-default">contact us</a>
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

    <!-- Interactive Process Layout Start -->
    <div class="interactive interactive-process-layout">
        <!-- Interactive Process Wrapper Start -->
        <div class="interactive-interactive-process-wrapper interactive-wrapper">
            <div class="interactive-con">
                <!-- Interactive Inner Grid Start -->
                <div class="interactive-con-inner interactive-grid">
                    <!-- Interactive Process Item Start -->
                    <div class="interactive-process-item">
                        <div class="interactive-inner-process activate" data-index="0">
                            <div class="process-content-wap">
                                <div class="process-inner-content-wap">
                                    <p>Learn by doing</p>
                                    <h2><a href="#">Coffee class</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Interactive Process Item End -->

                    <!-- Interactive Process Item Start -->
                    <div class="interactive-process-item">
                        <div class="interactive-inner-process" data-index="1">
                            <div class="process-content-wap">
                                <div class="process-inner-content-wap">
                                    <p>Taste Vietnam’s best</p>
                                    <h2><a href="#">COFFEE SELECTION</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Interactive Process Item End -->

                    <!-- Interactive Process Item Start -->
                    <div class="interactive-process-item">
                        <div class="interactive-inner-process" data-index="2">
                            <div class="process-content-wap">
                                <div class="process-inner-content-wap">
                                    <p>Book your spot</p>
                                    <h2><a href="#">PRIVATE SESSION</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Interactive Process Item End -->

                    <!-- Interactive Process Item Start -->
                    <div class="interactive-process-item">
                        <div class="interactive-inner-process" data-index="3">
                            <div class="process-content-wap">
                                <div class="process-inner-content-wap">
                                    <p>Enjoy the view</p>
                                    <h2><a href="#">RIVERSIDE HOI AN</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Interactive Process Item End -->
                </div>
                <!-- Interactive Inner Grid End -->

                <!-- Interactive Process Image Start -->
                <div class="interactive-process-list-image">
                    <div class="interactive-process-image img-0 show" data-bg="{{ asset('user/images/hoianroot-coffee-1.webp') }}" style="background-image: url('{{ asset('user/images/hoianroots-coffee-1.webp') }}');"></div>
                    <div class="interactive-process-image img-1" data-bg="https://ik.imagekit.io/ejqr7rydp/hoianroots-production/hoianroots-coffee-2.webp?tr=q-40,w-550" style="background-image: url('https://ik.imagekit.io/ejqr7rydp/hoianroots-production/hoianroots-coffee-2.webp?tr=q-40,w-550');"></div>
                    <div class="interactive-process-image img-2" data-bg="{{ asset('user/images/hoianroots-coffee-3.webp') }}" style="background-image: url('{{ asset('user/images/hoianroots-coffee-3.webp') }}');"></div>
                    <div class="interactive-process-image img-3" data-bg="{{ asset('user/images/hoianroots-coffee-4.webp') }}" style="background-image: url('{{ asset('user/images/hoianroots-coffee-4.webp') }}');"></div>
                </div>
                <!-- Interactive Process Image End -->
            </div>
        </div>
        <!-- Interactive Process Wrapper End -->
    </div>
    <!-- Interactive Process Layout End -->

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
@endsection

