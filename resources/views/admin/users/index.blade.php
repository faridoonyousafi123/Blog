@extends('layouts.app')

@section('content')


<div class="panel panel-default panel-shadow">
	<div class="panel panel-heading main-body">
				Users
			</div>
	<div class="panel-body">
		<table class="table table-hover">
	
	<thead>
		<th class="center-heading">Image</th>
		<th class="center-heading">User Name</th>
	
		<th class="center-heading">Permissions</th>
		<th class="center-heading">Delete</th>
	</thead>
	<tbody>
		@if($users->count()>0)
			
		@foreach($users as $user)
	
		<tr>
			<td class="center-body"><img src="{{asset($users->profile->avatar)}}" alt="{{$post->title}}" width="60px" height="60px" style="border-radius: 50%;"></td>
			<td class="center-body">{{$users->name}}</td>

			<td class="center-body">
				<!-- <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-info btn-sm">
					<span class="fas fa-pencil-alt"></span>
				</a> -->
			</td>

			<td class="center-body">
				<!-- <a href="{{route('user.delete',['id'=>$post->id])}}" class="btn btn-sm btn-danger ">
					<span class="fas fa-trash-alt"></span>
				</a> -->
			</td>
		</tr>


		@endforeach	

		@else
			<tr>
				<th colspan="50" class="text-center">No Users</th>
			</tr>
		@endif
	</tbody>

</table>
	</div>
</div>

@stop