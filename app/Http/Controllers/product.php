<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    public function register(){
        return view('product.register');

    }
    public function store(Request $request){
        $product=new product()
        {
            $product->name=$request->name;
            $product->unit=$request->unit;
            $product->price=$request->price;
            $product->quantity=$request->quantity;
            $is_successed=$product::savea();
            if($is_successed)
            echo"record saved successfully";
            else
            echo"something went wrong.try again";
        }
    }
    //
}
 