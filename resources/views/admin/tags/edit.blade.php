@extends('layouts.app')

@section('content')

		
	@include('admin.include.errors')


		<div class="panel panel-default">
			
			<div class="panel panel-heading main-body">
				Update Tag: {{$tags->tag}}
			</div>

			<div class="panel panel-body">
				<form action="{{ route('tag.update',['id'=>$tags->id]) }}" method="post">
					{{csrf_field()}}

					<div class="form-group">

					<label for="tag">Tag</label>
					<input type="text" name="tag" value="{{$tags->tag}}"class="form-control">

					</div>

					

					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit">
								Update Tag
							</button>
						</div>
					</div>




				</form>
			</div>
		</div>
		
@stop