@extends('layouts.app')

@section('content')


<div class="panel panel-default panel-shadow">
	<div class="panel panel-heading main-body">
				All Posts
			</div>
	<div class="panel-body">
		<table class="table table-hover">
	
	<thead>
		<th class="center-heading">Image</th>
		<th class="center-heading">Title</th>
	
		<th class="center-heading">Edit</th>
		<th class="center-heading">Trush</th>
	</thead>
	<tbody>
		@if($posts->count()>0)
			
		@foreach($posts as $post)
	
		<tr>
			<td class="center-body"><img src="{{$post->featured}}" alt="{{$post->title}}" width="60px" height="60px"></td>
			<td class="center-body">{{$post->title}}</td>

			<td class="center-body">
				<a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-info btn-sm">
					<span class="fas fa-pencil-alt edit"></span>
				</a>
			</td>

			<td class="center-body">
				<a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-sm btn-danger "> 
					<span class="fas fa-trash-alt"></span>
				</a>
			</td>
		</tr>


		@endforeach	

		@else
			<tr>
				<th colspan="50" class="text-center">No Published Posts</th>
			</tr>
		@endif
	</tbody>

</table>
	</div>
</div>

@stop