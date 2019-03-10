@extends('layouts.app')
@section('content')
<h2>Все категории</h2>

<table class="table">
	<thead>
		<tr>
			<th>№</th>
			<th>Name</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $category)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$category->name}}</td>
			<td>{{$category->description}}</td>
			<td>
				<a href="{{url('/category/'.$category->id.'/edit')}}">Edit</a>
                {!! Form::open(['url'=>'category/'.$category->id, 'method'=>'DELETE']) !!}
                {!! Form::submit('Delete') !!}
                {!! Form::close() !!}
			</td>
		</tr>
		@endforeach
		
	</tbody>
</table>



@endsection