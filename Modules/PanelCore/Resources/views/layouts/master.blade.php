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
                        <img src="{{asset('landing-assets/image/logo/logo-black.png')}}" alt="" class="light-version-logo">
                        <!-- Dark version logo (logo must be White)-->
                        <img src="{{asset('landing-assets/image/logo/logo-white.png')}}" alt="" class="dark-version-logo">
                    </a>
                </div>
                <div class="header-btn sign-in-header-btn-1 mt-3 ms-auto d-none d-xs-inline-flex">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <a target="_blank" class="btn download-trail-btn btn focus-reset" href="{{route('user.show.create.article.form')}}">
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
                    <div id="editorjs">
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
<!-- Plugin's Scripts -->
<script src="{{asset('landing-assets/plugins/aos/aos.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/isotope/packery.pkgd.min.js')}}"></script>
<script src="{{asset('landing-assets/plugins/isotope/image.loaded.js')}}"></script>
<script src="{{asset('landing-assets/plugins/menu/menu.js')}}"></script>
<script src="{{asset('landing-assets/js/menu.js')}}"></script>
<script src="{{asset('landing-assets/js/editor.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.3.0"></script>
<!-- Activation Script -->
@include('sweetalert::alert')

<script>
    const editor = new EditorJS({
        autofocus: true,
        holder:'editorjs',
        tools: {
            image: {
                class: ImageTool,
                config: {
                    endpoints: {
                        byFile: 'http://localhost:8000/user/upload-test', // Your backend file uploader endpoint
                        byUrl: 'http://localhost:8000/user/fetchUrl', // Your endpoint that provides uploading by Url
                    }
                }
            },
        }
    })
</script>
</body>

</html>

