@extends('books.layout')
@section('title', 'List Books')
@section('content')

	<div class="content-md margin-bottom-30">
		<div class="container">
			<form class="shopping-cart" action="#">
				<div>
					<section>
						<div class="table-responsive">
								<a href="" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></a>
							<table class="table table-striped">
								<thead>
								<tr>
									<th>Name</th>
									<th>Address</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								@foreach($publisher as $value)
									<tr>

										<td>{{$value->name}}</td>
										<td>{{$value->address}}</td>
										<td>
											<a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
											<a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal" ><i class="glyphicon glyphicon-trash"></i></a>
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

	<div class="container">

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Delete Publisher</h4>
					</div>
					<div class="modal-body">
						<p>Are you sure?</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-danger btn-delete">Delete</button>
						<button class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				</div>

			</div>
		</div>

	</div>



@endsection
@section('js')
	<script>
        $(document).ready(function() {
            $('[data-book-id]').click( function(){
                var bookId = $(this).data('book-id');
                $('.btn-delete').attr('data-delete-id', bookId);
            });
            $('.btn-delete').click( function(){
                var deleteAjax = $.ajax({
                    url: '/delete/' + $(this).data('delete-id'),
                    method: 'GET'
                });
                deleteAjax.then(function(){
                    alert ('Deleted!');
                    window.location.reload();
                });

            });
        });
	</script>
@endsection
