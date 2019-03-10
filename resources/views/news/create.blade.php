@extends('layouts.app')
@section('content')


	{{csrf_field()}}
	<h2>Создание новостей</h2>
	
{!! Form::open(['url' => '/news', 'files' => true]) !!}
<div class="form-group">
{!!	Form::label('newsTitle', 'Name news') !!}
{!! Form::text('newsTitle', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!!	Form::label('newsContent', 'Content') !!}
{!! Form::textarea('newsContent', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!!	Form::label('newsImg', 'Image') !!}
{!! Form::file('newsImg') !!}
</div>

<div class="form-group">
{!!	Form::label('category', 'Category:') !!}<br>
{!! Form::select('category', $categories, ['class'=>'form-control']); !!}
</div>


{!! Form::submit('Add news', ['class'=>'btn-primary']) !!}

{!! Form::close() !!}



@endsection
