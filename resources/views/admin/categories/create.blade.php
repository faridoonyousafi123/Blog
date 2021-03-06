@extends('layouts.app')

@section('content')

		
	@include('admin.include.errors')


		<div class="panel panel-default">
			
			<div class="panel panel-heading main-body">
				Create a new Category
			</div>

			<div class="panel panel-body">
				<form action="{{ route('category.store') }}" method="post">
					{{csrf_field()}}

					<div class="form-group">

					<label for="name">Name</label>
					<input type="text" name="name" class="form-control">

					</div>

					

					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit">
								Create Category
							</button>
						</div>
					</div>




				</form>
			</div>
		</div>
		
@stop