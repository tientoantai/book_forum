@extends('books.layout')
@section('title','Insert Book')
@section('content')
    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <ul class="breadcrumb-v4-in">
                <li><a href="{{route('books.index')}}">Home</a></li>
                <li><a href="{{route('books.admin')}}">Book Manager</a></li>
                <li class="active">Insert Book</li>
            </ul>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Registre ===-->
    <div class="log-reg-v3 content-md margin-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-md-7 md-margin-bottom-50">
                    <form id="formUpload" enctype="multipart/form-data" method="post" action="{{route('uploads.store')}}">
                        <section>
                                <label class="input">
                                    <img id="uploadResult" src="" id="uploading-img">
                                </label>
                        </section>
                        <section>
                                <label class="input">
                                    <input type="file" name="image" id="image" class="btn-u btn-u-sea-shop btn-block margin-bottom-20">
                                </label>
                        </section>
                        <section id="errors">
                            @if (count($errors) > 0)
                                <div class="col-md-7 alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </section>
                    </form>
                </div>
                <div class="col-md-5">
                    <form id="sky-form4" class="log-reg-block sky-form" method="post" action="{{route('books.store')}}">
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
                                <select class="col-md-7" name="publisher">
                                    @foreach($publishers as $publisher)
                                        <option value="{{$publisher->id()}}">{{$publisher->getName()}}</option>
                                    @endforeach
                                </select>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="text" name="price" placeholder="Price" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="hidden" id="imageBook" name="image" class="form-control">
                                </label>
                            </section>
                        </div>
                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" id="bookCreate" type="submit">Add</button>
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
@section('js')
    <script>
        $(document).ready(function() {
            
            function initUploader()
            {
                var 
                showImageUploaded = function(data){
                    $('#uploadResult').prop('src', data.image);
                    $('#uploadResult').attr('width', '67%');
                    $('#imageBook').attr('value', data.image);
                },

                options = {
                    success: showImageUploaded,
                    error: function(data){
                        var errors = data.responseJSON;
                        alert(errors.messages);
                        window.location.reload();
                    }
                };

                $('#formUpload').ajaxForm(options);
            }

            initUploader();

            $('#image').on('change', () => {
                $('#formUpload').submit();
            });

        });
    </script>
@endsection
