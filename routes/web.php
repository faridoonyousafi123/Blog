	<?php
// // one to many
// 	Route::get('/test', function(){

// 		return App\User::find()->profile;

// });

// 	Route::get('/testpost', function(){

// 		return App\Post::find(11)->category;

// 	});

// 	// many to many

	Route::get('/admin', [
		'uses'=>'HomeController@index',
		'as'=>'home'
	]);

	Route::get('/', [
		'uses'=>'FrontEndController@index',
		'as'=>'blog'
	]);

	Auth::routes();

	Route::get('/post/{slug}', [
		'uses' => 'FrontEndController@singlePost',
		'as' => 'post.single'
	]);

	Route::get('/results', function(){
        $posts = \App\Post::where('title','like',  '%' . request('query') . '%')->get();
        return view('results')->with('posts', $posts)
                              ->with('title', 'Search results : ' . request('query'))
                              ->with('settings', \App\Setting::first())
                              ->with('categories', \App\Category::take(5)->get())
                              ->with('query', request('query'));
});


	Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

		Route::get('/admin',[
			'uses'=>'HomeController@index',
			'as'=>'home'
		]);

		Route::get('/posts', [
			'uses' => 'PostsController@index',
			'as' => 'posts'
		]);
		Route::get('/post/create',[

			'uses'=>'PostsController@create',
			'as'=>'post.create'

		]);

		Route::get('/post/edit/{id}',[

			'uses'=>"PostsController@edit",
			'as'=>'post.edit'
		]);

		Route::post('/post/update/{id}',[

			'uses'=>"PostsController@update",
			'as'=>'post.update'
		]);

		Route::get('/post/delete/{id}',[

			'uses'=>"PostsController@destroy",
			'as'=>'post.delete'
		]);

		Route::get('/post/deletetag/{id}',[

			'uses'=>'PostsController@deletePostTag',
			'as'=>'post.tag'
		]);

		Route::get('/post/trashed',[

			'uses'=>"PostsController@trashed",
			'as'=>'post.trashed'
		]);

		Route::get('/settings',[

			'uses'=>'SettingsController@index',
			'as'=>'settings'

		]);

		Route::post('/settings/update',[

			'uses'=>'SettingsController@update',
			'as'=>'settings.update'

		]);

		Route::get('/post/kill/{id}',[

			'uses'=>"PostsController@kill",
			'as'=>'post.kill'
		]);

		

		Route::get('/post/restore/{id}',[

			'uses'=>"PostsController@restore",
			'as'=>'post.restore'
		]);


		Route::post('/post/store',[

			'uses'=>'PostsController@store',
			'as'=>'post.store'
		]);



		Route::get('/category/create',[

			'uses'=>'CategoriesController@create',
			'as'=>'category.create'
		]);

		Route::post('/category/store',[

			'uses'=>'CategoriesController@store',
			'as'=>'category.store'
			
		]);

		Route::get('/categories',[

			'uses'=>'CategoriesController@index',
			'as'=>'categories'
		]);

		Route::post('/category/update/{id}',[

			'uses'=>"CategoriesController@update",
			'as'=>'category.update'
		]);
		Route::get('/category/edit/{id}',[

			'uses'=>"CategoriesController@edit",
			'as'=>'category.edit'
		]);

		Route::get('/category/delete/{id}',[

			'uses'=>"CategoriesController@destroy",
			'as'=>'category.delete'
		]);

		Route::get('/tags',[

			'uses'=>"TagsController@index",
			'as'=>'tags'
		]);

		Route::get('/tag/edit/{id}',[

			'uses'=>"TagsController@edit",
			'as'=>'tag.edit'
		]);

		Route::get('/tag/create',[

			'uses'=>"TagsController@create",
			'as'=>'tag.create'
		]);
		Route::post('/tag/store',[

			'uses'=>"TagsController@store",
			'as'=>'tag.store'
		]);

		Route::post('/tag/update/{id}',[

			'uses'=>"TagsController@update",
			'as'=>'tag.update'
		]);

		Route::get('/tag/delete/{id}',[

			'uses'=>"TagsController@destroy",
			'as'=>'tag.delete'
		]);

		Route::get('/users',[

			'uses'=>"UsersController@index",
			'as'=>'users'
		]);

		Route::get('/users/create',[

			'uses'=>"UsersController@create",
			'as'=>'user.create'
		]);

		Route::post('/users/store',[

			'uses'=>"UsersController@store",
			'as'=>'user.store'
		]);

		Route::get('/users/admin/{id}',[

			'uses'=>"UsersController@admin",
			'as'=>'user.admin'
		])->middleware('admin');

		Route::get('/users/superadmin/{id}',[

			'uses'=>"UsersController@superadmin",
			'as'=>'user.superadmin'
		])->middleware('admin');

		Route::get('/users/not-admin/{id}',[

			'uses'=>"UsersController@notAdmin",
			'as'=>'user.notadmin'
		]);

		Route::get('/users/not-superadmin/{id}',[

			'uses'=>"UsersController@notsuperAdmin",
			'as'=>'user.notsuperadmin'
		]);

		Route::get('/users/profile',[

			'uses'=>"ProfilesController@index",
			'as'=>'user.profile'
		]);

		
		Route::get('/user/delete/{id}',[

			'uses'=>"UsersController@destroy",
			'as'=>'user.delete'
		]);

		Route::post('/users/profile/update',[

			'uses'=>"ProfilesController@update",
			'as'=>'user.profile.update'
		]);

		Route::get('/users/menu',[

			'uses'=>"MenusController@index",
			'as'=>'user.menu'
		]);

		Route::get('/menu/create',[

			'uses'=>"MenusController@create",
			'as'=>'menu.create'
		]);

		Route::post('/menu/store',[

			'uses'=>"MenusController@store",
			'as'=>'menu.store'
		]);
		
		


	});

