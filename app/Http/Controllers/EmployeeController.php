<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class EmployeeController extends Controller
{
    public function index(){
    	$data = Product::all();
    	return view('employee',['products'=>$data]);
    }

    public function addproduct(Request $req){
    	
    	$product = new Product;
    	$product->pname=$req->pname;
    	$product->price=$req->price;
    	$product->quantity=$req->quantity;
    	$product->save();
    	return redirect('Employee');
    }

    public function delete($id){
        $data= Product::find($id);
        $data->delete();
        return redirect('Employee');
    }

    public function showData($id){
        
        $data = Product::find($id);
       // return $data;
        return view('productedit',['data'=>$data]);
    }

      public function updateProduct(Request $req){
        
         $req->validate([
            'pname' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

         $product = new Product;
        $product->pname=$req->pname;
        $product->price=$req->price;
        $product->quantity=$req->quantity;
        $product->save();
        return redirect('Employee');
        
       // return view('productedit',['data'=>$data]);
    }

}
