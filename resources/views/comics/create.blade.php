@extends('layouts.app')

@section('main_content')
	<div class="container">
		<h1>Add new Comic</h1>
		<form action="{{ route('comics.store') }}" method="post">
			@csrf

			<div class="mb-3">
				<label for="title" class="form-label">Title</label>
				<input type="text" class="form-control" id="title" name="title">
			</div>
			<div class="mb-3">
				<label for="type" class="form-label">Type</label>
				<input type="text" class="form-control" id="type" name="type">
			</div>
			<div class="mb-3">
				<label for="thumb" class="form-label">Image url</label>
				<input type="text" class="form-control" id="thumb" name="thumb">
			</div>
			<div class="mb-3">
				<label for="price" class="form-label">Price in USD</label>
				<input type="text" class="form-control" id="price" name="price" placeholder="00.00">
			</div>
			<div class="mb-3">
				<label for="series" class="form-label">Series</label>
				<input type="text" class="form-control" id="series" name="series">
			</div>
			<div class="mb-3">
				<label for="sale_date" class="form-label">Release date</label>
				<input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD">
			</div>
			<div class="mb-3">
				<label for="description" class="form-label">Description</label>
				<textarea type="text" class="form-control" id="description" name="description"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
