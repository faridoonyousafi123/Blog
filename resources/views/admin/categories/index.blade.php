@extends('layouts.app')

@section('content')


<div class="panel panel-default">
	<div class="panel panel-heading main-body">
				All Categories
			</div>
	<div class="panel-body">
		<table class="table table-hover">
	
	<thead>
		<th class="center-heading">Category Name</th>
		<th class="center-heading">Editing</th>
		<th class="center-heading">Deleting</th>
	</thead>
	<tbody>
		@if($categories->count()>0)
		@foreach($categories as $category)
		<tr>
			<td class="center-body">
				<span class="fas fa-align-justify"></span>
				{{$category->name}}
			</td>

			<td class="center-body">
				<a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-info btn-sm">
					<span class="fas fa-pencil-alt edit"></span>
				</a>
			</td>

			<td class="center-body">
				<div class="btn">
  <div class="trash"></div>
</div>


				<a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-sm btn-danger ">
					<span class="fas fa-trash-alt"></span>
				</a>
			</td>
		</tr>
		@endforeach

		@else
				<tr>
					<th colspan="5" class="text-center">No Categories</th>
				</tr>
		@endif
	</tbody>
	
</table>
	</div>
</div>

@stop