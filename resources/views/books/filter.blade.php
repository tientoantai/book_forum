@extends('books.layout')
@section('title', 'Book Filter')
@section('login')
    <li><a href="{{route('login.index')}}">Login</a> | <a href="">Register</a></li>
@endsection
@section('search')
    <li><i class="search fa fa-search search-button"></i></li>
@endsection
@section('content')
 		<!--=== Breadcrumbs v4 ===-->
 		<div class="breadcrumbs-v4">
 			<div class="container">
 				<ul class="breadcrumb-v4-in">
 					<li><a href="{{route('books.index')}}">Home</a></li>
 					<li class="active">Book</li>
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
	 								<input type="text" name="title" class="form-control" placeholder="fill title" value="{{$request->title}}">
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
 									<input type="text" name="author" placeholder="fill author" value="{{ $request->author }}">
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
 										@foreach($publishers as $publisher)
	 										<li>
	 											<label class="checkbox">
	 												<input type="checkbox" name="publisher[]" value="{{$publisher->id()}}" 
	 												{{
	 												($request->publisher) ?
	 													(
	 													in_array($publisher->id(), $request->publisher) ? 'checked' : '') : '' }}
	 												>
	 												<i></i>
	 												{{$publisher->getName()}}
	 											</label>
	 										</li>
 										@endforeach
 									</ul>
 								</div>
 							</div>
 						</div>
 					</div><!--/end panel group-->
 					<input type="submit" name="search" class="btn-u btn-u-sea-shop btn-block" value="search">
 					</form>
 				</div>

 				<div class="col-md-9">
 					<div class="row margin-bottom-5">
 						<div class="col-sm-12">
 							<ul class="list-inline clear-both">
 								<li class="grid-list-icons">
 									<a href="{{route('books.filter')}}"><i class="fa fa-th"></i></a>
 								</li>
 								<li class="sort-list-btn">
 									<h3>Sort By :</h3>
 									<div class="btn-group">
 										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
 											Popularity <span class="caret"></span>
 										</button>
 										<ul class="dropdown-menu" role="menu">
 											<li><a href="#">All</a></li>
 											<li><a href="#">Price low  to up</a></li>
 											<li><a href="#">Price up to low</a></li>
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
 										</ul>
 									</div>
 								</li>
 							</ul>
 						</div>
 					</div><!--/end result category-->
 					<!--=== Illustration v2 ===-->
			        <div class="row illustration-v2 filter-results">
			        	@if(count($books))
 						@foreach($books as $book)
			                <div class="col-md-3 col-xs-6 md-margin-bottom-30 wrap-book-item">
			                    <div class="product-img">
			                        <a href="{{route('books.show', ['id'=>$book->id()])}}"><img class="full-width img-responsive" src="{{$book->getImage()}}" alt=""></a>
			                        <a class="product-review" href="{{route('books.show', ['id'=>$book->id()])}}">Quick review</a>
			                    </div>
			                    <div class="product-description product-description-brd book-description">
			                        <div class="overflow-h margin-bottom: 5px;">
			                            <div class="pull-left">
			                                <h4 class="title-price"><a href="{{route('books.show', ['id'=>$book->id()])}}">{{$book->getTitle()}}</a></h4>
			                                <span class="gender text-uppercase">{{$book->getAuthor()}}</span>
			                                <span class="publisher">{{$book->getPublisherName()}}</span>
			                            </div>
			                            <div class="product-price pull-right clear-both" text-align:>
			                                <span class="title-price">{{$book->getPrice()}}</span>
			                            </div>
			                        </div>
			                        <ul class="list-inline product-ratings">
			                            <li>
			                            	<i class="rating-selected fa fa-star"></i>
			                            </li>
			                            <li>
			                            	<i class="rating-selected fa fa-star"></i>
			                            </li>
			                            <li>
			                            	<i class="rating-selected fa fa-star"></i>
			                            </li>
			                            <li>
			                            	<i class="rating fa fa-star"></i>
			                            </li>
			                            <li>
			                            	<i class="rating fa fa-star"></i>
			                            </li>
			                            <li class="like-icon">
			                            	<a data-original-title="Add to wishlist" data-toggle="tooltip"
			                                                     data-placement="left" class="tooltips" href="#">
			                                    <i class="fa fa-heart"></i>
			                                </a>
			                            </li>
			                        </ul>
			                    </div>
			                </div>
			            @endforeach
 						@else
 							<p> No results found!</p>
 						@endif
			        </div>
        			<!--=== End filter results ===-->
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
@endsection

@section('js')

@endsection
