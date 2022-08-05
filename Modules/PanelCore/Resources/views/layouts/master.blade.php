<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page_name??'Newsifier | Main'}}</title>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="{{asset('landing-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('landing-assets/fonts/icon-font/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('landing-assets/fonts/typography-font/typo.css')}}">
    <link rel="stylesheet" href="{{asset('landing-assets/fonts/fontawesome-5/css/all.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="{{asset('landing-assets/plugins/aos/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing-assets/plugins/fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing-assets/plugins/nice-select/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing-assets/plugins/slick/slick.min.css')}}">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="{{asset('landing-assets/css/main.css')}}">
    <!-- Custom stylesheet -->
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
<a class="shade-floating-btn" href="https://finestdevs.com/shade/#shade-pricing"><img src="image/download.svg"/> Download Shade Now</a>
<div class="site-wrapper overflow-hidden position-relative">
    <!--Site Header Area -->
    <header class="site-header site-header--menu-right sign-in-menu-1 site-header--absolute site-header--sticky">
        <div class="container">
            <nav class="navbar site-navbar">
                <!-- Brand Logo-->
                <div class="brand-logo">
                    <a href="#">
                        <!-- light version logo (logo must be black)-->
                        <img src="{{asset('landing-assets/image/logo/logo-black.png')}}" alt="" class="light-version-logo">
                        <!-- Dark version logo (logo must be White)-->
                        <img src="{{asset('landing-assets/image/logo/logo-white.png')}}" alt="" class="dark-version-logo">
                    </a>
                </div>
                <div class="menu-block-wrapper">
                    <div class="menu-overlay"></div>
                    <nav class="menu-block" id="append-menu-header">
                        <div class="mobile-menu-head">
                            <div class="go-back">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main">
                            <li class="nav-item nav-item-has-children has-megamenu">
                                <a href="#" class="nav-link-item drop-trigger">Landings <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu megamenu  megadropdown-center  d-lg-flex align-items-center" id="submenu-100">
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="mega-menu-image">
                                            <img class="w-100" src="{{asset('landing-assets/image/landing-2/people-3.png')}}" alt="image">
                                        </div>
                                    </div>
                                    <ul class="col-lg-8 col-12 row-lg list-unstyled py-lg-7">
                                        <li class="col-lg-3">
                                            <div class="single-dropdown-block">
                                                <a href="index.html" class="mega-drop-menu-item sub-menu--item">Saas Service</a>
                                                <a href="index-2.html" class="mega-drop-menu-item sub-menu--item">Job Directory</a>
                                                <a href="index-3.html" class="mega-drop-menu-item sub-menu--item">Startup Agency</a>
                                                <a href="index-4.html" class="mega-drop-menu-item sub-menu--item">Industry</a>
                                                <a href="index-5.html" class="mega-drop-menu-item sub-menu--item">Furniture Shop</a>
                                            </div>
                                        </li>
                                        <li class="col-lg-3">
                                            <div class="single-dropdown-block">
                                                <a href="index-6.html" class="mega-drop-menu-item sub-menu--item">Software</a>
                                                <a href="index-7.html" class="mega-drop-menu-item sub-menu--item">Real Estate</a>
                                                <a href="index-8.html" class="mega-drop-menu-item sub-menu--item">Finance Service</a>
                                                <a href="index-9.html" class="mega-drop-menu-item sub-menu--item">Mental Health</a>
                                                <a href="index-10.html" class="mega-drop-menu-item sub-menu--item">Saas Applications</a>
                                            </div>
                                        </li>
                                        <li class="col-lg-3">
                                            <div class="single-dropdown-block">
                                                <a href="index-11.html" class="mega-drop-menu-item sub-menu--item">Software 2.0</a>
                                                <a href="index-12.html" class="mega-drop-menu-item sub-menu--item">Course</a>
                                                <a href="index-13.html" class="mega-drop-menu-item sub-menu--item">App</a>
                                                <a href="index-14.html" class="mega-drop-menu-item sub-menu--item">Saas Subscription</a>
                                                <a href="index-15.html" class="mega-drop-menu-item sub-menu--item">Digital Service</a>
                                            </div>
                                        </li>
                                        <li class="col-lg-3">
                                            <div class="single-dropdown-block">
                                                <a href="index-16.html" class="mega-drop-menu-item sub-menu--item">Mobile App</a>
                                                <a href="index-17.html" class="mega-drop-menu-item sub-menu--item">Desktop App</a>
                                                <a href="index-18.html" class="mega-drop-menu-item sub-menu--item">Web Applications</a>
                                                <a href="index-19.html" class="mega-drop-menu-item sub-menu--item">eBook</a>
                                                <a href="index-20.html" class="mega-drop-menu-item sub-menu--item">Social App</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Pages <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="sub-menu" id="submenu-9">
                                    <li class="sub-menu--item">
                                        <a href="about-us.html">About Us</a>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Contact Us<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu" id="submenu-101">
                                            <li class="sub-menu--item">
                                                <a href="contact-1.html">Contact 01</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="contact-2.html">Contact 02</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Blog<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu" id="submenu-10">
                                            <li class="sub-menu--item">
                                                <a href="blog-category.html">Blog Category</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="blog-regular.html">Blog Regular</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="blog-details.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Portfolios<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu" id="submenu-13">
                                            <li class="sub-menu--item">
                                                <a href="portfolio-1.html">Portfolio Grid</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="portfolio-2.html">Portfolio Metro</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="portfolio-3.html">Portfolio Minimal</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio Details<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu" id="submenu-130">
                                            <li class="sub-menu--item">
                                                <a href="portfolio-details-1.html">Portfolio Details 01</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="portfolio-details-2.html">Portfolio Details 02</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="portfolio-details-3.html">Portfolio Details 03</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="portfolio-details-4.html">Portfolio Details 04</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Services<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu" id="submenu-11">
                                            <li class="sub-menu--item">
                                                <a href="service-1.html">Service</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="service-details.html">Service Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Career<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu" id="submenu-111">
                                            <li class="sub-menu--item">
                                                <a href="career.html">Career</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="career-details.html">Career Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Testimonials<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu" id="submenu-112">
                                            <li class="sub-menu--item">
                                                <a href="testimonial-1.html">Testimonial 01</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="testimonial-2.html">Testimonial 02</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Pricing<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu" id="submenu-12">
                                            <li class="sub-menu--item">
                                                <a href="pricing-1.html">Pricing 01</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="pricing-2.html">Pricing 02</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Account<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu" id="submenu-14">
                                            <li class="sub-menu--item">
                                                <a href="sign-in-1.html">Sign In 01</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="sign-in-2.html">Sign In 02</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="sign-in-3.html">Sign In 03</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="sign-up-1.html">Sig Up 01</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="sign-up-2.html">Sign Up 02</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="sign-up-3.html">Sig Up 03</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="reset-pass-1.html">Reset Password 01</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="reset-pass-2.html">Reset Password 02</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="reset-pass-3.html">Reset Password 03</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Utility<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu" id="submenu-15">
                                            <li class="sub-menu--item">
                                                <a href="faq.html">FAQ</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="terms-conditions.html">Terms & Conditions</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="404.html">404 Error</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="blog-regular.html" class="nav-link-item">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://finestdevs.com/product-support/" class="nav-link-item">Support</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-btn sign-in-header-btn-1 ms-auto d-none d-xs-inline-flex">
                    <a target="_blank" class="btn download-trail-btn btn focus-reset" href="https://finestdevs.com/shade/">
                        Get Shade
                    </a>
                </div>
                <!-- mobile menu trigger -->
                <div class="mobile-menu-trigger">
                    <span></span>
                </div>
                <!--/.Mobile Menu Hamburger Ends-->
            </nav>
        </div>
    </header>
    <!-- navbar- -->
    <!-- Contact  Area -->
    <div class="inner-pages-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-10">
                    <div class="section-heading-14 text-center">
                        <h2>Portfolio Style 01</h2>
                        <p>We are an industry-leading company that values honesty, integrity, and efficiency. Building quality products and caring.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio  Area -->
    <div class="portfolio-section" id="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 portfolio-navbar">
                    <ul class="nav isotope-nav justify-content-center" id="isotope-mas-filters">
                        <li class="nav-item ">
                            <a class="nav-link active" href="javascript:" data-filter="*">All works</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="javascript:" data-filter=".branding">Branding</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="javascript:" data-filter=".design">UX Design</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="javascript:" data-filter=".photography">Photography</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="iso-mas-grid-wrap row">
                        <div class="col-lg-4 col-md-6  col-sm-6 gr-pb-7  isotope-item isotope-mas-item all branding transition-all ">
                            <div class="portfolio-card portfolio-card-masonry">
                                <a href="#" class="card-image d-block">
                                    <img src="{{asset('landing-assets/image/portfolio/portfolio-1.png')}}" alt="" class="w-100">
                                </a>
                                <div class="text-start  text-block  gr-bg-opacity d-block ">
                                    <span class=" d-block ponter-event-none">Kaktus</span>
                                    <h3 class="">Candy Store</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6  col-sm-6 gr-pb-7  isotope-item isotope-mas-item all  photography design transition-all ">
                            <div class="portfolio-card portfolio-card-masonry">
                                <a href="#" class="card-image d-block">
                                    <img src="{{asset('landing-assets/image/portfolio/portfolio-2.png')}}" alt="" class="w-100">
                                </a>
                                <div class="text-start  text-block  gr-bg-opacity d-block ">
                                    <span class=" d-block ponter-event-none">Kaktus</span>
                                    <h3 class="">Candy Store</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6  col-sm-6 gr-pb-7  isotope-item isotope-mas-item all branding photography  transition-all ">
                            <div class="portfolio-card portfolio-card-masonry">
                                <a href="#" class="card-image d-block">
                                    <img src="{{asset('landing-assets/image/portfolio/portfolio-3.png')}}" alt="" class="w-100">
                                </a>
                                <div class="text-start  text-block  gr-bg-opacity d-block ">
                                    <span class=" d-block ponter-event-none">Kaktus</span>
                                    <h3 class="">Candy Store</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6  col-sm-6 gr-pb-7  isotope-item isotope-mas-item branding photography design transition-all ">
                            <div class="portfolio-card portfolio-card-masonry">
                                <a href="#" class="card-image d-block">
                                    <img src="{{asset('landing-assets/image/portfolio/portfolio-4.png')}}" alt="" class="w-100">
                                </a>
                                <div class="text-start  text-block  gr-bg-opacity d-block ">
                                    <span class=" d-block ponter-event-none">Kaktus</span>
                                    <h3 class="">Candy Store</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6  col-sm-6 gr-pb-7  isotope-item isotope-mas-item all  photography design transition-all ">
                            <div class="portfolio-card portfolio-card-masonry">
                                <a href="#" class="card-image d-block">
                                    <img src="{{asset('landing-assets/image/portfolio/portfolio-5.png')}}" alt="" class="w-100">
                                </a>
                                <div class="text-start  text-block  gr-bg-opacity d-block ">
                                    <span class=" d-block ponter-event-none">Kaktus</span>
                                    <h3 class="">Candy Store</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6  col-sm-6 gr-pb-7  isotope-item isotope-mas-item all branding  transition-all ">
                            <div class="portfolio-card portfolio-card-masonry">
                                <a href="#" class="card-image d-block">
                                    <img src="{{asset('landing-assets/image/portfolio/portfolio-6.png')}}" alt="" class="w-100">
                                </a>
                                <div class="text-start  text-block  gr-bg-opacity d-block ">
                                    <span class=" d-block ponter-event-none">Kaktus</span>
                                    <h3 class="">Candy Store</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6  col-sm-6 gr-pb-7  isotope-item isotope-mas-item all photography design transition-all ">
                            <div class="portfolio-card portfolio-card-masonry">
                                <a href="#" class="card-image d-block">
                                    <img src="{{asset('landing-assets/image/portfolio/portfolio-7.png')}}" alt="" class="w-100">
                                </a>
                                <div class="text-start  text-block  gr-bg-opacity d-block ">
                                    <span class=" d-block ponter-event-none">Kaktus</span>
                                    <h3 class="">Candy Store</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Area-->
    <footer class="footer-sign-in-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-9">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <a href="#"><img src="{{asset('landing-assets/image/logos/logo-paste.png')}}" alt="" class="footer-logo"></a>
                            <div class="content">
                                <p>Big, small, online, offline, local. Size doesn't matter. We work on diverse projects for top brands as well as for cool startups. </p>
                            </div>
                            <div class="social-icons">
                                <ul class="pl-0 list-unstyled d-flex align-items-end ">
                                    <li class="d-flex flex-column justify-content-center"><a href="#"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li class="d-flex flex-column justify-content-center"><a href="#"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="d-flex flex-column justify-content-center"><a href="#"><i
                                                class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="footer-widget">
                                <p class="widget-title">Help menu</p>
                                <ul class="widget-links pl-0 list-unstyled">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Works</a></li>
                                    <li><a href="#">Career</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-6 pl-md-9 pl-6">
                            <div class="footer-widget">
                                <p class="widget-title ">Support</p>
                                <ul class="widget-links pl-0 list-unstyled">
                                    <li><a href="#">contact </a></li>
                                    <li><a href="#">Help & Support</a></li>
                                    <li><a href="#">Privacy and Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="footer-widget">
                                <p class="widget-title ">Products</p>
                                <ul class="widget-links pl-0 list-unstyled">
                                    <li><a href="#">Shades Pro</a></li>
                                    <li><a href="#">Essentiol Blocks</a></li>
                                    <li><a href="#">Avasta Dash</a></li>
                                    <li><a href="#">vApp Landing Page</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Vendor Scripts -->
<script src="{{asset('landing-assets/js/vendor.min.js')}}"></script>
<!-- Plugin's Scripts -->
<script src="{{asset('landing-assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/nice-select/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/aos/aos.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/slick/slick.min.js')}}"></script>
<script src="https://porjoton.netlify.app/mekanic/js/waypoints.min.js"></script>
<script src="{{asset('landing-assets/plugins/counter-up/jquery.counterup.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/isotope/packery.pkgd.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/isotope/image.loaded.js')}}"></script>
<script src="{{asset('landing-assets/plugins/menu/menu.js')}}"></script>
<!-- Activation Script -->
<script src="{{asset('landing-assets/js/custom.js')}}"></script>
</body>

</html>
