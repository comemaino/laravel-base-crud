@extends('layouts.app')

@section('main_content')
	<div class="show container mt-5">
		<div>
			<img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
			<h3>{{ $comics->title }}</h3>
			<p>$ {{ $comics->price }}</p>
			<p>{{ $comics->description }}</p>
			<p>Series: {{ $comics->series }}</p>
			<p>Date of release: {{ $comics->sale_date }}</p>
			<p>Type: {{ $comics->type }}</p>
			<div class="buttons">
				<a href="{{ route('comics.edit', ['comic' => $comics->id]) }}" class="btn btn-primary">Modify</a>
				<form action="{{ route('comics.destroy', ['comic' => $comics->id]) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger"
						onclick="confirm('Do you really want to delete this item?')">Delete</button>
				</form>
			</div>
		</div>
	</div>
@endsection
