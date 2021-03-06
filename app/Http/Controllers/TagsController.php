<?php

namespace App\Http\Controllers;


use App\Tag;
use Session;
use Illuminate\Http\Request;
use App\Post;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tags.index')->with('tags',Tag::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'tag'=>'required'

        ]);
        
        Tag::create([

            'tag'=>$request->tag

        ]);

     Session::flash('success','Tag created Successfully.');   

     return redirect()->route('tags');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags=Tag::find($id);

        return view('admin.tags.edit')->with('tags',$tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

        'tag'=>'required'
    ]);

        $tag=Tag::find($id);
        $tag->tag=$request->tag;

        $tag->save();

        Session::flash('success','Tag Updated Successfully.');

        return redirect()->route('tags');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tags=Tag::find($id);

        foreach($tags->posts as $post)
        {
            if($tags->posts->count()>0)
            {
                Session::flash('info','This Tag is associated with Posts Please delete the post first');
                return redirect()->back();
            }
            else

            $post->delete();
        }

        $tags->delete();
        Session::flash('success','Tag deleted Successfully.');

        return redirect()->back();

    }
}
