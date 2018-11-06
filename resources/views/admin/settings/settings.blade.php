@extends('layouts.app')

@section('content')

	@include('admin.include.errors')

		<div class="panel panel-default">
			
			<div class="panel panel-heading main-body">
				Edit Site Settings
			</div>

			<div class="panel panel-body">
				<form action="{{route('settings.update')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}

					<div class="form-group">

					<label for="site_name">Site Name</label>
					<input type="text" name="site_name" value="{{$settings->site_name}}" class="form-control">			

					</div>
					

					<div class="form-group">

					<label for="site_address">Site Address</label>
					<input type="text" name="site_address" value="{{$settings->site_address}}" class="form-control">			

					</div>

					<div class="form-group">

					<label for="site_email">Site Email</label>
					<input type="text" name="site_email" value="{{$settings->site_email}}" class="form-control">			

					</div>

					<div class="form-group">

					<label for="site_contact">Site Contact</label>
					<input type="text" name="site_contact" value="{{$settings->site_contact}}" class="form-control">			

					</div>
								


					
					

					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit">
								Update Site Settings
							</button>
						</div>
					</div>




				</form>
			</div>
		</div>
		
@stop

