<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class homeController extends Controller
{
    public function index(){

    	$data = User::all();
    	return view('home.index',['users'=>$data]);
    	//return view('home.index');
    }

    public function verify(Request $req){
    	echo "posted";
    	
    	return "posted";
    }

    public function deleteemp($id){
        $data= User::find($id);
        $data->delete();
        return redirect('home');
    }

     public function editemp($id){
        
        $data = User::find($id);
       // return $data;
        return view('editemployee',['data'=>$data]);
    }

       public function updateemployee(Request $req){
        
         $req->validate([
            'username' => 'required',
            'phoneno' => 'required',
            'address' => 'required',
            'password' => 'required',

        ]);

      	$user = new User;
    	$user->username=$req->username;
    	$user->phoneno=$req->phoneno;
    	$user->address=$req->address;
    	$user->Password=$req->password;
    	$user->save();
        return redirect('home');
        
       // return view('productedit',['data'=>$data]);
    }


}
