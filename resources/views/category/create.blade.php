@extends('layouts.app')
@section('content')


	{{csrf_field()}}
	<h2>Создание категории</h2>

	@include('layouts.error') 


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


{!! Form::open(['url' => '/category']) !!}
<div class="form-group">
{!!	Form::label('categoryName', 'Name') !!}
{!! Form::text('categoryName', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!!	Form::label('categoryDesc', 'Description') !!}
{!! Form::textarea('categoryDesc', null, ['class'=>'form-control']) !!}
</div>

{!! Form::submit('Add category', ['class'=>'btn-primary']) !!}

{!! Form::close() !!}



@endsection