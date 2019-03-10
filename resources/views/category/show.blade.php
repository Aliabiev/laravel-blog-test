@extends('layouts.app')
@section('content')


	{{csrf_field()}}
	<h2>Новости по {{$category->name}}</h2>
	@include('layouts.error') 

    @foreach($news as $new)
    <div class="media">
    	<div class="media-left">
    		<img src="{{$new->image}}" width="200px">
    	</div>

    	<div class="media-body">
    		<h4 class="media-heading">{{$new->title}}</h4>
    	</div>

    </div>
    @endforeach
{{$news->links()}}


@endsection