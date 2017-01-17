 <!DOCTYPE html>
 <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
 <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
 <!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
 <head>
 	<title>Product Grid | Unify - Responsive Website Template</title>

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
 	<link rel="stylesheet" href="{{asset('plugins/noUiSlider/jquery.nouislider.min.css')}}">
 	<link rel="stylesheet" href="{{asset('plugins/scrollbar/css/jquery.mCustomScrollbar.css')}}">

 	<!-- Style Switcher -->
 	<link rel="stylesheet" href="{{asset('css/plugins/style-switcher.css')}}">

 	<!-- CSS Theme -->
 	<link rel="stylesheet" href="{{asset('css/theme-colors/default.css')}}" id="style_color">

 	<!-- CSS Customization -->
 	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
 </head>

 <body class="header-fixed">

 	<div class="wrapper">
 		<!--=== Header v5 ===-->
 		<div class="header-v5 header-static">
 			<!-- Topbar v3 -->
 			<div class="topbar-v3">
 				<div class="search-open">
 					<div class="container">
 						<form id="book-quick-searching" method="get" action="{{route('searchs.quickSearch')}}">
	 						<input type="text" name="title" class="form-control" placeholder="Search by title">
	 						<i class="icon-close search-close"></i>
						</form>
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
 								<li><a href="{{route('book-add-to-cart')}}">Wishlist (0)</a></li>
 								<li><a href="{{route('book-login')}}">Login</a> | <a href="{{route('book-register')}}">Register</a></li>
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
 						<a class="navbar-brand" href="{{route('index')}}">
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
 										<a href="{{route('book-inner')}}" class="btn-u btn-brd btn-brd-hover btn-u-sea-shop btn-block">View Cart</a>
 									</div>
 									<div class="col-xs-6">
 										<a href="{{route('book-add-to-cart')}}" class="btn-u btn-u-sea-shop btn-block">Checkout</a>
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
 							<!-- End publisher -->
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
 							<!-- End genre -->
 							<!-- About Us -->
	                        <li>
	                        	<a href="{{route('book-filter')}}">About Us</a>
	                        </li>
	                        <!-- End About Us -->
 						</ul>
 						<!-- End Nav Menu -->
 					</div>
 				</div>
 			</div>
 			<!-- End Navbar -->
 		</div>
 		<!--=== End Header v5 ===-->

 		<!--=== Breadcrumbs v4 ===-->
 		<div class="breadcrumbs-v4">
 			<div class="container">
 				<span class="page-name">Product Filter Page</span>
 				<h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
 				<ul class="breadcrumb-v4-in">
 					<li><a href="{{route('index')}}">Home</a></li>
 					<li><a href="">Product</a></li>
 					<li class="active">Product Filter Page</li>
 				</ul>
 			</div><!--/end container-->
 		</div>
 		<!--=== End Breadcrumbs v4 ===-->

 		<!--=== Content Part ===-->
 		<div class="content container">
 			<div class="row">
 				<div class="col-md-3 filter-by-block md-margin-bottom-60">
 					<h1>Filter By</h1>
 					<form method="get" action="{{route('searchs.advanceSearch')}}" >
 					<div class="panel-group" id="accordion">
 						<div class="panel panel-default">
 							<div class="panel-heading">
 								<h2 class="panel-title">
 									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
 										Title
 										<i class="fa fa-angle-down"></i>
 									</a>
 								</h2>
 							</div>
 							<div id="collapseOne" class="panel-collapse collapse in">
 								<div class="panel-body">
	 								<input type="text" name="title" class="form-control" placeholder="fill title">
 								</div>
 							</div>
 						</div>
 					</div><!--/end panel group-->

 					<div class="panel-group" id="accordion-v2">
 						<div class="panel panel-default">
 							<div class="panel-heading">
 								<h2 class="panel-title">
 									<a data-toggle="collapse" data-parent="#accordion-v2" href="#collapseTwo">
 										Author
 										<i class="fa fa-angle-down"></i>
 									</a>
 								</h2>
 							</div>
 							<div id="collapseTwo" class="panel-collapse collapse in">
 								<div class="panel-body">
 									<input type="text" name="author" placeholder="fill author" value="{{old('author')}}">
 								</div>
 							</div>
 						</div>
 					</div><!--/end panel group-->
 					
 					<div class="panel-group" id="accordion-v3">
 						<div class="panel panel-default">
 							<div class="panel-heading">
 								<h2 class="panel-title">
 									<a data-toggle="collapse" data-parent="#accordion-v3" href="#collapseThree">
 										Publisher
 										<i class="fa fa-angle-down"></i>
 									</a>
 								</h2>
 							</div>
 							<div id="collapseThree" class="panel-collapse collapse in">
 								<div class="panel-body">
 									<ul class="list-unstyled checkbox-list">
 										@foreach($books as $book)
	 										<li>
	 											<label class="checkbox">
	 												<input type="checkbox" name="publisher[]" value="{{$book->publisher}}"/>
	 												<i></i>
	 												{{$book->publisher}}
	 											</label>
	 										</li>
 										@endforeach
 									</ul>
 								</div>
 							</div>
 						</div>
 					</div><!--/end panel group-->
 					
 					<div class="panel-group" id="accordion-v4">
 						<div class="panel panel-default">
 							<div class="panel-heading">
 								<h2 class="panel-title">
 									<a data-toggle="collapse" data-parent="#accordion-v4" href="#collapseFour">
 										Price
 										<i class="fa fa-angle-down"></i>
 									</a>
 								</h2>
 							</div>
 							<div id="collapseFour" class="panel-collapse collapse in">
 								<div class="panel-body">
 									<div class="slider-snap" id="slider-price"></div>
 									<p class="slider-snap-text">
 										<span class="slider-snap-value-lower"></span>
 										<span class="slider-snap-value-upper"></span>
 									</p>
 								</div>
 							</div>
 						</div>
 					</div><!--/end panel group-->
 					<input type="submit" name="search" class="btn-success" value="search">
 					</form>
 				</div>

 				<div class="col-md-9">
 					<div class="row margin-bottom-5">
 						<div class="col-sm-12">
 							<ul class="list-inline clear-both">
 								<li class="grid-list-icons">
 									<a href="{{route('book-filter')}}"><i class="fa fa-th"></i></a>
 								</li>
 								<li class="sort-list-btn">
 									<h3>Sort By :</h3>
 									<div class="btn-group">
 										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
 											Popularity <span class="caret"></span>
 										</button>
 										<ul class="dropdown-menu" role="menu">
 											<li><a href="#">All</a></li>
 											<li><a href="#">Best Sales</a></li>
 											<li><a href="#">Top Last Week Sales</a></li>
 											<li><a href="#">New Arrived</a></li>
 										</ul>
 									</div>
 								</li>
 								<li class="sort-list-btn">
 									<h3>Show :</h3>
 									<div class="btn-group">
 										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
 											20 <span class="caret"></span>
 										</button>
 										<ul class="dropdown-menu" role="menu">
 											<li><a href="#">All</a></li>
 											<li><a href="#">10</a></li>
 											<li><a href="#">5</a></li>
 											<li><a href="#">3</a></li>
 										</ul>
 									</div>
 								</li>
 							</ul>
 						</div>
 					</div><!--/end result category-->

 					<div class="filter-results">
 						@if(count($books))
 						@foreach($books as $book)

 						<div class="row illustration-v2 margin-bottom-30">
 							<div class="col-md-4">
 								<div class="product-img product-img-brd">
 									<a href="#"><img class="full-width img-responsive" src="{{$book->image}}" alt=""></a>
 									<a class="product-review" href="{{route('book-inner')}}">Quick review</a>
 									<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
 								</div>
 								<div class="product-description product-description-brd margin-bottom-30">
 									<div class="overflow-h margin-bottom-5">
 										<div class="pull-left">
 											<h4 class="title-price"><a href="{{route('books.detail',['id'=>$book->id])}}">{{$book->title}}</a></h4>
 											<span class="gender text-uppercase">{{$book->publisher}}</span>
 											<span class="gender">{{$book->genre}}</span>
 										</div>
 										<div class="product-price">
 											<span class="title-price">{{$book->price}}</span>
 										</div>
 									</div>
 									<ul class="list-inline product-ratings">
 										<li><i class="rating-selected fa fa-star"></i></li>
 										<li><i class="rating-selected fa fa-star"></i></li>
 										<li><i class="rating-selected fa fa-star"></i></li>
 										<li><i class="rating fa fa-star"></i></li>
 										<li><i class="rating fa fa-star"></i></li>
 										<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
 									</ul>
 								</div>
 							</div>
 						</div>

 						@endforeach
 						@else
 							<p> No results found!</p>
 						@endif
 					</div><!--/end filter resilts-->

 					<div class="text-center">
 						<ul class="pagination pagination-v2">
 							<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
 							<li><a href="#">1</a></li>
 							<li class="active"><a href="#">2</a></li>
 							<li><a href="#">3</a></li>
 							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
 						</ul>
 					</div><!--/end pagination-->
 				</div>
 			</div><!--/end row-->
 		</div><!--/end container-->
 		<!--=== End Content Part ===-->

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
 							<a href="{{route('index')}}"><img class="footer-logo" src="{{asset('img/logo-2.png')}}" alt=""></a>
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
 		<div class="g-popup g-popup--subscribe3">
 			<h3>Subscribe To Our Newsletter</h3>
 			<p>Join our mailing list to receive the latest news &amp;&nbsp;updates from our team.</p>
 			<form action="#" class="sky-form">
 				<label class="input margin-bottom-20">
 					<input type="email" placeholder="Email" class="form-control">
 				</label>
 				<label class="input">
 					<button class="btn btn-default" type="button">Subscribe</button>
 				</label>
 			</form>

 			<a href="javascript:void(0);" class="g-popup__close g-popup--subscribe3__close"><span class="icon-close" aria-hidden="true"></span></a>
 		</div>
 	</div>
 	<!-- End Wait Block -->

 	<!-- JS Global Compulsory -->
 	<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
 	<script src="{{asset('plugins/jquery/jquery-migrate.min.js')}}"></script>
 	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
 	<!-- JS Implementing Plugins -->
 	<script src="{{asset('plugins/back-to-top.js')}}"></script>
 	<script src="{{asset('plugins/smoothScroll.js')}}"></script>
 	<script src="{{asset('plugins/noUiSlider/jquery.nouislider.all.min.js')}}"></script>
 	<script src="{{asset('plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
 	<!-- JS Customization -->
 	<script src="{{asset('js/custom.js')}}"></script>
 	<!-- JS Page Level -->
 	<script src="{{asset('js/shop.app.js')}}"></script>
 	<script src="{{asset('js/plugins/mouse-wheel.js')}}"></script>
 	<script src="{{asset('js/plugins/style-switcher.js')}}"></script>
 	<script>
 		jQuery(document).ready(function() {
 			App.init();
 			App.initScrollBar();
 			MouseWheel.initMouseWheel();
 			StyleSwitcher.initStyleSwitcher();

 		});
		
</script>
 	</script>
<!--[if lt IE 9]>
	<script src="{{asset('plugins/respond.js')}}"></script>
	<script src="{{asset('plugins/html5shiv.js')}}"></script>
	<script src="{{asset('js/plugins/placeholder-IE-fixes.js')}}"></script>
	<![endif]-->
<!--[if lt IE 10]>
	<script src="{{asset('plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js')}}"></script>
	<![endif]-->

</body>
</html>
