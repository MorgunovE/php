<H1>Hello User</H1>
{{--113--}}
{{Auth::user()}}
<br />
{{--115--}}
{{$user}}

@if(Auth::check())
	<p>Secret text</p>
	{{--113--}}
	{{Auth::user()}}
@endif

@auth()
	<p>Secret text</p>
	{{--115--}}
	{{$user}}
@endauth
