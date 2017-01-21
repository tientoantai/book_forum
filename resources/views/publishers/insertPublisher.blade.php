@extends('books.layout')
@section('title','Insert Book')
@section('content')
    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Log In</span>
            <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="">Product</a></li>
                <li class="active">Log In</li>
            </ul>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Registre ===-->
    <div class="log-reg-v3 content-md margin-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-md-7 md-margin-bottom-50">
                    <h2 class="welcome-title">Welcome to Unify</h2>
                    <p>Suspendisse et tincidunt ipsum, et dignissim urna. Vestibulum nisl tortor, gravida at magna et, suscipit vehicula massa.</p><br>
                    <div class="row margin-bottom-50">
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span>20,039</span>
                                <small>Products</small>
                            </div>
                        </div>
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span>54,283</span>
                                <small>Reviews</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="site-statistics">
                                <span>376k</span>
                                <small>Sale</small>
                            </div>
                        </div>
                    </div>
                    <div class="members-number">
                        <h3>Join more than <span class="shop-green">13,000</span> members worldwide</h3>
                        <img class="img-responsive" src="{{asset('img/map.png')}}" alt="">
                    </div>
                </div>

                @if (count($errors) > 0)
                    <div class="col-md-5 alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-md-5">
                    <form id="sky-form4" class="log-reg-block sky-form" method="post" action="{{route('insertBook')}}" enctype="multipart/form-data">
                        <h2>Insert Books</h2>
                        <div class="login-input reg-input">

                            <section>
                                <label class="input">
                                    <input type="text" name="title" placeholder="Title" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="text" name="genre" placeholder="Genre" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="text" name="author" placeholder="Author" id="password" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="text" name="publisher" placeholder="Publisher" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="text" name="price" placeholder="Price" class="form-control">
                                </label>
                            </section>
                            <section>

                                <label class="input">
                                    <input type="file" name="image" class="btn-u btn-u-sea-shop btn-block margin-bottom-20">
                                </label>
                            </section>
                        </div>
                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Add</button>
                    </form>

                    <div class="margin-bottom-20"></div>
                    <p class="text-center">Already you have an account? <a href="">Sign In</a></p>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Registre ===-->

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