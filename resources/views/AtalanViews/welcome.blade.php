@extends ('Master')

@section('Header')

<button><a href="#" style="text-decoration: none;">Add a User</a></button>

@stop

@section('Content')


@foreach($Data as $Info)
<li style="color: grey;">{{ $Info }}</li>


@stop
