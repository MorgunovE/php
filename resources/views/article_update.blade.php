@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4 mt-3 mb-3">Update: {{$article->title}}</h1>
{{--			86--}}
			<form class="mb-4" action="/article/update" method="post">
				@csrf
				<input type="hidden" name="id" value="{{$article->id}}">
				<div class="mb-3">
			    <label for="title" class="form-label">Title</label>
			    <input type="text" name="title" class="form-control" id="title" value="{{$article->title}}">
			  </div>
			  <div class="mb-3">
				  <label for="body" class="form-label">Content</label>
				  <textarea class="form-control" name="body" id="body" rows="3" >{{$article->body}}</textarea>
				</div>
			  <button type="submit" class="btn btn-success">Save changes</button>
			</form>
		</div>
	</div>
@endsection