@extends('layouts.app')
@section('content')


	{{csrf_field()}}
	<h2>Редактирование новостей</h2>

	@include('layouts.error') 


{!! Form::open(['url' => '/news/'.$news->id, 'method'=>'PUT', 'files'=>true]) !!}
<div class="form-group">
{!!	Form::label('newsTitle', 'Name news') !!}
{!! Form::text('newsTitle', $news->title, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!!	Form::label('newsContent', 'Content') !!}
{!! Form::textarea('newsContent', $news->content, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!!	Form::label('newsImg', 'Image') !!}
{!! Form::file('newsImg') !!}
</div>

<div class="form-group">
{!!	Form::label('category', 'Category:') !!}<br>
{!! Form::select('category', $categories, ['class'=>'form-control']); !!}
</div>


{!! Form::submit('Save', ['class'=>'btn-primary']) !!}

{!! Form::close() !!}



@endsection