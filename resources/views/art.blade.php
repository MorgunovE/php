<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport"
	             content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Article card') }}</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
	                    Welcome to Article
                    </div>
                </div>
	            <div class="container p-4">
		            <div class="row mt-3 gx-5 articles">
		            </div>
	            </div>
	            <div class="container full-article p-4 d-none">
		            <div class="card">
								  <div class="card-header">
								    Featured
								  </div>
								  <div class="card-body">
								    <h5 class="card-title article-title"></h5>
								    <p class="card-text article-content"></p>
								  </div>
								</div>
	            </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--		144--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
	integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--145--}}
<script>
      $.ajax ( {
        url : 'http://127.0.0.1:8000/api/articles',
        type : 'GET',
        dataType : 'json',
        success ( data ) {
          for ( let index in data ) {
            $ ( '.articles' ).append ( `
						<div class="col">
							<div class="card">
							  <div class="card-body">
							    <h5 class="card-title">${ data[ index ].title }</h5>
							    <p class="card-text">${ data[ index ].content.slice ( 0, 20 ) }...</p>
							    <a href="#" class="btn btn-primary" onclick="fullArticle(${ data[ index ].id })">Show</a>
							  </div>
							</div>
						</div>
            ` )
          }
          console.log ( data )
        }
      } )

      function fullArticle ( id ) {
        $.ajax ( {
          url : 'http://127.0.0.1:8000/api/articles/' + id,
          type : 'GET',
          dataType : 'json',
          success ( data ) {
            console.log ( data );
            $('.article-title').text(data.title);
            $('.article-content').text(data.content);
            $('.full-article').removeClass('d-none');
          }
        } )
      }
</script>
</body>
</html>

