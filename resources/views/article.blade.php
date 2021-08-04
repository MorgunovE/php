@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4 mt-3 mb-3">{{$article->title}}</h1>
			<p>
				{{$article->body}}
			</p>

			<ul class="list-group">
				{{--			65--}}
{{--				@foreach($comments as $comment)--}}
{{--					70--}}
				@foreach($article->comments as $comment)
			  <li class="list-group-item">{{$comment->body}}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection