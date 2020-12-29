<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user;

class loginController extends Controller
{
    public function index(){

    	return view('login');
    }

    public function verify(Request $request){
    	
   //  	$data = $req->input();
    	

   //  	$user = User :: where('username','=',$req->username,'and','Password','=',$req->Password);
    
   //  	if($user){
   //  		// if(Hash::check($req->password,$user->Password)){
			// $req->session()->put('username',$data['username']);
			// return redirect('/home');
   //  		}
    	
    	
                $employee = user::where('username',$request->username)
                            ->where('password',$request->password)
                            ->first();
        if($request->username =="admin" && $request->password == "admin"){
            return redirect('/home');
        }
        else if($employee !=null){
            return redirect('/Employee');
        }
        else{
             return redirect('/login');
        
        }
    	
		 	
    	
    }

}
