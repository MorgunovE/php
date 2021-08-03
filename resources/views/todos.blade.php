@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4 mt-3 mb-3">Todos</h1>
{{--			42--}}
			<ul class="list-group mt-4">
				@foreach($todos as $todo)
					<li class="list-group-item d-flex justify-content-between align-items-center">
				    {{$todo->title}}
				    <span class="badge bg-success rounded-pill">Complete</span>
				    <span class="badge bg-danger rounded-pill">Incomplete</span>
				  </li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection