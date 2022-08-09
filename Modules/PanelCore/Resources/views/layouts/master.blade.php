<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page_name??'Newsifier | Main'}}</title>
    <link rel="shortcut icon" href="{{asset('landing-assets/image/favicon.png')}}" type="image/x-icon">
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="{{asset('landing-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('landing-assets/fonts/icon-font/css/style.css')}}">
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
<div class="site-wrapper overflow-hidden position-relative">
    <!--Site Header Area -->
    <header class="site-header site-header--menu-right sign-in-menu-1 site-header--absolute site-header--sticky">
        <div class="container">
            <nav class="navbar site-navbar">
                <!-- Brand Logo-->
                <div class="brand-logo">
                    <a href="#">
                        <!-- light version logo (logo must be black)-->
                        <img src="{{asset('landing-assets/image/logo.svg')}}" alt="" class="light-version-logo">
                        <!-- Dark version logo (logo must be White)-->
                        <img src="{{asset('landing-assets/image/logo.svg')}}" alt="" class="dark-version-logo">
                    </a>
                </div>
                <div class="header-btn sign-in-header-btn-1 mt-3 ms-auto d-none d-xs-inline-flex">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a class="btn download-trail-btn btn focus-reset" href="{{route('user.show.create.article.form')}}">
                        Create Article
                    </a>
                        <a target="" class="btn download-trail-btn btn focus-reset" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                      {{auth()->user()->name}}
                        <img class="p-1" src="{{asset('landing-assets/image/log-out.svg')}}" alt="log-out">
                        </a>
                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none"> @csrf </form>

                    @endif
                    @if(!\Illuminate\Support\Facades\Auth::check())
                    <a class="btn download-trail-btn btn focus-reset" href="{{route('user.show.sign-in')}}">
                               Sign In
                     </a>
                      <a class="btn download-trail-btn btn focus-reset" href="{{route('user.show.sign-up')}}">
                               Sign Up
                     </a>
                     @endif
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
                        <h2>Newsifier Posts</h2>
                        <p>
                            We are a platform that allows you to browse and download GIF images with high speed and accuracy                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio  Area -->
    <div class="portfolio-section" id="portfolio-section">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="iso-mas-grid-wrap row">
                        @foreach($data as $datum)
                        <div class="col-lg-4 col-md-6  col-sm-6 gr-pb-7  isotope-item isotope-mas-item">
                            <div class="portfolio-card portfolio-card-masonry">
                                <a href="#" class="card-image d-block">
                                    <img src="{{$datum->image}}" alt="{{$datum->image}}" class="w-100">
                                </a>
                                <div class="text-start  text-block  gr-bg-opacity d-block ">
                                    <span class=" d-block ponter-event-none">Author: {{$datum->user->name}}</span>
                                    <h3 class="" style="font-size: 18px">Title: {{$datum->title}}</h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Area-->
    <footer class="footer-sign-in-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-sm-9">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <a href="#"><img src="{{asset('landing-assets/image/logos/logo-paste.png')}}" alt="" class="footer-logo"></a>
                            <div class="content">
                                <p>Big, small, online, offline, local. Size doesn't matter. </p>
                                <p>Created By Mohammad Zam: Senior Web Developer</p>
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
            </div>
        </div>
    </footer>
</div>
<!-- Vendor Scripts -->
<!-- Plugin's Scripts -->
<script src="{{asset('landing-assets/plugins/aos/aos.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/isotope/packery.pkgd.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/isotope/image.loaded.js')}}"></script>
<script src="{{asset('landing-assets/plugins/menu/menu.js')}}"></script>
<script src="{{asset('landing-assets/js/menu.js')}}"></script>
<script src="{{asset('landing-assets/js/editor.js')}}"></script>
<!-- Activation Script -->
@include('sweetalert::alert')
</body>

</html>

