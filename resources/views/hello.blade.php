@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="jumbotron">
{{--			22--}}
			<h1 class="display-4 mt-3 mb-3">Hello, {{$name }} {{$test}}</h1>
			<h2 class="mt-3 mb-3">Skills</h2>
			@if(count($skills) > 0)
				<ul class="list-group">
	{{--				24--}}
						@foreach ($skills as $skill)
							<li class="list-group-item">{{$skill}}</li>
						@endforeach
				</ul>
			@else
				<div class="alert alert-danger" role="alert">
				  Haven't skills
				</div>
			@endif
		</div>
	</div>
@endsection