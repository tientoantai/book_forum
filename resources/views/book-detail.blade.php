<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Product Details | Unify - Responsive Website Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/shop.style.css')}}">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{asset('css/headers/header-v5.css')}}">
    <link rel="stylesheet" href="{{asset('css/footers/footer-v4.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/scrollbar/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/sky-forms-pro/skyforms/css/sky-forms.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/master-slider/masterslider/style/masterslider.css')}}">
    <link rel='stylesheet' href="{{asset('plugins/master-slider/masterslider/skins/default/style.css')}}">

    <!-- Style Switcher -->
    <link rel="stylesheet" href="{{asset('css/plugins/style-switcher.css')}}">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{asset('css/theme-colors/default.css')}}" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <script src="{{asset('plugins/master-slider/masterslider.js')}}"></script>
    <script src="{{asset('plugins/master-slider/masterslider.min.js')}}"></script>
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
                        <!-- Topbar Navigation -->
                        <ul class="left-topbar">
                            <li>
                                <a>Currency (USD)</a>
                                <ul class="currency">
                                    <li class="active">
                                        <a href="#">USD <i class="fa fa-check"></i></a>
                                    </li>
                                    <li><a href="#">Euro</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </li>
                            <li>
                                <a>Language (EN)</a>
                                <ul class="language">
                                    <li class="active">
                                        <a href="#">English (EN)<i class="fa fa-check"></i></a>
                                    </li>
                                    <li><a href="#">Spanish (SPN)</a></li>
                                    <li><a href="#">Russian (RUS)</a></li>
                                    <li><a href="#">German (GRM)</a></li>
                                </ul>
                            </li>
                        </ul><!--/end left-topbar-->
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline right-topbar pull-right">
                            <li><a href="#">Account</a></li>
                            <li><a href="shop-ui-add-to-cart.html">Wishlist (0)</a></li>
                            <li><a href="shop-ui-login.html">Login</a> | <a href="shop-ui-register.html">Register</a></li>
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img id="logo-header" src="{{asset('img/logo.png')}}" alt="Logo">
                    </a>
                </div>

                <!-- Shopping Cart -->
                <div class="shop-badge badge-icons pull-right">
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    <span class="badge badge-sea rounded-x">3</span>
                    <div class="badge-open">
                        <ul class="list-unstyled mCustomScrollbar" data-mcs-theme="minimal-dark">
                            <li>
                                <img src="{{asset('img/thumb/05.jpg')}}" alt="">
                                <button type="button" class="close">×</button>
                                <div class="overflow-h">
                                    <span>Black Glasses</span>
                                    <small>1 x $400.00</small>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('img/thumb/02.jpg')}}" alt="">
                                <button type="button" class="close">×</button>
                                <div class="overflow-h">
                                    <span>Black Glasses</span>
                                    <small>1 x $400.00</small>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('img/thumb/03.jpg')}}" alt="">
                                <button type="button" class="close">×</button>
                                <div class="overflow-h">
                                    <span>Black Glasses</span>
                                    <small>1 x $400.00</small>
                                </div>
                            </li>
                        </ul>
                        <div class="subtotal">
                            <div class="overflow-h margin-bottom-10">
                                <span>Subtotal</span>
                                <span class="pull-right subtotal-cost">$1200.00</span>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="shop-ui-inner.html" class="btn-u btn-brd btn-brd-hover btn-u-sea-shop btn-block">View Cart</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="shop-ui-add-to-cart.html" class="btn-u btn-u-sea-shop btn-block">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Shopping Cart -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <!-- Nav Menu -->
                    <ul class="nav navbar-nav">
                        <!-- Books -->
                        <li class="dropdown active">
                            <a href="{{route('book-filter')}}">Books</a>
                        </li>
                        <!-- End Books -->
                        <!-- Publisher -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="1000">
                                Publisher
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">T-shirts</a></li>
                                <li><a href="#">Shorts</a></li>
                            </ul>
                        </li>
                        <!-- End Publisher -->
                        <!-- Genre -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="1000">
                                Genre
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">T-shirts</a></li>
                                <li><a href="#">Shorts</a></li>
                            </ul>
                        </li>
                        <!-- End Genre -->
                        <!-- About Us -->
                        <li><a href="{{route('book-filter')}}">About Us</a></li>
                        <!-- End About Us -->
                    </ul>
                    <!-- End Nav Menu -->
                </div>
            </div>
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v5 ===-->
    <!--=== Shop Product ===-->
    <div class="shop-product">
        <!-- Breadcrumbs v5 -->
        <div class="container">
            <ul class="breadcrumb-v5">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Products</a></li>
                <li class="active">New</li>
            </ul>
        </div>
        <!-- End Breadcrumbs v5 -->

        <div class="container">
            <div class="row">
                <div class="col-md-4 md-margin-bottom-50">
                    <div class="ms-showcase2-template">
                        <img class="full-width img-responsive" src="{{asset($book->image)}}" alt="" style="width:70%">
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="shop-product-heading">
                        <h2>{{$book->title}}</h2>
                        <ul class="list-inline shop-product-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div><!--/end shop product social-->

                    <ul class="list-inline product-ratings margin-bottom-30">
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li class="product-review-list">
                            <span>(1) <a href="#">Review</a> | <a href="#"> Add Review</a></span>
                        </li>
                    </ul><!--/end shop product ratings-->

                    <p>Integer <strong>dapibus ut elit</strong> non volutpat. Integer auctor purus a lectus suscipit fermentum. Vivamus lobortis nec erat consectetur elementum.</p><br>

                    <ul class="list-inline shop-product-prices margin-bottom-30">
                        <li class="shop-red">{{$book['price']}}</li>
                        <li><small class="shop-bg-red time-day-left">4 days left</small></li>
                    </ul><!--/end shop product prices-->

                    <h3 class="shop-product-title">Author</h3>
                                <span>{{$book['author'] . $book->author}}</span>


                    <h3 class="shop-product-title">Color</h3>
                    <span>{{$book['publisher']}}</span>


                </div>
            </div><!--/end robw-->
        </div>
    </div>
    <!--=== End Shop Product ===-->

    <!--=== Content Medium ===-->
    <div class="content-md container">
        <!--=== Product Service ===-->
        <div class="row margin-bottom-60">
            <div class="col-md-4 product-service md-margin-bottom-30">
                <div class="product-service-heading">
                    <i class="fa fa-truck"></i>
                </div>
                <div class="product-service-in">
                    <h3>Free Delivery</h3>
                    <p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
            <div class="col-md-4 product-service md-margin-bottom-30">
                <div class="product-service-heading">
                    <i class="icon-earphones-alt"></i>
                </div>
                <div class="product-service-in">
                    <h3>Customer Service</h3>
                    <p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
            <div class="col-md-4 product-service">
                <div class="product-service-heading">
                    <i class="icon-refresh"></i>
                </div>
                <div class="product-service-in">
                    <h3>Free Returns</h3>
                    <p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
        </div><!--/end row-->
        <!--=== End Product Service ===-->

        <div class="tab-v6">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
                <li><a href="#reviews" role="tab" data-toggle="tab">Reviews (1)</a></li>
            </ul>

            <div class="tab-content">
                <!-- Description -->
                <div class="tab-pane fade in active" id="description">
                    <div class="row">
                        <div class="col-md-7">
                            <p>Morbi non semper est, eget tincidunt turpis. Vivamus sollicitudin sodales nisi, et venenatis turpis Vivamus sollicitudin ultricies eget. Fusce vitae neque blandit lectus faucibus aliquet nec vel ipsum. Integer mattis lacinia felis vel sollicitudin molestie.</p><br>

                            <h3 class="heading-md margin-bottom-20">Specifies</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled specifies-list">
                                        <li><i class="fa fa-caret-right"></i>Brand Name: <span>Lacoste</span></li>
                                        <li><i class="fa fa-caret-right"></i>Technics: <span>Computer</span> Knitted</li>
                                        <li><i class="fa fa-caret-right"></i>Sleeve Length: <span>Full</span></li>
                                        <li><i class="fa fa-caret-right"></i>Sleeve Style: <span>Regular</span></li>
                                        <li><i class="fa fa-caret-right"></i>Pattern Type: <span>PAID</span></li>
                                        <li><i class="fa fa-caret-right"></i>Style: <span>Casual</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled specifies-list">
                                        <li><i class="fa fa-caret-right"></i>Material: <span>Cotton,Nylon</span></li>
                                        <li><i class="fa fa-caret-right"></i>Item Type: <span>Pullovers</span></li>
                                        <li><i class="fa fa-caret-right"></i>Thickness: <span>Thin</span></li>
                                        <li><i class="fa fa-caret-right"></i>Model Number: <span>TM-11013 </span></li>
                                        <li><i class="fa fa-caret-right"></i>Gender: <span>Men</span></li>
                                        <li><i class="fa fa-caret-right"></i>MATERIAL: <span>80%COTTON+10%NYLON</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="responsive-video">
                                <iframe src="//player.vimeo.com/video/72343553" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Description -->

                <!-- Reviews -->
                <div class="tab-pane fade" id="reviews">
                    <div class="product-comment margin-bottom-40">
                        <div class="product-comment-in">
                            <img class="product-comment-img rounded-x" src="{{asset('img/team/01.jpg')}}" alt="">
                            <div class="product-comment-dtl">
                                <h4>Mickel <small>22 days ago</small></h4>
                                <p>I like the green colour, it's very likeable and reminds me of Hollister. A little loose though but I am very skinny</p>
                                <ul class="list-inline product-ratings">
                                    <li class="reply"><a href="#">Reply</a></li>
                                    <li class="pull-right">
                                        <ul class="list-inline">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3 class="heading-md margin-bottom-30">Add a review</h3>
                    <form action="{{asset('php/demo-contacts-process.php')}}" method="post" id="sky-form3" class="sky-form sky-changes-4">
                                <fieldset>
                                    <div class="margin-bottom-30">
                                        <label class="label-v2">Name</label>
                                        <label class="input">
                                            <input type="text" name="name" id="name">
                                        </label>
                                    </div>

                                    <div class="margin-bottom-30">
                                        <label class="label-v2">Email</label>
                                        <label class="input">
                                            <input type="email" name="email" id="email">
                                        </label>
                                    </div>

                                    <div class="margin-bottom-30">
                                        <label class="label-v2">Review</label>
                                        <label class="textarea">
                                            <textarea rows="7" name="message" id="message"></textarea>
                                        </label>
                                    </div>
                                </fieldset>

                                <footer class="review-submit">
                                    <label class="label-v2">Review</label>
                                    <div class="stars-ratings">
                                        <input type="radio" name="stars-rating" id="stars-rating-5">
                                        <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="stars-rating" id="stars-rating-4">
                                        <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="stars-rating" id="stars-rating-3">
                                        <label for="stars-rating-3"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="stars-rating" id="stars-rating-2">
                                        <label for="stars-rating-2"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="stars-rating" id="stars-rating-1">
                                        <label for="stars-rating-1"><i class="fa fa-star"></i></label>
                                    </div>
                                    <button type="button" class="btn-u btn-u-sea-shop btn-u-sm pull-right">Submit</button>
                                </footer>
                                </form>
                    </div>
                    <!-- End Reviews -->
                </div>
            </div>
        </div><!--/end container-->
        <!--=== End Content Medium ===-->

        <!--=== Illustration v2 ===-->
        <div class="container">
            <div class="heading heading-v1 margin-bottom-20">
                <h2>Product you may like</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
            </div>

            <div class="illustration-v2 margin-bottom-60">
                <div class="customNavigation margin-bottom-25">
                    <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
                    <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
                </div>

                <ul class="list-inline owl-slider-v4">
                    <li class="item">
                        <a href="#"><img class="img-responsive" src="{{asset('img/thumb/09.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <a href="#"><img class="img-responsive" src="{{asset('img/thumb/07.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$60.00</span>
                            <span class="title-price line-through">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <a href="#"><img class="img-responsive" src="{{asset('img/thumb/08.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <a href="#"><img class="img-responsive" src="{{asset('img/thumb/06.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <a href="#"><img class="img-responsive" src="{{asset('img/thumb/04.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <a href="#"><img class="img-responsive" src="{{asset('img/thumb/03.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--=== End Illustration v2 ===-->

    <!--=== Shop Suvbscribe ===-->
    <div class="shop-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-8 md-margin-bottom-20">
                    <h2>subscribe to our weekly <strong>newsletter</strong></h2>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email your email...">
                        <span class="input-group-btn">
								<button class="btn" type="button"><i class="fa fa-envelope-o"></i></button>
							</span>
                    </div>
                </div>
            </div>
        </div><!--/end container-->
    </div>
    <!--=== End Shop Suvbscribe ===-->

    <!--=== Footer v4 ===-->
    <div class="footer-v4">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-4 md-margin-bottom-40">
                        <a href="index.html"><img class="footer-logo" src="{{asset('img/logo-2.png')}}" alt=""></a>
                        <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
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
                    <a target="_blank" href="https://twitter.com/htmlstream">Htmlstream</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                </p>
            </div>
            <div class="col-md-6">
                <ul class="list-inline sponsors-icons pull-right">
                    <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                    <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                    <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                    <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!--/copyright-->
</div>
<!--=== End Footer v4 ===-->
</div><!--/wrapper-->

<!-- Wait Block -->
<div class="g-popup-wrapper">
    <div class="g-popup g-popup--discount">
        <p class="margin-bottom-5">Enter your email and get</p>
        <h3>20% off </h3>
        <p class="margin-bottom-40">your first purchase</p>
        <form action="#" class="sky-form">
            <label class="input margin-bottom-20">
                <input type="email" placeholder="Your email address" class="form-control">
            </label>
            <label class="input">
                <button class="btn btn-default" type="button">Subscribe</button>
            </label>
        </form>

        <a href="javascript:void(0);" class="g-popup__close g-popup--discount__close"><span class="icon-close" aria-hidden="true"></span></a>
    </div>
</div>
<!-- End Wait Block -->

<!-- JS Global Compulsory -->

<script>
    jQuery(document).ready(function() {
        App.init();
        App.initScrollBar();
        OwlCarousel.initOwlCarousel();
        StyleSwitcher.initStyleSwitcher();
        MasterSliderShowcase2.initMasterSliderShowcase2();
    });
</script>

<!--[if lt IE 9]>
<script src="{{asset('plugins/respond.js')}}"></script>
<script src="{{asset('plugins/html5shiv.js')}}"></script>
<script src="{{asset('js/plugins/placeholder-IE-fixes.js')}}"></script>
<![endif]-->

</body>
</html>
