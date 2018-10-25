@extends('layouts.app')

@section('content')

	@include('admin.include.errors')

		<div class="panel panel-default">
			
			<div class="panel panel-heading main-body">
				Create a new Menu
			</div>

			<div class="panel panel-body">
				<form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}

					<div class="form-group">

					<label for="name">Name</label>
					<input type="text" name="name" class="form-control">

					</div>

					<div class="form-group">

					<label for="action">Action</label>
					<input type="text" name="action" class="form-control">
					
					</div>

					<div class="form-group">

					<label for="icon">Icon (Use fontawesome class)</label>
					<input type="text" name="icon" class="form-control">

					
					</div>

					<div class="form-group">
						<label for="user">Visible to</label>
					@foreach($users as $user)

					<div class="checkbox">
						

					
    				<label><input type="checkbox" value="{{$user->id}}" name="users[]">{{$user->name}}</label>
  					</div>
					@endforeach
					</div>

					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit">
								Create Menu
							</button>
						</div>
					</div>




				</form>
			</div>
		</div>
		
@stop