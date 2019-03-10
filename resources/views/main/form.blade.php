@extends('layouts.app')
@section('content')

<form action="/form" method="POST">
	{{csrf_field()}}
	<input type="text" name="user">
    <button>Send</button>
</form>


@endsection