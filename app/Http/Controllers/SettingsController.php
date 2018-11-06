<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;
class SettingsController extends Controller
{
     public function __construct()
     {
     	$this->middleware('admin');
     }

     public function index()
     {
     	return view('admin.settings.settings')->with('settings',Setting::first());
     }

     public function update(Request $request){

     	$this->validate($request,[

     		'site_name'=>'required',
            'site_address'=>'required',
            'site_email'=>'required',
            'site_contact'=>'required'

     	]);

     	$settings = Setting::first();
		$settings->site_name=$request->site_name;
		$settings->site_address=$request->site_address;
		$settings->site_email=$request->site_email;
		$settings->site_contact=$request->site_contact;

		$settings->save();

		Session::flash('success','Site Settings updated.');

		return redirect()->back();



     }
}
