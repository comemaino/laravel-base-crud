@extends('layouts.app')

@section('main_content')
	<h1>COMICS</h1>
	<div class="container">
		<ul class="d-flex flex-wrap p-0">
			@foreach ($comics_list as $comic)
				<li class="p-2 m-2">
					<div class="d-flex flex-column h-100 _card">
						<img src="{{ $comic->thumb }}" alt="">
						<h4 class="mt-2">
							<a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
								{{ $comic->title }}
							</a>
						</h4>
						<p class="price text-center">$ {{ $comic->price }}</p>
					</div>
				</li>
			@endforeach
		</ul>
	</div>
@endsection
