@extends('layouts.app')

@section('content')

 <a class="btn btn-success" href="{{route('menu.create')}}">
                           <span class="fas fa-plus" style="margin-right: 10px;"></span>
                        </li>New Menu</a>
<div class="panel panel-default panel-shadow">
	<div class="panel panel-heading main-body">
				All Menu
			</div>
	<div class="panel-body">
		<table class="table table-hover">
	
	<thead>
		<th class="center-heading">Name</th>
		<th class="center-heading">Action</th>
		
		<th class="center-heading">Icon</th>
		<th class="center-heading">Edit</th>
		<th class="center-heading">Delete</th>
	</thead>
	<tbody>
		@if($menus->count()>0)
			
		@foreach($menus as $menu)
	
		<tr>
			
			<td class="center-body">{{$menu->name}}</td>
			<td class="center-body"><a href="{{$menu->action}}"><i class="fas fa-link"></a></td>
	
			<td class="center-body"><i class="{{$menu->icon}}"></td>
			
			
		</tr>


		@endforeach	

		@else
			<tr>
				<th colspan="50" class="text-center">No Menus</th>
			</tr>
		@endif
	</tbody>

</table>
	</div>
</div>

@stop