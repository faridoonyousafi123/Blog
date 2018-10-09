@extends('layouts.app')

@section('content')

		
	@include('admin.include.errors')


		<div class="panel panel-default">
			
			<div class="panel panel-heading main-body">
				My Profile
			</div>

			<div class="panel panel-body">
				<form action="{{ route('user.profile.update') }}" method="post">
					{{csrf_field()}}

					<div class="form-group">

					<label for="name">Username</label>
					<input type="text" name="name" value="{{$user->name}}"class="form-control">

					</div>
						
				
					<div class="form-group">

					<label for="password"> New Password</label>
					<input type="password" name="password" class="form-control">

					</div>

					
					<div class="form-group">
				
					<img src="{{asset($user->profile->avatar)}}" alt="" width="60px" height="60px" style="border-radius: 50%;"></td>
				
					

					</div>

					<div class="form-group">
				
					
				
					<label for="avatar">Upload new Picture</label>
					<input type="file" name="avatar" class="form-control">

					</div>

					<div class="form-group">

					<label for="facebook">Facebook Profile</label>
					<input type="text" name="facebook" class="form-control" value="{{$user->profile->facebook}}">

					</div>

					<div class="form-group">

					<label for="youtube">Youtube Profile</label>
					<input type="text" name="youtube" class="form-control" value="{{$user->profile->youtube}}">

					</div>

				<div class="form-group">

					<label for="about">About me</label>
				</div>

				<div class="form-group">
					<textarea name="about" id="about" cols="95" rows="5">{{$user->profile->about}}</textarea>
					</div>




					

					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit">
								Update Profile
							</button>
						</div>
					</div>




				</form>
			</div>
		</div>
		
@stop