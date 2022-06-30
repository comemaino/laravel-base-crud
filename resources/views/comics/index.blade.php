@extends('layouts.app')

@section('main_content')
	<h1>COMICS</h1>
	<ul>
		@foreach ($comics_list as $comic)
			<li>
				<img src="{{ $comic->thumb }}" alt="">
				<h4>
					<a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
						{{ $comic->title }}
					</a>
				</h4>
				<p>$ {{ $comic->price }}</p>
			</li>
		@endforeach
	</ul>
@endsection
