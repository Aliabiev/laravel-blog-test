@extends('layouts.app')
@section('content')
<h2>Все новости</h2>

<table class="table">
	<thead>
		<tr>
			<th>№</th>
			<th>News</th>
			<th>Content</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($news as $new)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$new->title}}</td>
			<td>{{$new->content}}</td>
			<td></td>
		</tr>
		@endforeach
		
	</tbody>
</table>



@endsection
