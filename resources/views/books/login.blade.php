@extends('books.layout')
        @section('title', 'Log in')
        @section('content')
    <div class="breadcrumbs-v4">
        <div class="container">
            <ul class="breadcrumb-v4-in">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Log In</li>
            </ul>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Login ===-->
    <div class="log-reg-v3 content-md">
        <div class="container">
            <div class="row">
                <div class="col-md-7 md-margin-bottom-50">
                    <h2 class="welcome-title">Welcome to Unify</h2>
                    <p>Suspendisse et tincidunt ipsum, et dignissim urna. Vestibulum nisl tortor, gravida at magna et, suscipit vehicula massa.</p><br>
                    <div class="info-block-v2">
                        <i class="icon icon-layers"></i>
                        <div class="info-block-in">
                            <h3>Pellentesque vulputate</h3>
                            <p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
                        </div>
                    </div>
                    <div class="info-block-v2">
                        <i class="icon icon-settings"></i>
                        <div class="info-block-in">
                            <h3>Curabitur tincidunt</h3>
                            <p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
                        </div>
                    </div>
                    <div class="info-block-v2">
                        <i class="icon icon-paper-plane"></i>
                        <div class="info-block-in">
                            <h3>Aenean condimentum</h3>
                            <p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <form id="sky-form1" class="log-reg-block sky-form" method="post" >
                        <h2>Log in to your account</h2>
                        @if (isset($message))
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @endif
                        @if(isset($errorMessages))
                            @foreach($errorMessages as $errors)
                                @foreach($errors as $error)
                                    <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                    </div>
                                @endforeach
                            @endforeach
                        @endif
                            <section>
                            <label class="input login-input">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" placeholder="User Name" name="username" class="form-control" value="@if(isset($errorName)){{$errorName}}@endif">
                                </div>
                            </label>
                        </section>
                        <section>
                            <label class="input login-input no-border-top">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" placeholder="Password" name="password" class="form-control" value="@if(isset($errorPassword)){{$errorPassword}}@endif">
                                </div>
                            </label>
                        </section>
                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Login</button>


                    </form>


                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Login ===-->

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
            @endsection