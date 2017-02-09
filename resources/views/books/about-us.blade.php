@extends('books.layout')
@section('title', 'About Us')
@section('login')
    <li><a href="{{route('login.index')}}">Login</a> | <a href="">Register</a></li>
@endsection
@section('search')
    <li><i class="search fa fa-search search-button"></i></li>
@endsection
@section('about')
    <li class="dropdown mega-menu-fullwidth">
        <a href="{{route('about')}}" >
            About
        </a>
    </li>
@endsection
@section('book')
    <a href="{{route('books.filter')}}">Book</a>
@endsection
@section('content')
    <div class="container">
        <div class="row col-md-12" >
        	<div class="row col-md-5">
        		<img src="{{asset('img/20989768750fdb557100906ba0bc40bc.jpg')}}" width="90%">
        		<i>Photo credit: Alan Yarborough</i>
        	</div>
        	<div class="row col-md-7">
        		<p> <strong>Unify Book Store</strong> is a unique and special place to shop—a locally owned, independently run Cambridge landmark since 1932. We are known for our extraordinary selection of new, used, and remaindered books, an award-winning author event series, and a history of innovation—including print-on-demand services, local partnerships, and digital media. On harvard.com customers can browse our shelves, our staff recommendations, and our author events calendar. Sign up for our weekly e-mail newsletter, which includes updates on sales, events, and featured books. Thanks for shopping at Harvard Book Store!
				</p>
				<p>
					<strong>Sell Us Your Books</strong>
					Online or in stores, we make it easy to turn your books into cash.
				</p>
				<p>
					<strong>Sell Us Your Books Online
					</strong>
                    Enter the ISBN of each book you wish to sell, and receive an offer immediately. If you like our bid, just send the books to us (we'll cover the freight) and receive credit to your Powells.com account or payment via PayPal.
				</p>
        	</div>
        </div>
    </div>
@endsection

