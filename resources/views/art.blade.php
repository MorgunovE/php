<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport"
               content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible"
                           content="ie=edge">
             <title>Document</title>
  {{--	157--}}
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
    integrity="sha256-z8OR40MowJ8GgK6P89Y+hiJK5+cclzFHzLhFQLL92bg="
    crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha256-KuvCVS19rfTjoLgMyDDCdOkRRlhNrY4psEM4uezts2M="
    crossorigin="anonymous"></script>
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
                    <div class="alert alert-success"
                      role="alert">
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
              {{--	            149--}}
              <div class="container p-4">
		            <form>
								  <div class="mb-3">
								    <label for="title"
                      class="form-label">Article title</label>
								    <input type="text"
                      class="form-control"
                      id="title">
								  </div>
			            <div class="alert alert-danger d-none"
                    id="title-error"
                    role="alert">
									</div>
								  <div class="mb-3">
								    <label for="content"
                      class="form-label">Article content</label>
								    <input type="text"
                      class="form-control"
                      id="content">
								  </div>
			            <div class="alert alert-danger d-none"
                    id="content-error"
                    role="alert">
									</div>
			            <div class="mb-3">
								    <label for="body"
                      class="form-label">Article body</label>
								    <input type="text"
                      class="form-control"
                      id="body">
								  </div>
			            <div class="alert alert-danger d-none"
                    id="body-error"
                    role="alert">

									</div>
								  <button type="button"
                    class="btn btn-primary"
                    onclick="storeArticle()">Submit</button>
								</form>
	            </div>
            </div>
          {{--          165--}}
          <div class="modal" id="delete" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Delete article</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Are you sure want to delete article - <span id="delete-title"></span></p>
                </div>
                <input type="hidden" id="delete-id">
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-danger" onClick="deleteArticle()">Confirm</button>
                </div>
              </div>
            </div>
          </div>
          {{--	        156--}}
          <div class="modal fade"
            id="update"
            tabindex="-1"
            aria-labelledby="update"
            aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title"
                    id="exampleModalLabel">Update article</h5>
					        <button type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					        <form>
{{--						        159--}}
                    <input type="hidden"
                      id="id-update">
					          <div class="mb-3">
					            <label for="title-update"
                        class="col-form-label">Article title</label>
					            <input type="text"
                        class="form-control"
                        id="title-update">
						          <div class="alert alert-danger d-none"
                        id="title-error"
                        role="alert">
											</div>
					          </div>
					          <div class="mb-3">
					            <label for="content-update"
                        class="col-form-label">Article content</label>
					            <textarea class="form-control"
                        id="content-update"></textarea>
						          <div class="alert alert-danger d-none"
                        id="content-error"
                        role="alert">
											</div>
					          </div>
					        </form>
					      </div>
					      <div class="modal-footer">
					        <button type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                  {{--                              161--}}
                  <button type="button"
                    class="btn btn-primary" onclick="updateArticle()">Send changes</button>
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
  crossorigin="anonymous"
  referrerpolicy="no-referrer"></script>
{{--145--}}
<script>
    // 162
    function loadArticles() {
      $( '.articles' ).html( '' );
      $.ajax( {
        url: 'http://127.0.0.1:8000/api/articles',
        type: 'GET',
        dataType: 'json',
        success( data ) {
          for( let index in data ) {
            $( '.articles' ).append( `
						<div class="col-6 mt-3">
							<div class="card">
							  <div class="card-body">
							    <h5 class="card-title">${ data[ index ].title }</h5>
							    <p class="card-text">${ data[ index ].content.slice( 0, 20 ) }...</p>
									<div class="row">
										<div class="col">
											<a href="#" class="btn btn-primary" onclick="fullArticle(${ data[ index ].id })">Show</a>
										</div>
										<div class="col">
											<button type="button" onclick='setFieldsForModal("${ data[ index ].title }", "${ data[ index ].content }", ${ data[ index ].id })' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update">Update</button>
										</div>
                    <div class="col">
                      <button type="button" onclick='setFieldsForModalDelete("${ data[ index ].title }", ${ data[ index ].id })' class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
										</div>
									</div>
							  </div>
							</div>
						</div>
            ` )
          }
          console.log( data )
        }
      } )
    }

    loadArticles()

    function fullArticle( id ) {
      $.ajax( {
        url: 'http://127.0.0.1:8000/api/articles/' + id,
        type: 'GET',
        dataType: 'json',
        success( data ) {
          console.log( data );
          $( '.article-title' ).text( data.title );
          $( '.article-content' ).text( data.content );
          $( '.full-article' ).removeClass( 'd-none' );
        }
      } )
    }

    // 150
    function storeArticle() {
      const title = $( '#title' ),
        content = $( '#content' ),
        body = $( '#body' );
      $( '#title-error' ).addClass( 'd-none' );
      $( '#content-error' ).addClass( 'd-none' );
      $( '#body-error' ).addClass( 'd-none' );
      $.ajax( {
        url: "http://127.0.0.1:8000/api/articles",
        type: "post",
        dataType: "json",
        data: {
          title: title.val(),
          content: content.val(),
          body: body.val(),
        },
        error( err ) {
          // 151
          const data = err.responseJSON
          for( let key in err.responseJSON.errors ) {
            let error_text = err.responseJSON.errors[ key ][ 0 ]
            $( `#${ key }-error` ).removeClass( 'd-none' ).text( error_text )
          }
        },
        success( data ) {
          console.log( data );
          title.val( '' );
          content.val( '' );
          body.val( '' );
          $( '.articles' ).append( `
						<div class="col-6 mt-3">
							<div class="card">
							  <div class="card-body">
							    <h5 class="card-title">${ data.article.title }</h5>
							    <p class="card-text">${ data.article.content.slice( 0, 20 ) }...</p>
							    <div class="row">
										<div class="col">
											<a href="#" class="btn btn-primary" onclick="fullArticle(${ data.article.id })">Show</a>
										</div>
										<div class="col">
											<button type="button" onclick='setFieldsForModal("${ data.article.title }", "${ data.article.content }", ${ data.article.id })' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update">Update</button>
										</div>
                    <div class="col">
                      <button type="button" onclick='setFieldsForModalDelete("${ data.article.title }", ${ data.article.id })' class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
										</div>
									</div>
							  </div>
							</div>
						</div>
            ` )

        }
      } )
      loadArticles()
    }

    // 158
    function setFieldsForModal( title, content, id ) {
      $( '#title-update' ).val( title );
      $( '#content-update' ).val( content );
      $( '#id-update' ).val( id );
    }

    // 160
    function updateArticle() {
      const title = $( '#title-update' ).val(),
        content = $( '#content-update' ).val(),
        id = $( '#id-update' ).val()

      $.ajax( {
        url: "/api/articles/" + id,
        type: "PUT",
        dataType: 'json',
        data: {
          title,
          content,
          body: content
        },
        success( data ) {
          if( data.status ) {
            console.log( true )
            $( '#update' ).modal( 'hide' );
            loadArticles()
          } else {
            console.log( false )
          }
        },
      } )
    }

    // 166-1
    function setFieldsForModalDelete( title, id ) {
      $( '#delete-title' ).text( title );
      $( '#delete-id' ).val( id );
    }

    // 166
    function deleteArticle() {
      const id = $( '#delete-id' ).val();
      $.ajax( {
        url: "/api/articles/" + id,
        type: "DELETE",
        dataType: 'json',
        success( data ){
          $( '#delete' ).modal( 'hide' );
          loadArticles()
        }
      } )
    }
</script>
</body>
</html>

