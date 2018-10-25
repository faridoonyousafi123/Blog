<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Session;
use Auth;
class UsersController extends Controller
{



    public function __construct(){

        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users',User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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

            'name'=>'required',
            'email'=>'required|email'

        ]);

        $exists = User::all()->where('email', $request->email)->first();
        if($exists)
        {
            Session::flash('info','This email address already exists in the system.');
            return redirect()->back();
        }
        else
        {
         $user=User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt('password')

        ]);

         $profile=Profile::create([

            'user_id'=>$user->id,
            'avatar'=>'uploads/avatars/default.png'




        ]);


         Session::flash('success','User created Successfully');

         return redirect()->route('users'); 
     }




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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);

        if($user->superadmin)
        {
            Session::flash('info','You can not delete super admin');

            return redirect()->back();
        }
        elseif($user->admin){
            
            if(Auth::user()->superadmin){

                $user->profile->delete();

                $user->delete();

                Session::flash('success','User has been deleted');

                return redirect()->back();
            }
            else{
               Session::flash('info','Only Super admin can delete admin users');

               return redirect()->back();
           }
       }
        else{

                    $user->profile->delete();

                $user->delete();

                Session::flash('success','User has been deleted');

                return redirect()->back();
        }
       }




   

   public function admin($id){

    $user=User::find($id);


    $user->admin=1;

    $user->save();

    Session::flash('success','Successfully changed permission');

    return redirect()->back();


}

public function superadmin($id){

    $user=User::find($id);

    if(!$user->superadmin)
    {
        $user->superadmin=1;
        $user->save();
        Session::flash('success','Successfully changed permission');

        return redirect()->back();


    }




}

public function notAdmin($id){

    $user=User::find($id);


    if(Auth::user()->superadmin)
    {
         if($user->superadmin)
    {
        Session::flash('info','You can not delete permission of super admin');

        return redirect()->back();
    }
    else
    {
      $user->admin=0;

      $user->save();

      Session::flash('success','Successfully changed permission');

      return redirect()->back();
  }
    }
    else
    {
        Session::flash('info','Only Super admin can remove permission');

      return redirect()->back();
    }
   


}








public function notsuperAdmin($id){

    $user=User::find($id);


    if($user->superadmin)
    {


       $user->superadmin=0;

       $user->save();

       Session::flash('success','Successfully changed permission');

       return redirect()->back();
   }




}


}
