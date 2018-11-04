@extends('layouts.app')

@section('content')

		
	@include('admin.include.errors')


		<div class="panel panel-default">
			
			<div class="panel panel-heading main-body">
				Edit Post: {{$posts->title}}
			</div>

			<div class="panel panel-body">
				<form action="{{ route('post.update',['id'=>$posts->id]) }}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}

					<div class="form-group">
						<label for="title">Title</label>
					<input type="text" name="title" value="{{$posts->title}}"class="form-control">

					</div>


					<div class="form-group">

					<label for="featured">Featured Image</label>
					<input type="file" name="featured" class="form-control">
					
					</div>

					<div class="form-group">

					<label for="category">Select a Category</label>
					<select name="category_id" id="category" class="form-control">
					@foreach($categories as $category)
					<option value="{{$category->id}}" 

						@if($posts->category->id==$category->id)

								selected
						@endif



						class="input-form">{{$category->name}}</option>
					
					@endforeach
					</select>
					</div>

					<label for="tag">Select Tags</label>
						<select multiple data-placeholder="Add tags" name="tags[]">
					

					@foreach($tags as $tag)

					
   					 <option value="{{$tag->id}}">{{$tag->tag}}</option>
    				
					
					

					
    				
  					</div>
					@endforeach
					</select>				

	

			

					<div class="form-group">

					<label for="content">Content</label>
					<textarea  name="content" id="content" cols="5" rows="5" class="form-control">{{$posts->content}}</textarea>

					</div>

					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit">
								Update Post
							</button>
						</div>
					</div>




				</form>
			</div>
		</div>
		
@stop