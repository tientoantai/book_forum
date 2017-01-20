<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <link rel='stylesheet' type='text/css'
          href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800&amp;subset=cyrillic,latin'>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/shop.style.css')}}">

    <link rel="stylesheet" href="{{asset('css/headers/header-v5.css')}}">
    <link rel="stylesheet" href="{{asset('css/footers/footer-v4.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/scrollbar/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/revolution-slider/rs-plugin/css/settings.css')}}">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{asset('css/theme-colors/default.css')}}" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <link rel="stylesheet" href="{{asset('css/book.css')}}">
    @yield('css')
</head>

<body class="header-fixed">

<div class="wrapper">
    <!--=== Header v5 ===-->
    <div class="header-v5 header-static">
        <!-- Topbar v3 -->
        <div class="topbar-v3">
            <div class="search-open">
                <div class="container">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="search-close"><i class="icon-close"></i></div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline right-topbar pull-right">
                            <li><a href="{{route('login')}}">Login</a> | <a href="">Register</a></li>
                            <li><i class="search fa fa-search search-button"></i></li>
                        </ul>
                    </div>
                </div>
            </div><!--/container-->
        </div>
        <!-- End Topbar v3 -->

        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img id="logo-header" src="{{asset('img/logo.png')}}" alt="Logo">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <!-- Nav Menu -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="{{route('about')}}" >
                                About Us
                            </a>
                        </li>
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="{{route('book-filter')}}">
                                Book
                            </a>
                        </li>
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="{{route('book-filter')}}">
                                Publisher
                            </a>
                        </li>
                    </ul>
                    <!-- End Nav Menu -->
                </div>
            </div>
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v5 ===-->

@yield('content')
<!--=== Footer v4 ===-->
    <div class="footer-v4">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-4 md-margin-bottom-40">
                        <a href="{{route('home')}}"><img class="footer-logo" src="{{asset('img/logo-2.png')}}" alt=""></a>
                        <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero
                            tincidunt sodales.</p>
                        <br>
                        <ul class="list-unstyled address-list margin-bottom-20">
                            <li><i class="fa fa-angle-right"></i>California, US, Lorem Lis Street, Orange, 25</li>
                            <li><i class="fa fa-angle-right"></i>Phone: 800 123 3456</li>
                            <li><i class="fa fa-angle-right"></i>Fax: 800 123 3456</li>
                            <li><i class="fa fa-angle-right"></i>Email: info@anybiz.co</li>
                        </ul>

                        <ul class="list-inline shop-social">
                            <li><a href="#"><i class="fb rounded-md fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="tw rounded-md fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="gp rounded-md fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="yt rounded-md fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- End About -->

                    <!-- Simple List -->
                    <div class="col-md-2 col-sm-3">
                        <div class="row">
                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Secciones</h2>
                                <ul class="list-unstyled simple-list margin-bottom-20">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li><a href="#">Francisco papa</a></li>
                                    <li>...</li>
                                </ul>
                            </div>

                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Temas</h2>
                                <ul class="list-unstyled simple-list">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li><a href="#">Francisco papa</a></li>
                                    <li>...</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-3">
                        <div class="row">
                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Utilidades</h2>
                                <ul class="list-unstyled simple-list margin-bottom-20">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li>...</li>
                                </ul>
                            </div>

                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Documentos</h2>
                                <ul class="list-unstyled simple-list">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li><a href="#">Francisco papa</a></li>
                                    <li>...</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-3">
                        <div class="row">
                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Publicidad</h2>
                                <ul class="list-unstyled simple-list margin-bottom-20">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li><a href="#">Francisco papa</a></li>
                                    <li>...</li>
                                </ul>
                            </div>

                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Contacto</h2>
                                <ul class="list-unstyled simple-list">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li><a href="#">Francisco papa</a></li>
                                    <li>...</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-3">
                        <div class="row">
                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Utilidades</h2>
                                <ul class="list-unstyled simple-list margin-bottom-20">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li>...</li>
                                </ul>
                            </div>

                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Documentos</h2>
                                <ul class="list-unstyled simple-list">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li>...</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Simple List -->
                </div><!--/end row-->
            </div><!--/end continer-->
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            2014 &copy; Unify. ALL Rights Reserved.
                            <a target="_blank" href="https://twitter.com/htmlstream">Htmlstream</a> | <a href="#">Privacy
                                Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline sponsors-icons pull-right">
                            <li><i class="fa fa-cc-paypal"></i></li>
                            <li><i class="fa fa-cc-visa"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-discover"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/copyright-->
    </div>
    <!--=== End Footer v4 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- JS Implementing Plugins -->
<script src="{{asset('plugins/back-to-top.js')}}"></script>
<script src="{{asset('plugins/smoothScroll.js')}}"></script>
<script src="{{asset('plugins/jquery.parallax.js')}}"></script>
<script src="{{asset('plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- JS Customization -->
<script src="{{asset('js/custom.js')}}"></script>
<!-- JS Page Level -->
<script src="{{asset('js/shop.app.js')}}"></script>
<script src="{{asset('js/plugins/owl-carousel.js')}}"></script>
<script src="{{asset('js/plugins/revolution-slider.js')}}"></script>
<script src="{{asset('js/plugins/style-switcher.js')}}"></script>
<script>
    jQuery(document).ready(function () {
        App.init();
        App.initScrollBar();
        App.initParallaxBg();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
        StyleSwitcher.initStyleSwitcher();
    });
</script>
@yield('js')
</body>
