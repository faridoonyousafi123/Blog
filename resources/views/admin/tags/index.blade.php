@extends('layouts.app')

@section('content')

<a class="btn btn-success" href="{{route('tag.create')}}">
                            <span class="fas fa-plus" style="margin-right: 10px;"></span>
                         New Tag</a>

<div class="panel panel-default">
	<div class="panel panel-heading main-body">
				All Tags
			</div>
	<div class="panel-body">
		<table class="table table-hover">
	
	<thead>
		<th class="center-heading">Tag</th>
		<th class="center-heading">Edit</th>
		<th class="center-heading">Delete</th>
	</thead>
	<tbody>
		@if($tags->count()>0)
		@foreach($tags as $tag)
		<tr>
			<td class="center-body">
				<span class="fas fa-tag"></span>
				{{$tag->tag}}
			</td>

			<td class="center-body">
				<a href="{{route('tag.edit',['id'=>$tag->id])}}" class="btn btn-info btn-sm">
					<span class="fas fa-pencil-alt edit"></span>
				</a>
			</td>

			<td class="center-body">
				<a href="{{route('tag.delete',['id'=>$tag->id])}}" class="btn btn-sm btn-danger ">
					<span class="fas fa-trash-alt"></span>
				</a>
			</td>
		</tr>
		@endforeach

		@else
				<tr>
					<th colspan="5" class="text-center">No Tags</th>
				</tr>
		@endif
	</tbody>
	
</table>
	</div>
</div>

@stop