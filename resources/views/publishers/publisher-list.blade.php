<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Product List | Unify - Responsive Website Template</title>

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
						<a class="navbar-brand" href="index')}}">
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
							<!-- Pages -->
							<li class="dropdown active">
								<a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
									Pages
								</a>
								<ul class="dropdown-menu">
									<li><a href="index')}}">Shop UI</a></li>
									<li><a href="{{route('book-inner')}}">Product Page</a></li>
									<li><a href="{{route('book-filter-grid')}}">Filter Grid Page</a></li>
									<li class="active"><a href="{{route('book-filter-list')}}">Filter List Page</a></li>
									<li><a href="{{route('book-add-to-cart')}}">Checkout</a></li>
									<li><a href="{{route('book-login')}}">Login</a></li>
									<li><a href="{{route('book-register')}}">Register</a></li>
								</ul>
							</li>
							<!-- End Pages -->

							<!-- Promotion -->
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
									Publishers
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a href="javascript:void(0);">Jeans</a>
										<ul class="dropdown-menu">
											<li><a href="#">Skinny Jeans</a></li>
											<li><a href="#">Bootcut Jeans</a></li>
											<li><a href="#">Straight Cut Jeans</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a href="javascript:void(0);">Shoes</a>
										<ul class="dropdown-menu">
											<li><a href="#">Sandals</a></li>
											<li><a href="#">Heels</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<!-- End Promotion -->

							<!-- Gifts -->
							<li class="dropdown mega-menu-fullwidth">
								<a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
									Gifts
								</a>
								<ul class="dropdown-menu">
									<li>
										<div class="mega-menu-content">
											<div class="container">
												<div class="row">
													<div class="col-md-3 col-sm-12 col-xs-12 md-margin-bottom-30">
														<h3 class="mega-menu-heading">Pellentes que nec diam lectus</h3>
														<p>Proin pulvinar libero quis auctor pharet ra. Aenean fermentum met us orci, sedf eugiat augue pulvina r vitae. Nulla dolor nisl, molestie nec aliquam vitae, gravida sodals dolor...</p>
														<button type="button" class="btn-u btn-u-dark">Read More</button>
													</div>
													<div class="col-md-3 col-sm-4 col-xs-4 md-margin-bottom-30">
														<a href="#"><img class="product-offers img-responsive" src="{{asset('img/blog/01.jpg')}}" alt=""></a>
													</div>
													<div class="col-md-3 col-sm-4 col-xs-4 sm-margin-bottom-30">
														<a href="#"><img class="product-offers img-responsive" src="{{asset('img/blog/02.jpg')}}" alt=""></a>
													</div>
													<div class="col-md-3 col-sm-4 col-xs-4">
														<a href="#"><img class="product-offers img-responsive" src="{{asset('img/blog/03.jpg')}}" alt=""></a>
													</div>
												</div><!--/end row-->
											</div><!--/end container-->
										</div><!--/end mega menu content-->
									</li>
								</ul><!--/end dropdown-menu-->
							</li>
							<!-- End Gifts -->

							<!-- Books -->
							<li class="dropdown mega-menu-fullwidth">
								<a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
									Books
								</a>
								<ul class="dropdown-menu">
									<li>
										<div class="mega-menu-content">
											<div class="container">
												<div class="row">
													<div class="col-md-2 col-sm-6">
														<h3 class="mega-menu-heading">Clothe</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">New in</a></li>
															<li><a href="#">Coats &amp; Jackets</a></li>
															<li><a href="#">Jeans</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Shorts</a> <span class="label label-danger-shop">New</span></li>
															<li><a href="#">Skirts</a></li>
															<li><a href="#">T-Shirts</a></li>
														</ul>
														<h3 class="mega-menu-heading">Shoes</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">Boots</a></li>
															<li><a href="#">FLats</a></li>
															<li><a href="#">Heels</a></li>
															<li><a href="#">Sandals</a></li>
															<li><a href="#">Sports</a></li>
														</ul>
													</div>

													<div class="col-md-2 col-sm-6">
														<h3 class="mega-menu-heading">Accessories</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">All accessories</a></li>
															<li><a href="#">Bags &amp; Purses</a></li>
															<li><a href="#">Scarvs &amp; Hats</a></li>
															<li><a href="#">Jewellery</a></li>
															<li><a href="#">Fragrance &amp; Beauty</a></li>
														</ul>
														<h3 class="mega-menu-heading">Lingerie</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">Linger</a> <span class="label label-danger-shop">New</span></li>
															<li><a href="#">Slippers</a></li>
														</ul>
														<h3 class="mega-menu-heading">Nightwear</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">Nightwear</a></li>
															<li><a href="#">Socks</a></li>
															<li><a href="#">Tights</a></li>
														</ul>
													</div>

													<div class="col-md-2 col-sm-6">
														<h3 class="mega-menu-heading">Mixed</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">New in</a></li>
															<li><a href="#">Coats &amp; Jackets</a> <span class="label label-danger-shop">New</span></li>
															<li><a href="#">Jeans</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Shorts</a></li>
															<li><a href="#">Skirts</a></li>
															<li><a href="#">T-shirts</a></li>
															<li><a href="#">Boots</a></li>
															<li><a href="#">Flats</a></li>
															<li><a href="#">Heels</a></li>
															<li><a href="#">Sandals</a></li>
															<li><a href="#">Sports</a></li>
															<li><a href="#">Socks</a></li>
															<li><a href="#">Tights</a></li>
														</ul>
													</div>

													<div class="col-md-2 col-sm-6">
														<h3 class="mega-menu-heading">Clothe</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">New in</a></li>
															<li><a href="#">Coats &amp; Jackets</a></li>
															<li><a href="#">Jeans</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Shorts</a> <span class="label label-danger-shop">New</span></li>
															<li><a href="#">Skirts</a></li>
															<li><a href="#">T-shirts</a></li>
														</ul>
														<h3 class="mega-menu-heading">Shoes</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">Boots</a></li>
															<li><a href="#">Flats</a></li>
															<li><a href="#">Heels</a></li>
															<li><a href="#">Sandals</a></li>
															<li><a href="#">Sports</a></li>
														</ul>
													</div>

													<div class="col-md-2 col-sm-6">
														<h3 class="mega-menu-heading">Accessories</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">All accessories</a></li>
															<li><a href="#">Bags &amp; Purses</a></li>
															<li><a href="#">Scarvs &amp; Hats</a></li>
															<li><a href="#">Jewellery</a></li>
															<li><a href="#">Fragrance &amp; Beauty</a></li>
														</ul>
														<h3 class="mega-menu-heading">Lingerie</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">Linger</a> <span class="label label-danger-shop">New</span></li>
															<li><a href="#">Slippers</a></li>
														</ul>
														<h3 class="mega-menu-heading">Nightwear</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">Nightwear</a></li>
															<li><a href="#">Socks</a></li>
															<li><a href="#">Tights</a></li>
														</ul>
													</div>

													<div class="col-md-2 col-sm-6">
														<h3 class="mega-menu-heading">Mixed</h3>
														<ul class="list-unstyled style-list">
															<li><a href="#">New in</a></li>
															<li><a href="#">Coats &amp; Jackets</a> <span class="label label-danger-shop">New</span></li>
															<li><a href="#">Jeans</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Shorts</a></li>
															<li><a href="#">Skirts</a></li>
															<li><a href="#">T-shirts</a></li>
															<li><a href="#">Boots</a></li>
															<li><a href="#">Flats</a></li>
															<li><a href="#">Heels</a></li>
															<li><a href="#">Sandals</a></li>
															<li><a href="#">Sports</a></li>
															<li><a href="#">Socks</a></li>
															<li><a href="#">Tights</a> <span class="label label-danger-shop">New</span></li>
														</ul>
													</div>
												</div><!--/end row-->
											</div><!--/end container-->
										</div><!--/end mega menu content-->
									</li>
								</ul><!--/end dropdown-menu-->
							</li>
							<!-- End Books -->

							<!-- Clothes -->
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="1000">
									Clothes
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Jeans</a></li>
									<li><a href="#">T-shirts</a></li>
									<li><a href="#">Shorts</a></li>
								</ul>
							</li>
							<!-- End Clothes -->

							<!-- Main Demo -->
							<li><a href="{{route('index')}}">Main Demo</a></li>
							<!-- Main Demo -->
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
					<li><a href="index')}}">Home</a></li>
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
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
										Brands
										<i class="fa fa-angle-down"></i>
									</a>
								</h2>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<ul class="list-unstyled checkbox-list">
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" checked />
												<i></i>
												Calvin Klein
												<small><a href="#">(23)</a></small>
											</label>
										</li>
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" checked />
												<i></i>
												Gucci
												<small><a href="#">(4)</a></small>
											</label>
										</li>
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" />
												<i></i>
												Adidas
												<small><a href="#">(11)</a></small>
											</label>
										</li>
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" />
												<i></i>
												Puma
												<small><a href="#">(3)</a></small>
											</label>
										</li>
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" />
												<i></i>
												Zara
												<small><a href="#">(87)</a></small>
											</label>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div><!--/end panel group-->

					<div class="panel-group" id="accordion-v2">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-v2" href="#collapseTwo">
										Categories
										<i class="fa fa-angle-down"></i>
									</a>
								</h2>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse in">
								<div class="panel-body">
									<ul class="list-unstyled checkbox-list">
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" checked />
												<i></i>
												Clothes
												<small><a href="#">(23)</a></small>
											</label>
										</li>
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" checked />
												<i></i>
												Glasses
												<small><a href="#">(4)</a></small>
											</label>
										</li>
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" />
												<i></i>
												Shoes
												<small><a href="#">(11)</a></small>
											</label>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div><!--/end panel group-->

					<div class="panel-group" id="accordion-v3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-v3" href="#collapseThree">
										Size
										<i class="fa fa-angle-down"></i>
									</a>
								</h2>
							</div>
							<div id="collapseThree" class="panel-collapse collapse in">
								<div class="panel-body">
									<ul class="list-unstyled checkbox-list">
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" />
												<i></i>
												S
												<small><a href="#">(23)</a></small>
											</label>
										</li>
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" checked />
												<i></i>
												M
												<small><a href="#">(4)</a></small>
											</label>
										</li>
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" />
												<i></i>
												L
												<small><a href="#">(11)</a></small>
											</label>
										</li>
										<li>
											<label class="checkbox">
												<input type="checkbox" name="checkbox" />
												<i></i>
												XL
												<small><a href="#">(3)</a></small>
											</label>
										</li>
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
									<div class="slider-snap"></div>
									<p class="slider-snap-text">
										<span class="slider-snap-value-lower"></span>
										<span class="slider-snap-value-upper"></span>
									</p>
								</div>
							</div>
						</div>
					</div><!--/end panel group-->

					<div class="panel-group" id="accordion-v5">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-v5" href="#collapseFive">
										Color
										<i class="fa fa-angle-down"></i>
									</a>
								</h2>
							</div>
							<div id="collapseFive" class="panel-collapse collapse in">
								<div class="panel-body">
									<ul class="list-inline product-color-list">
										<li><a href="#"><img src="{{asset('img/colors/01.jpg')}}" alt=""></a></li>
										<li><a href="#"><img src="{{asset('img/colors/02.jpg')}}" alt=""></a></li>
										<li><a href="#"><img src="{{asset('img/colors/03.jpg')}}" alt=""></a></li>
										<li><a href="#"><img src="{{asset('img/colors/04.jpg')}}" alt=""></a></li>
										<li><a href="#"><img src="{{asset('img/colors/05.jpg')}}" alt=""></a></li>
										<li><a href="#"><img src="{{asset('img/colors/06.jpg')}}" alt=""></a></li>
										<li><a href="#"><img src="{{asset('img/colors/07.jpg')}}" alt=""></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div><!--/end panel group-->

					<div class="panel-group margin-bottom-30" id="accordion-v6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-v6" href="#collapseSix">
										Rating
										<i class="fa fa-angle-down"></i>
									</a>
								</h2>
							</div>
							<div id="collapseSix" class="panel-collapse collapse in">
								<div class="panel-body">
									<div class="stars-ratings stars-ratings-label">
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
								</div>
							</div>
						</div>
					</div><!--/end panel group-->
					<button type="button" class="btn-u btn-brd btn-brd-hover btn-u-lg btn-u-sea-shop btn-block">Reset</button>
				</div>

				<div class="col-md-9">
					<div class="row margin-bottom-5">
						<div class="col-sm-4 result-category">
							<h2>Men</h2>
							<small class="shop-bg-red badge-results">45 Results</small>
						</div>
						<div class="col-sm-8">
							<ul class="list-inline clear-both">
								<li class="grid-list-icons">
									<a href="{{route('book-filter-list')}}"><i class="fa fa-th-list"></i></a>
									<a href="{{route('book-filter-grid')}}"><i class="fa fa-th"></i></a>
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
						<div class="list-product-description product-description-brd margin-bottom-30">
							<div class="row">
								<div class="col-sm-4">
									<a href="{{route('book-inner')}}"><img class="img-responsive sm-margin-bottom-20" src="{{asset('img/blog/16.jpg')}}" alt=""></a>
								</div>
								<div class="col-sm-8 product-description">
									<div class="overflow-h margin-bottom-5">
										<ul class="list-inline overflow-h">
											<li><h4 class="title-price"><a href="{{route('book-inner')}}">Double-breasted</a></h4></li>
											<li><span class="gender text-uppercase">Men</span></li>
											<li class="pull-right">
												<ul class="list-inline product-ratings">
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating fa fa-star"></i></li>
													<li><i class="rating fa fa-star"></i></li>
												</ul>
											</li>
										</ul>
										<div class="margin-bottom-10">
											<span class="title-price margin-right-10">$60.00</span>
											<span class="title-price line-through">$95.00</span>
										</div>
										<p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin erat nec ornarevolu tpat. Etiam ut felis nec nisl eleifend lobortis. Aenean nibh est, hendrerit non conva.</p>
										<ul class="list-inline add-to-wishlist margin-bottom-20">
											<li class="wishlist-in">
												<i class="fa fa-heart"></i>
												<a href="#">Add to Wishlist</a>
											</li>
											<li class="compare-in">
												<i class="fa fa-exchange"></i>
												<a href="#">Add to Compare</a>
											</li>
										</ul>
										<button type="button" class="btn-u btn-u-sea-shop">Add to Cart</button>
									</div>
								</div>
							</div>
						</div>

						<div class="list-product-description product-description-brd margin-bottom-30">
							<div class="row">
								<div class="col-sm-4">
									<a href="{{route('book-inner')}}"><img class="img-responsive sm-margin-bottom-20" src="{{asset('img/blog/17.jpg')}}" alt=""></a>
								</div>
								<div class="col-sm-8 product-description">
									<div class="overflow-h margin-bottom-5">
										<ul class="list-inline overflow-h">
											<li><h4 class="title-price"><a href="{{route('book-inner')}}">Double-breasted</a></h4></li>
											<li><span class="gender text-uppercase">Men</span></li>
											<li class="pull-right">
												<ul class="list-inline product-ratings">
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating fa fa-star"></i></li>
													<li><i class="rating fa fa-star"></i></li>
												</ul>
											</li>
										</ul>
										<div class="margin-bottom-10">
											<span class="title-price margin-right-10">$60.00</span>
											<span class="title-price line-through">$95.00</span>
										</div>
										<p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin erat nec ornarevolu tpat. Etiam ut felis nec nisl eleifend lobortis. Aenean nibh est, hendrerit non conva.</p>
										<ul class="list-inline add-to-wishlist margin-bottom-20">
											<li class="wishlist-in">
												<i class="fa fa-heart"></i>
												<a href="#">Add to Wishlist</a>
											</li>
											<li class="compare-in">
												<i class="fa fa-exchange"></i>
												<a href="#">Add to Compare</a>
											</li>
										</ul>
										<button type="button" class="btn-u btn-u-sea-shop">Add to Cart</button>
									</div>
								</div>
							</div>
						</div>

						<div class="list-product-description product-description-brd margin-bottom-30">
							<div class="row">
								<div class="col-sm-4">
									<a href="{{route('book-inner')}}"><img class="img-responsive sm-margin-bottom-20" src="{{asset('img/blog/21.jpg')}}" alt=""></a>
								</div>
								<div class="col-sm-8 product-description">
									<div class="overflow-h margin-bottom-5">
										<ul class="list-inline overflow-h">
											<li><h4 class="title-price"><a href="{{route('book-inner')}}">Double-breasted</a></h4></li>
											<li><span class="gender text-uppercase">Men</span></li>
											<li class="pull-right">
												<ul class="list-inline product-ratings">
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating fa fa-star"></i></li>
													<li><i class="rating fa fa-star"></i></li>
												</ul>
											</li>
										</ul>
										<div class="margin-bottom-10">
											<span class="title-price margin-right-10">$60.00</span>
											<span class="title-price line-through">$95.00</span>
										</div>
										<p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin erat nec ornarevolu tpat. Etiam ut felis nec nisl eleifend lobortis. Aenean nibh est, hendrerit non conva.</p>
										<ul class="list-inline add-to-wishlist margin-bottom-20">
											<li class="wishlist-in">
												<i class="fa fa-heart"></i>
												<a href="#">Add to Wishlist</a>
											</li>
											<li class="compare-in">
												<i class="fa fa-exchange"></i>
												<a href="#">Add to Compare</a>
											</li>
										</ul>
										<button type="button" class="btn-u btn-u-sea-shop">Add to Cart</button>
									</div>
								</div>
							</div>
						</div>

						<div class="list-product-description product-description-brd margin-bottom-30">
							<div class="row">
								<div class="col-sm-4">
									<a href="{{route('book-inner')}}"><img class="img-responsive sm-margin-bottom-20" src="{{asset('img/blog/22.jpg')}}" alt=""></a>
								</div>
								<div class="col-sm-8 product-description">
									<div class="overflow-h margin-bottom-5">
										<ul class="list-inline overflow-h">
											<li><h4 class="title-price"><a href="{{route('book-inner')}}">Double-breasted</a></h4></li>
											<li><span class="gender text-uppercase">Men</span></li>
											<li class="pull-right">
												<ul class="list-inline product-ratings">
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating fa fa-star"></i></li>
													<li><i class="rating fa fa-star"></i></li>
												</ul>
											</li>
										</ul>
										<div class="margin-bottom-10">
											<span class="title-price margin-right-10">$60.00</span>
											<span class="title-price line-through">$95.00</span>
										</div>
										<p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin erat nec ornarevolu tpat. Etiam ut felis nec nisl eleifend lobortis. Aenean nibh est, hendrerit non conva.</p>
										<ul class="list-inline add-to-wishlist margin-bottom-20">
											<li class="wishlist-in">
												<i class="fa fa-heart"></i>
												<a href="#">Add to Wishlist</a>
											</li>
											<li class="compare-in">
												<i class="fa fa-exchange"></i>
												<a href="#">Add to Compare</a>
											</li>
										</ul>
										<button type="button" class="btn-u btn-u-sea-shop">Add to Cart</button>
									</div>
								</div>
							</div>
						</div>

						<div class="list-product-description product-description-brd">
							<div class="row">
								<div class="col-sm-4">
									<a href="{{route('book-inner')}}"><img class="img-responsive sm-margin-bottom-20" src="{{asset('img/blog/23.jpg')}}" alt=""></a>
								</div>
								<div class="col-sm-8 product-description">
									<div class="overflow-h margin-bottom-5">
										<ul class="list-inline overflow-h">
											<li><h4 class="title-price"><a href="{{route('book-inner')}}">Double-breasted</a></h4></li>
											<li><span class="gender text-uppercase">Men</span></li>
											<li class="pull-right">
												<ul class="list-inline product-ratings">
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating-selected fa fa-star"></i></li>
													<li><i class="rating fa fa-star"></i></li>
													<li><i class="rating fa fa-star"></i></li>
												</ul>
											</li>
										</ul>
										<div class="margin-bottom-10">
											<span class="title-price margin-right-10">$60.00</span>
											<span class="title-price line-through">$95.00</span>
										</div>
										<p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin erat nec ornarevolu tpat. Etiam ut felis nec nisl eleifend lobortis. Aenean nibh est, hendrerit non conva.</p>
										<ul class="list-inline add-to-wishlist margin-bottom-20">
											<li class="wishlist-in">
												<i class="fa fa-heart"></i>
												<a href="#">Add to Wishlist</a>
											</li>
											<li class="compare-in">
												<i class="fa fa-exchange"></i>
												<a href="#">Add to Compare</a>
											</li>
										</ul>
										<button type="button" class="btn-u btn-u-sea-shop">Add to Cart</button>
									</div>
								</div>
							</div>
						</div>
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
							<a href="index')}}"><img class="footer-logo" src="{{asset('img/logo-2.png')}}" alt=""></a>
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
		<div class="g-popup g-popup--subscribe2">
			<div class="g-popup--subscribe2-message">
				<span class="icon-envelope-letter icon" aria-hidden="true"></span>

				<h3>Subscribe To Our Newsletter</h3>
				<p>Join our mailing list to receive the latest news &amp;&nbsp;updates from our team.</p>
			</div>
			<form action="#" class="sky-form">
				<div class="row">
					<section class="col-sm-9">
						<label class="input">
							<input type="email" placeholder="Email" class="form-control">
						</label>
					</section>
					<section class="col-sm-3">
						<label class="input">
							<button class="btn btn-default" type="button">Subscribe</button>
						</label>
					</section>
				</div>
			</form>

			<a href="javascript:void(0);" class="g-popup__close g-popup--subscribe2__close"><span class="icon-close" aria-hidden="true"></span></a>
		</div>
	</div>
	<!-- End Wait Block -->

	<!-- JS Global Compulsory -->
	<script src="{{asset('plugins/jquery/jquery.min.js"></script>
	<script src="{{asset('plugins/jquery/jquery-migrate.min.js"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script src="{{asset('plugins/back-to-top.js"></script>
	<script src="{{asset('plugins/smoothScroll.js"></script>
	<script src="{{asset('plugins/noUiSlider/jquery.nouislider.all.min.js"></script>
	<script src="{{asset('plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- JS Customization -->
	<script src="{{asset('js/custom.js"></script>
	<!-- JS Page Level -->
	<script src="{{asset('js/shop.app.js"></script>
	<script src="{{asset('js/plugins/mouse-wheel.js"></script>
	<script src="{{asset('js/plugins/style-switcher.js"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
			App.initScrollBar();
			MouseWheel.initMouseWheel();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
<!--[if lt IE 9]>
	<script src="{{asset('plugins/respond.js"></script>
	<script src="{{asset('plugins/html5shiv.js"></script>
	<script src="{{asset('js/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
<!--[if lt IE 10]>
	<script src="{{asset('plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->

</body>
</html>