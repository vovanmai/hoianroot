<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="robots" content="index, follow">
    <meta name="language" content="en">
    <meta name="keywords" content="HoiAnRoots, Coffee Making Class, Coffee Brewing Experience, Handcrafted Coffee, Vietnamese Coffee, Coffee Workshop Hoi An, Learn Coffee Brewing Vietnam, Traditional Vietnamese Coffee, Coffee Culture Hoi An">
    <meta name="author" content="HoiAnRoots">
    <title>@yield('title', 'Hoi An Coffee Making Class and Brewing Experience | 100% Handcrafted Vietnamese Flavor - HoiAnRoots')</title>
    <meta name="description" content="@yield('description', 'Join our Coffee Making Class and Brewing Experience in Hoi An. Discover 100% handcrafted Vietnamese coffee with HoiAnRoots.')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="@yield('url', route('home'))">

    @if (isset($isHome) && $isHome)
        <link rel="preload" as="image" href="https://ik.imagekit.io/ejqr7rydp/hoianroots-production/hoianroots-cover-1.webp?tr=q-10" fetchpriority="high">
    @endif

    <!-- Open Graph (Facebook/Zalo) -->
    <meta property="og:site_name" content="HoiAnRoots">
    <meta property="og:title" content="Hoi An Coffee Making Class and Brewing Experience | 100% Handcrafted Vietnamese Flavor - HoiAnRoots">
    <meta property="og:description" content="Join our Coffee Making Class and Brewing Experience in Hoi An. Discover 100% handcrafted Vietnamese coffee with HoiAnRoots.">
    <meta property="og:image" content="{{ asset('user/images/hoi-an-coffee-making-class.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:url" content="@yield('url', route('home'))">
    <meta property="article:publisher" content="https://www.facebook.com/griinlife">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hoi An Coffee Making Class and Brewing Experience | 100% Handcrafted Vietnamese Flavor - HoiAnRoots">
    <meta name="twitter:description" content="Join our Coffee Making Class and Brewing Experience in Hoi An. Discover 100% handcrafted Vietnamese coffee with HoiAnRoots.">
    <meta name="twitter:image" content="{{ asset('user/images/hoi-an-coffee-making-class-and-brewing-experience.jpg') }}">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": ["LocalBusiness", "Course"],
            "name": "Hoi An Coffee Making Class and Brewing Experience | 100% Handcrafted Vietnamese Flavor - HoiAnRoots",
            "description": "Join our Coffee Making Class and Brewing Experience in Hoi An. Discover 100% handcrafted Vietnamese coffee with HoiAnRoots.",
            "url": "@yield('url', route('home'))",
            "logo": "https://ik.imagekit.io/ejqr7rydp/hoianroots-production/hoianroots.jpeg",
            "image": "{{ asset('user/images/hoi-an-coffee-making-class.jpg') }}",
            "telephone": "+84344778879",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "V9Q5+RHJ, Cẩm Sơn",
                "addressLocality": "Hội An",
                "addressRegion": "Quảng Nam",
                "addressCountry": "VN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 15.887247,
                "longitude": 108.357057
            },
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"
                ],
                "opens": "09:00",
                "closes": "18:00"
            }],
            "sameAs": [
                "https://www.facebook.com/griinlife",
                "https://www.instagram.com/coffee_making_by_thebamboo"
            ],
            "provider": {
                "@type": "Organization",
                "name": "HoiAnRoots",
                "logo": {
                "@type": "ImageObject",
                "url": "https://ik.imagekit.io/ejqr7rydp/hoianroots-production/hoianroots.jpeg",
                }
            }
        }
        </script>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/images/favicon.jpg') }}">
    <!-- Google Fonts Css-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Jost:ital,wght@0,100..900;1,100..900&family=Forum&display=swap&subset=latin,vietnamese" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('user/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('user/css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('user/css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('user/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('user/css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ asset('user/css/custom.css') }}" rel="stylesheet" media="screen">

    <!-- Vietnamese Font Support -->
    <style>
        /* Override font for Vietnamese text support */
        .scrolling-content span {
            font-family: 'Inter', 'Jost', 'Segoe UI', 'Roboto', 'Noto Sans', 'Arial Unicode MS', -apple-system, BlinkMacSystemFont, sans-serif !important;
        }

        /* Safari iOS specific font fallback for Vietnamese */
        @supports (-webkit-touch-callout: none) {
            .scrolling-content span {
                font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', 'Arial Unicode MS', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', sans-serif !important;
                -webkit-font-feature-settings: normal;
                font-feature-settings: normal;
                -webkit-text-stroke: 0.01em transparent;
            }
        }

        /* iOS Safari specific fixes */
        @media screen and (-webkit-min-device-pixel-ratio: 2) {
            .scrolling-content span {
                font-family: -apple-system, 'SF Pro Text', 'SF Pro Display', 'Helvetica Neue', 'Arial Unicode MS', sans-serif !important;
                text-rendering: auto;
                -webkit-font-smoothing: subpixel-antialiased;
                font-synthesis: weight style small-caps;
            }
        }

        /* Ensure proper rendering of Vietnamese characters */
        .scrolling-content span,
        .menu-scroll span {
            -webkit-font-feature-settings: "liga" 1, "kern" 1;
            font-feature-settings: "liga" 1, "kern" 1;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            unicode-bidi: normal;
        }

        /* iOS Safari Vietnamese diacritics fix */
        @supports (-webkit-overflow-scrolling: touch) {
            .scrolling-content span {
                -webkit-font-feature-settings: normal !important;
                font-feature-settings: normal !important;
                text-rendering: auto !important;
                -webkit-font-smoothing: subpixel-antialiased !important;
                font-variant: normal !important;
                unicode-bidi: isolate !important;
                direction: ltr !important;
            }

            /* Force font for Vietnamese characters on iOS */
            .scrolling-content span:nth-child(5),
            .scrolling-content span:nth-child(10) {
                font-family: 'PingFang SC', 'Hiragino Sans GB', 'SF Pro Text', -apple-system, sans-serif !important;
            }
        }

        /* Force UTF-8 character rendering */
        .scrolling-content {
            font-variant-ligatures: normal;
            font-variant-caps: normal;
            font-variant-numeric: normal;
        }

        /* Debug: Specific styling for muối text */
        .scrolling-content span {
            font-family: 'DejaVu Sans', 'Noto Sans', 'Arial Unicode MS', monospace !important;
        }
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17629456463"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-17629456463');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NPVCRFLK');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Preloader Start -->
    {{-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img style="border-radius: 50%" src="{{ asset('user/images/logo-offical.jpg') }}" alt=""></div>
        </div>
    </div> --}}
    <!-- Preloader End -->

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li><a href="mailto:info@domainname.com"><img src="{{ asset('user/images/icon-mail.svg') }}" alt="">chibang1994@gmail.com</a></li>
                            <li><img src="{{ asset('user/images/icon-location.svg') }}" alt="Location">171/35 Cua Dai st, Hoi An Dong, Da Nang</li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>
                <div class="col-md-3">
                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="https://www.instagram.com/coffee_making_by_thebamboo/" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/griinlife" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                            {{-- <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li> --}}
                        </ul>
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img style="width: 90px; height: auto; border-radius: 50%" src="https://ik.imagekit.io/ejqr7rydp/hoianroots-production/logo-offical.webp?tr=q-50,w-150" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link {{ request()->is('about.html') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li> --}}
                                <li class="nav-item"><a class="nav-link {{ request()->is('gallery.html') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/menu') }}">Menu</a></li> --}}
                                {{-- <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/service-single') }}">Service Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/blog-single') }}">Blog Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/projects') }}">Projects</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/project-single') }}">Project Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/team') }}">Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/team-single') }}">Team Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/image-gallery') }}">Image Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/video-gallery') }}">Video Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/faqs') }}">FAQs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/404') }}">404</a></li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item"><a class="nav-link {{ request()->is('contact.html') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a></li>
                                <li class="nav-item highlighted-menu"><a class="nav-link" href="{{ route('make-reservation') }}">Make reservation</a></li>
                            </ul>
                        </div>

                        <!-- Header Button Box Start -->
                        <div class="header-button-box">
                            <!-- Header Btn Start -->
                            <div class="header-btn">
                               <a href="{{ route('make-reservation') }}" class="btn-default btn-highlighted">Make reservation</a>
                            </div>
                            <!-- Header Btn End -->

                            <!-- Header Sidebar Btn Start -->
                            <div class="header-sidebar-btn">
                                <!-- Toggle Button trigger modal Start -->
                                <button class="btn btn-popup" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-label="Open sidebar"><img src="{{ asset('user/images/header-sidebar-btn.svg') }}" alt=""></button>
                                <!-- Toggle Button trigger modal End -->

                                <!-- Header Sidebar Start -->
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                                    <!-- Offcanvas Body Start -->
                                    <div class="offcanvas-body">
                                        <!-- Header Title Box Start -->
                                        <div class="header-title-box">
                                            <h2>welcome to HoiAnRoots</h2>
                                            <p>Coffee Brewing Experience – 100% Handcrafted, 100% Vietnamese Flavor.</p>
                                        </div>
                                        <!-- Header Title Box End -->

                                        <!-- Header Sidebar Info Start -->
                                        <div class="header-sidebar-info">
                                            <h2><a href="tel:+84 344 778 879">+84 344 778 879</a></h2>
                                            <ul>
                                                <li>171/35 Cua Dai st, Hoi An Dong, Da Nang</li>
                                                <li><a href="mailto:chibang1994@gmail.com">chibang1994@gmail.com</a></li>
                                            </ul>
                                        </div>
                                        <!-- Header Sidebar Info End -->

                                        <!-- Header Sidebar Timing Start -->
                                        <div class="header-sidebar-timing">
                                            <ul>
                                                <li>Everyday : 09.00am - 18.00pm</li>
                                            </ul>
                                        </div>
                                        <!-- Header Sidebar Timing End -->

                                        <!-- Header Sidebar Social List Start -->
                                        <div class="header-sidebar-social-list">
                                            <ul>
                                                <li><a href="https://www.instagram.com/coffee_making_by_thebamboo/" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="https://www.facebook.com/griinlife" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                {{-- <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li> --}}
                                            </ul>
                                        </div>
                                        <!-- Header Sidebar Social List End -->
                                    </div>
                                    <!-- Offcanvas Body End -->
                                </div>
                                <!-- Header Sidebar End -->
                            </div>
                            <!-- Header Sidebar Btn End -->
                        </div>
                        <!-- Header Button Box End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Main Content -->
    @yield('content')

    <!-- Main Footer Section Start -->
    <footer class="main-footer parallaxie">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Footer Contact List Start -->
                    <div class="footer-contact-list">
                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-phone-accent.svg') }}" alt="">
                            </div>
                            <div class="footer-contact-detail">
                                <h3>contact us</h3>
                                <p><a href="tel:+84344778879">+84 344 778 879</a></p>
                                {{-- <p><a href="mailto:info@domainname.com">info@domainname.com</a></p> --}}
                            </div>
                            <div class="footer-contact-button">
                                <a href="{{ route('contact') }}" class="btn-default btn-highlighted">contact us</a>
                            </div>
                        </div>
                        <!-- Footer Contact Item End -->

                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-location-accent.svg') }}" alt="">
                            </div>
                            <div class="footer-contact-detail">
                                <h3>address</h3>
                                <p>171/35 Cua Dai st, Hoi An Dong, Da Nang</p>
                            </div>
                            <div class="footer-contact-button">
                                <a href="{{ route('contact') }}" class="btn-default btn-highlighted">get direction</a>
                            </div>
                        </div>
                        <!-- Footer Contact Item End -->

                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="{{ asset('user/images/icon-clock-accent.svg') }}" alt="">
                            </div>
                            <div class="footer-contact-detail">
                                <h3>opening hours</h3>
                                <p>Everyday: From 09:00 To 18:00</p>
                            </div>
                            <div class="footer-contact-button">
                                <a href="{{ route('make-reservation') }}" class="btn-default btn-highlighted">reservation online</a>
                            </div>
                        </div>
                        <!-- Footer Contact Item End -->
                    </div>
                    <!-- Footer Contact List End -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright">
                        <!-- Footer Copyright Text Start -->
                        <div class="footer-copyright-text order-md-1 order-3">
                            <p>Copyright © 2025 All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright Text End -->

                        <!-- Footer Logo Start -->
                        <div class="footer-logo order-md-2 order-1">
                            {{-- <img style="height: 100px; width: auto; border-radius: 4px;" src="{{ asset('user/images/logo.png') }}" alt=""> --}}
                            <img style="width: 90px; height: auto; border-radius: 50%" src="https://ik.imagekit.io/ejqr7rydp/hoianroots-production/logo-offical.webp?tr=q-50,w-150" alt="Logo">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- Footer Social Links Start -->
                        <div class="footer-social-links order-md-3 order-2">
                            <ul>
                                <li><a aria-label="Visit our Instagram" href="https://www.instagram.com/coffee_making_by_thebamboo/"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a aria-label="Visit our Facebook" href="https://www.facebook.com/griinlife"><i class="fa-brands fa-facebook-f"></i></a></li>
                                {{-- <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                        <!-- Footer Social Links End -->
                    </div>
                    <!-- Footer Copyright End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Main Footer Section End -->

    <!-- Jquery Library File -->
    <script src="{{ asset('user/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('user/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('user/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('user/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('user/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.counterup.min.js') }}"></script>
    <!-- Isotop js file -->
    <script src="{{ asset('user/js/isotope.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('user/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('user/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('user/js/gsap.min.js') }}"></script>
    <script src="{{ asset('user/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('user/js/SplitText.js') }}"></script>
    <script src="{{ asset('user/js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('user/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('user/js/wow.min.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('user/js/function.js') }}"></script>

    <!-- Chat Button -->
    <div class="chat-button-container">
        <div class="chat-options" id="chatOptions">
            {{-- <div class="chat-option" onclick="openChat('line')">
                <img src="{{ asset('user/images/line-logo.svg') }}" alt="Line">
                <span>Line</span>
            </div> --}}
            <div class="chat-option" onclick="openChat('kakao')">
                <img src="{{ asset('user/images/kakao-talk-logo.svg') }}" alt="KakaoTalk">
                <span>KakaoTalk</span>
            </div>
            <div class="chat-option" onclick="openChat('messenger')">
                <img src="{{ asset('user/images/messenger-logo.svg') }}" alt="Messenger">
                <span>Messenger</span>
            </div>
            <div class="chat-option" onclick="openChat('whatsapp')">
                <img src="{{ asset('user/images/whatsapp-logo.svg') }}" alt="WhatsApp">
                <span>WhatsApp</span>
            </div>
        </div>
        <button class="chat-toggle-btn" id="chatToggleBtn" aria-label="Open chat" onclick="toggleChatOptions()">
            <div><i class="fa-solid fa-comment-dots"></i></div>
        </button>
    </div>

    <!-- Mobile Price Bar -->
    @if (isset($showPrice) && $showPrice)
        <div class="mobile-price-bar">
            <div class="price-info">
                <div class="price-label">Coffee Making Class</div>
                <div class="price-value">350.000 vnd/person</div>
            </div>
            <div class="price-action">
                <a href="{{ route('make-reservation') }}" class="btn-book-now">Book Now</a>
            </div>
        </div>
    @endif

    <style>
        .chat-button-container {
            position: fixed;
            bottom: 60px;
            right: 30px;
            z-index: 1000;
        }

        .chat-toggle-btn {
            width: 60px;
            height: 60px;
            padding: 0;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff6b6b, #ff8e53);
            border: none;
            color: white;
            font-size: 24px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 4px 20px rgba(255, 107, 107, 0.4);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .chat-toggle-btn::before,
        .chat-toggle-btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid rgba(255, 107, 107, 0.6);
            animation: wave 2s linear infinite;
        }

        .chat-toggle-btn::after {
            animation-delay: 1s;
        }

        .chat-toggle-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 25px rgba(255, 107, 107, 0.6);
        }

        .chat-toggle-btn:hover::before,
        .chat-toggle-btn:hover::after {
            animation-play-state: paused;
        }

        .chat-options {
            position: absolute;
            bottom: 80px;
            right: 0;
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            padding: 15px;
            min-width: 172px;
            transform: translateY(20px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .chat-options.show {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .chat-option {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 8px;
        }

        .chat-option:last-child {
            margin-bottom: 0;
        }

        .chat-option:hover {
            background: #f8f9fa;
            transform: translateX(-5px);
        }

        .chat-option img {
            width: 30px;
            height: 30px;
            margin-right: 12px;
            border-radius: 6px;
        }

        .chat-option span {
            font-weight: 500;
            color: #333;
            font-size: 14px;
        }

        /* Animation for chat button */
        @keyframes wave {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        .chat-toggle-btn.active {
            animation: pulse 2s infinite;
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            .chat-button-container {
                bottom: 120px; /* Adjusted for mobile price bar */
                right: 20px;
            }

            .chat-toggle-btn {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .chat-options {
                min-width: 172px;
                bottom: 70px;
            }
        }

        /* Mobile Price Bar Styles */
        .mobile-price-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #1a365d; /* Darker blue for better contrast */
            padding: 12px 20px;
            display: none;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.15);
            z-index: 999;
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .price-info {
            color: #ffffff; /* Pure white for maximum contrast */
            flex: 1;
        }

        .price-label {
            font-size: 14px;
            font-weight: 600; /* Increased weight for better visibility */
            margin-bottom: 2px;
            line-height: 1.2;
            color: #ffffff; /* Explicit white color */
        }

        .price-value {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.2;
            color: #2def14; /* Explicit white color */
        }

        .price-action {
            margin-left: 15px;
        }

        .btn-book-now {
            background: #ffffff; /* Pure white background */
            color: #1a365d; /* Dark blue text for contrast */
            padding: 12px 24px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #1a365d; /* Border for better definition */
            display: inline-block;
        }

        .btn-book-now:hover {
            background: #f7fafc; /* Very light gray on hover */
            color: #1a365d; /* Keep dark text */
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-color: #2d3748; /* Darker border on hover */
        }

        /* Show mobile price bar only on mobile */
        @media (max-width: 768px) {
            .mobile-price-bar {
                display: flex;
            }

            /* Add bottom padding to body to prevent content being hidden behind price bar */
            body {
                padding-bottom: 60px;
            }
        }

        /* Hide on very small screens if needed */
        @media (max-width: 480px) {
            .price-label {
                font-size: 13px;
            }

            .price-value {
                font-size: 16px;
            }

            .btn-book-now {
                padding: 10px 20px;
                font-size: 13px;
            }

            .mobile-price-bar {
                padding: 10px 15px;
            }
        }
    </style>

    <script>
        function toggleChatOptions() {
            const chatOptions = document.getElementById('chatOptions');
            const chatBtn = document.getElementById('chatToggleBtn');

            chatOptions.classList.toggle('show');
            chatBtn.classList.toggle('active');
        }

        function openChat(platform) {
            // Đây là nơi bạn có thể thêm logic để mở chat cho từng platform
            // Ví dụ: redirect đến link chat hoặc mở popup

            switch(platform) {
                case 'line':
                    // Thêm logic cho Line
                    console.log('Opening Line chat...');
                    window.open('https://line.me/ti/p/5-7iYei0Bw', '_blank');
                    break;
                case 'kakao':
                    // Thêm logic cho KakaoTalk
                    console.log('Opening KakaoTalk chat...');
                    window.open('http://qr.kakao.com/talk/Z9E2BXAMXqDdpyPhUeftvxVmG.Q-', '_blank');
                    break;
                case 'messenger':
                    // Thêm logic cho Messenger
                    console.log('Opening Messenger chat...');
                    window.open('https://m.me/griinlife', '_blank');
                    break;
                case 'whatsapp':
                    // Thêm logic cho WhatsApp
                    console.log('Opening WhatsApp chat...');
                    window.open('https://wa.me/+84344778879', '_blank');
                    break;
            }

            // Đóng menu sau khi click
            toggleChatOptions();
        }

        // Đóng menu khi click bên ngoài
        document.addEventListener('click', function(event) {
            const chatContainer = document.querySelector('.chat-button-container');
            const chatOptions = document.getElementById('chatOptions');
            const chatBtn = document.getElementById('chatToggleBtn');

            if (!chatContainer.contains(event.target)) {
                chatOptions.classList.remove('show');
                chatBtn.classList.remove('active');
            }
        });
    </script>
    @stack('scripts')

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPVCRFLK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-315WS360FM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-315WS360FM');
    </script>
</body>
</html>
