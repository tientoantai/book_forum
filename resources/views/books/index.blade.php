@extends('books.layout')
@section('title', 'Home')
@section('login')
    <li><a href="{{route('login.index')}}">Login</a> | <a href="">Register</a></li>
@endsection
@section('search')
    <li><i class="search fa fa-search search-button"></i></li>
@endsection
@section('about')
    <li class="dropdown mega-menu-fullwidth">
        <a href="{{route('about')}}" >
            About Us
        </a>
    </li>
@endsection
@section('book')
    <a href="{{route('books.filter')}}">Book</a>
@endsection
@section('content')

    <!--=== Product Content ===-->
    <div class="container content-md">

        <div class="heading heading-v1 margin-bottom-20">
            <h2>Featured Books</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat
                ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus
                neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
        </div>

        <!--=== Illustration v2 ===-->
        <div class="illustration-v2 margin-bottom-60">
            <div class="customNavigation margin-bottom-25">
                <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
                <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
            </div>

            <ul class="list-inline owl-slider">
                @foreach($books as $book)
                    <li class="item">
                        <div class="product-img">
                            <a href="{{route('books.show', ['id'=>$book->id()])}}"><img class="full-width img-responsive" src="{{$book->getImage()}}"
                                                              alt=""></a>
                            <a class="product-review" href="{{route('books.show', ['id'=>$book->id()])}}">Quick review</a>
                        </div>
                        <div class="product-description product-description-brd">
                            <div class="overflow-h margin-bottom-5">
                                <div class="pull-left">
                                    <h4 class="title-price"><a href="{{route('books.show', ['id'=>$book->id()])}}">{{$book->getTitle()}}</a></h4>
                                    <span class="gender text-uppercase">{{$book->getAuthor()}}</span>
                                    <span class="publisher">{{$book->getPublisherName()}}</span>
                                </div>
                                <div class="product-price">
                                    <span class="title-price">{{$book->getPrice()}}</span>
                                </div>
                            </div>
                            <ul class="list-inline product-ratings">
                                <li><i class="rating-selected fa fa-star"></i></li>
                                <li><i class="rating-selected fa fa-star"></i></li>
                                <li><i class="rating-selected fa fa-star"></i></li>
                                <li><i class="rating fa fa-star"></i></li>
                                <li><i class="rating fa fa-star"></i></li>
                                <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip"
                                                         data-placement="left" class="tooltips" href="#"><i
                                                class="fa fa-heart"></i></a></li>
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <!--=== End Illustration v2 ===-->

        <div class="heading heading-v1 margin-bottom-40">
            <h2>Latest products</h2>
        </div>

        <!--=== Illustration v2 ===-->
        <div class="row illustration-v2">
            @foreach($books as $book)
                <div class="col-md-3 col-sm-6 md-margin-bottom-30 wrap-book-item">
                    <div class="product-img book-image">
                        <a href="{{route('books.show', ['id'=>$book->id()])}}"><img class="full-width img-responsive" src="{{$book->getImage()}}" alt=""></a>
                        <a class="product-review" href="{{route('books.show', ['id'=>$book->id()])}}">Quick review</a>
                    </div>
                    <div class="product-description product-description-brd book-description">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="{{route('books.show', ['id'=>$book->id()])}}">{{$book->getTitle()}}</a></h4>
                                <span class="gender text-uppercase">{{$book->getAuthor()}}</span>
                                <span class="publisher">{{$book->getPublisherName()}}</span>
                            </div>
                            <div class="product-price pull-right clear-both">
                                <span class="title-price">{{$book->getPrice()}}</span>
                            </div>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip"
                                                     data-placement="left" class="tooltips" href="#"><i
                                            class="fa fa-heart"></i></a></li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        <!--=== End Illustration v2 ===-->
    </div>
    <!--=== End Product Content ===-->

    <!--=== Twitter-Block ===-->
    <div class="parallaxBg twitter-block margin-bottom-60">
        <div class="container">
            <div class="heading heading-v1 margin-bottom-20">
                <h2>Latest Tweets</h2>
            </div>

            <div id="carousel-example-generic-v5" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li class="active rounded-x" data-target="#carousel-example-generic-v5" data-slide-to="0"></li>
                    <li class="rounded-x" data-target="#carousel-example-generic-v5" data-slide-to="1"></li>
                    <li class="rounded-x" data-target="#carousel-example-generic-v5" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <p>Unify has reached 10000 plus sales and we just want to thank you to our all customers for
                            being part of the Unify Template success <a href="http://bit.ly/1c0UN3Y">http://bit.ly/1c0UN3Y</a>
                        <p>
                        <p><a href="https://twitter.com/htmlstream">@htmlstream</a></p>
                        <ul class="list-inline twitter-icons">
                            <li><a href="#"><i class="fa fa-reply"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p>the majority have suffered #alteration in some form, by injected humour, or randomised words
                            which don't look even slightly believable. If you are going to use a passage of Lorem
                            Ipsum</p>
                        <p><a href="https://twitter.com/htmlstream">@twbootstrap</a></p>
                        <ul class="list-inline twitter-icons">
                            <li><a href="#"><i class="fa fa-reply"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p>New 100% Free Stock Photos. Every. Single. Day. Everything you need for your creative
                            projects. <a href="#">http://publicdomainarchive.com</a></p>
                        <p><a href="https://twitter.com/htmlstream">@wrapbootstrap</a></p>
                        <ul class="list-inline twitter-icons">
                            <li><a href="#"><i class="fa fa-reply"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="carousel-arrow">
                    <a class="left carousel-control" href="#carousel-example-generic-v5" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic-v5" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--=== End Twitter-Block ===-->

    <!--=== Sponsors ===-->
    <div class="container content">
        <div class="heading heading-v1 margin-bottom-40">
            <h2>Sponsors</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat
                ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus
                neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
        </div>

        <ul class="list-inline owl-slider-v2">
            <li class="item first-child">
                <img src="{{asset('img/clients/07.png')}}" alt="">
            </li>
            <li class="item">
                <img src="{{asset('img/clients/08.png')}}" alt="">
            </li>
            <li class="item">
                <img src="{{asset('img/clients/10.png')}}" alt="">
            </li>
            <li class="item">
                <img src="{{asset('img/clients/11.png')}}" alt="">
            </li>
            <li class="item">
                <img src="{{asset('img/clients/09.png')}}" alt="">
            </li>
            <li class="item">
                <img src="{{asset('img/clients/12.png')}}" alt="">
            </li>
            <li class="item">
                <img src="{{asset('img/clients/07.png')}}" alt="">
            </li>
            <li class="item">
                <img src="{{asset('img/clients/08.png')}}" alt="">
            </li>
            <li class="item">
                <img src="{{asset('img/clients/09.png')}}" alt="">
            </li>
            <li class="item">
                <img src="{{asset('img/clients/10.png')}}" alt="">
            </li>
            <li class="item">
                <img src="{{asset('img/clients/11.png')}}" alt="">
            </li>
            <li class="item">
                <img src="{{asset('img/clients/12.png')}}" alt="">
            </li>
        </ul><!--/end owl-carousel-->
    </div>
    <!--=== End Sponsors ===-->
@endsection

@section('js')

@endsection