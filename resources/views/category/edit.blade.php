@extends('layouts.app')
@section('content')


	{{csrf_field()}}
	<h2>Редактирование категории</h2>

	@include('layouts.error') 


{!! Form::open(['url' => '/category/'.$category->id, 'method'=>'PUT']) !!}
<div class="form-group">
{!!	Form::label('categoryName', 'Name') !!}
{!! Form::text('categoryName', $category->name, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!!	Form::label('categoryDesc', 'Description') !!}
{!! Form::textarea('categoryDesc', $category->description, ['class'=>'form-control']) !!}
</div>

{!! Form::submit('Save', ['class'=>'btn-primary']) !!}

{!! Form::close() !!}



@endsection