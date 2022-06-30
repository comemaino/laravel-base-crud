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
		</div>
	</div>
@endsection
