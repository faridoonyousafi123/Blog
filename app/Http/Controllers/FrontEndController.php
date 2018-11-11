<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Setting;
use App\Post;
use App\Tag;

class FrontEndController extends Controller
{
	

    public function index()
    {

    	


    	


        return view('blog')->with('title',Setting::first()->site_name)
        ->with('categories',Category::take(5)->get())
        ->with('posts',Post::all())
        ->with('first_post',Post::Orderby('created_at','desc')->first())
        ->with('second_post',Post::Orderby('created_at','desc')->skip(1)->take(1)->get()->first())
        ->with('third_post',Post::Orderby('created_at','desc')->skip(2)->take(1)->get()->first())
        ->with('categories',Category::Orderby('created_at','desc')->take(7)->get())
        ->with('settings',Setting::all()->first());
        
        
       
    }

    public function singlePost($slug)
    {
        $post=Post::where('slug',$slug)->first();

        $next_id=Post::where('id','>',$post->id)->min('id');
        $prev_id=Post::where('id','<',$post->id)->max('id');

        return view('single')->with('post',$post)
                            ->with('categories',Category::Orderby('created_at','desc')->take(7)->get())
                            ->with('title',$post->title)
                            ->with('settings',Setting::first())
                            ->with('tags',Tag::all())
                            ->with('next', Post::find($next_id))
                            ->with('prev', Post::find($prev_id));

    }

}
