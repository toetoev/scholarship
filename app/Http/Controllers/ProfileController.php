<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Illuminate\Contracts\Auth\ConResetPassword;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
	public function index(){
		$user =  DB::table("users")->where("id", Auth::user()->id)->get();
		return view('profile.edit',compact('user'));
	}


	public function update(Request $request, $id)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required',
			'avatar' => 'sometimes|mimes:jpeg,jpg,png|max:5000'
		]);
        //file upload
        if ($request->hasfile('photo')) { //take photo from input
            $image = $request->file('photo'); //take the file
            $name = $image->getClientOriginalName(); //take img name
            $image->move(public_path().'/image/',$name); //store in image folder
            $photo = '/image/'.$name;
        }else{
        	$photo = request('oldimg');
        }

        if(request('password')){
        	$password = request('password');
        }
        else{
        	$password = request('oldpassword');
        }
        //data update
        $profile = User::find($id);
        $profile->name = request('name');
        $profile->email = request('email');
        $profile->avatar = $photo;
        $profile->password = Hash::make($password);

        $profile->save();
        //redirect
        return redirect()->route('profile.index', $id);
    }
}
