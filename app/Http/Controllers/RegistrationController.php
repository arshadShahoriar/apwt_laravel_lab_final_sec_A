<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class RegistrationController extends Controller
{
    public function index(){

    	return view('Registration.index');
    }

    public function verify(Request $req){
    	
    	$user = new User;
    	$user->username=$req->name;
    	$user->phoneno=$req->phone_no;
    	$user->address=$req->Address;
    	$user->Password=$req->password;
    	$user->save();
    	return redirect('Registration');
    }

}
