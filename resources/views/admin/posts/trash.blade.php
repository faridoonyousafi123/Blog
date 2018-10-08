@extends('layouts.app')

@section('content')


<div class="panel panel-default">
	<div class="panel panel-heading main-body">
				All Trashed Posts
			</div>
	<div class="panel-body">
		<table class="table table-hover">
	
	<thead>
		<th class="center-heading">Image</th>
		<th class="center-heading">Title</th>
		<th class="center-heading">Edit</th>
		<th class="center-heading">Restore</th>
		<th class="center-heading">Delete</th>
	</thead>
	<tbody>
		@foreach($posts as $post)
	
		<tr>
			<td class="center-body"><img src="{{$post->featured}}" alt="{{$post->title}}" width="70px" height="60px"></td>
			<td class="center-body">{{$post->title}}</td>
			<td class="center-body">
				<a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-info btn-sm">
					<span class="fas fa-pencil-alt"></span>
				</a>
			</td>

			<td class="center-body">
				<a href="{{route('post.restore',['id'=>$post->id])}}" class="btn btn-sm btn-success ">
					<span class="fas fa-undo"></span>
				</a>
			</td>

			<td class="center-body">
				<a href="{{route('post.kill',['id'=>$post->id])}}" class="btn btn-sm btn-danger ">
					<span class="fas fa-trash"></span>
				</a>
			</td>
		</tr>


		@endforeach	
	</tbody>

</table>
	</div>
</div>

@stop