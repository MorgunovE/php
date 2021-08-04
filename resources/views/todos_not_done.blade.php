@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4 mt-3 mb-3">Todos Not Done</h1>
{{--			47--}}
			<a href="/todos/done">Complete</a>
			<a href="/todos/not-done">Incomplete</a>
			<a href="/todos/">Todos</a>
{{--			42--}}
			<ul class="list-group mt-4">
{{--				44--}}
				@foreach($todos as $todo)
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<div>
							{{$todo->title}}
							<p style="font-size: 12px; color:gray">{{$todo->note}}</p>
						</div>
						@if($todo->status === 1)
							<span class="badge bg-success rounded-pill">Complete</span>
						@else
							<span class="badge bg-danger rounded-pill">Incomplete</span>
						@endif
				  </li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection