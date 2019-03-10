@extends('layouts.app')
@section('content')
<h2>Все новости</h2>

<table class="table">
	<thead>
		<tr>
			<th>№</th>
			<th>News</th>
			<th>Content</th>
			<th>Category</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($news as $new)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$new->title}}</td>
			<td>{{$new->content}}</td>
			<td>{{$new->category->name or ''}}</td>
            <td><img src="{{$new->image}}" width="50" height="50"></td>
			<td>
				<a href="{{url('/news/'.$new->id.'/edit')}}">Edit</a>
                {!! Form::open(['url'=>'news/'.$new->id, 'method'=>'DELETE']) !!}
                {!! Form::submit('Delete') !!}
                {!! Form::close() !!}
			</td>
		</tr>
		@endforeach
		
	</tbody>
</table>



@endsection