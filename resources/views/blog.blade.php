@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4 mt-3 mb-3">Articles</h1>
			{{--			71--}}
			<form class="mb-4" action="/article" method="post">
{{--				76--}}
				@csrf
				<div class="mb-3">
			    <label for="title" class="form-label">Title</label>
			    <input type="text" name="title" class="form-control" id="title">
			  </div>
			  <div class="mb-3">
				  <label for="body" class="form-label">Content</label>
				  <textarea class="form-control" name="body" id="body" rows="3"></textarea>
				</div>
			  <button type="submit" onclick="event.preventDefault();addArticle();"
				  class="btn btn-primary">Add article</button>
			</form>
			{{--			90--}}
			<script>
				function addArticle () {
          const title = document.querySelector ( 'input[name="title"]' ).value;
          const body = document.querySelector ( 'textarea[name="body"]' ).value;
          
          let formData = new FormData ();
          formData.append ( 'title', title );
          formData.append ( 'body', body );
          
          fetch ( '/article', {
            method : "POST",
            body : formData,
            headers : {
              "X-CSRF-TOKEN" : document.querySelector ( 'meta[name="csrf"]' ).getAttribute ( 'content' )
            }
          } )
          location.reload ();
        }
			</script>
			<div class="list-group">
{{--				59--}}
				@foreach($articles as $article)
					<a href="/article/{{$article->id}}" class="list-group-item list-group-item-action" aria-current="true">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1">{{$article->title}}</h5>
				      <small>{{$article->created_at->format('d.m.Y')}}</small>
				    </div>
				    <p class="mb-1">{{$article->body}}</p>
				  </a>
					<div class="d-flex">
						{{--					82--}}
						<a href="/article/{{$article->id}}/update" type="submit" class="btn btn-success mt-3 mr-2 mb-3"
							style="width:100px">Update</a>
						{{--				79--}}
						<form action="/article/delete" method="post">
							@csrf
							<input type="hidden" name="id" value="{{$article->id}}">
							<button type="submit" class="btn btn-danger mt-3 mb-3" style="width:100px">Delete</button>
						</form>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection