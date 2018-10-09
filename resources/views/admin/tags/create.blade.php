@extends('layouts.app')

@section('content')

		
	@include('admin.include.errors')


		<div class="panel panel-default">
			
			<div class="panel panel-heading main-body">
				Create a new Tag
			</div>

			<div class="panel panel-body">
				<form action="{{ route('tag.store') }}" method="post">
					{{csrf_field()}}

					<div class="form-group">

					<label for="tag">Tag</label>
					<input type="text" name="tag" class="form-control">

					</div>

					

					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit">
								Create Tag
							</button>
						</div>
					</div>




				</form>
			</div>
		</div>
		
@stop