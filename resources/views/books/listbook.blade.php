@extends('books.layout')
@section('title', 'List Books')
@section('content')

    <!--=== Content Medium Part ===-->
    <div class="content-md margin-bottom-30">
        <div class="container">
            <form class="shopping-cart" action="#">
                <div>
                    <section>
                        <div class="table-responsive">
                            <div class="btn btn-success">
                                <a href="{{route('insertBook')}}"><i class="glyphicon glyphicon-plus"></i></a>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Genre</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($booklist as $book)
                                    <tr>
                                        <td class="product-in-table">
                                            <img class="img-responsive" src="{{$book->image}}" alt="">
                                            <div class="product-it-in">
                                                <h3><a href="/detail/{{$book->id}}">{{$book->title}}</a></h3>
                                            </div>
                                        </td>
                                        <td>{{$book->price}}</td>
                                         <td>{{$book->genre}}</td>
                                        <td>
                                            {{$book->author}}
                                        </td>
                                        <td class="shop-red">{{$book->publisher}}</td>
                                        <td>
                                            <a href="{{route('updateBook', ['id' => $book->id])}}" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                                            <a class="btn btn-danger btn-xs" href="{{route('deleteBook', ['id' => $book->id])}}" id="delete"><i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </form>
        </div><!--/end container-->
    </div>
    <!--=== End Content Medium Part ===-->

    @endsection
