@extends('books.book')

@section('title', 'create')

@section('sidebar')

@endsection

@section('content')
	<h1> Please create your book! </h1>
	<div>
		<form action="{{route('books.store')}}" method="POST" class="form-vali col-md-6">
		  	<div class="form-group">
			  	<span class="col-md-3">Title: 
			  		<span class="text-danger">(*)</span>
			  	</span>
				<input class="form-control" id="title" placeholder="Enter title" type="text" name="title" value="{{ old('title') }}">
			</div>
		  	
		  	<div class="form-group">
		  		<span class="col-md-3">Author:
		  			<span class="text-danger">(*)</span>
		  		</span>
		  		<input class="form-control" id="author" placeholder="Enter author" type="text" name="author" value="{{ old('author') }}">
		  	</div>
		  	
		  	<div class="form-group">
		  		<span class="col-md-3">Publisher:
		  			<span class="text-danger">(*)</span>
		  		</span>
				<select class="form-control" id="publisher"  type="select" name="publisher">
					  	@foreach($publishers as $publisher)
					  		<option value='{{$publisher->id}}'>{{$publisher->getName()}}</option>
					  	@endforeach
				</select>
		  	</div>
		  
		  	<div class="form-group">
		  		<span class="">Short Description:
		  			<span class="text-danger">(*)</span>
		  		</span>
		  		<input class="form-control" id="shortDecription" placeholder="Enter short descriptions" type="text" name="shortDecription" value="{{ old('shortDecription') }}">
		  	</div>

		  	<div class="form-group">
		  		<span class="col-md-3">Price:
		  			<span class="text-danger">(*)</span>
		  		</span>
		  		<input class="form-control" id="price" placeholder="Enter price" type="text" name="price" value="{{ old('price') }}">
		  	</div>

		  	<div class="form-group">
		  		<span class="col-md-3">Genre:
		  			<span class="text-danger">(*)</span>
		  		</span>
		  		<input class="form-control" id="genre" placeholder="Enter genre" type="text" name="genre" value="{{ old('genre') }}">
		  	</div>
		  	<input type="submit" value="Save" class="btn btn-submit btn-success col-md-6">
		</form>
	</div>	
@endsection