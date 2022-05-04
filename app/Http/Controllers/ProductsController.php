<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    //
    public function showProduct(){
        $product = Product::all();
        return view('welcome', compact('product')); 
    }
    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user = auth()->user();
            $product = Product::findOrfail($id);
            $cart = new Cart;
            $cart->name = $user->name ;
            $cart->phone = $user->phone; 
            $cart->address = $user->address; 
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->save();
            
            return redirect()->back()->with('message', 'Product Added Successfully');
        }
        else
        {
            return redirect('login');
        }
    }
    public function likeDelete($id)
    {
       
            $product=Product::find($id);
            $product->delete();
            return redirect()->back();
            
       
    }
}
