<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
function search(Request $request)
{
   
    $search_text = $_GET['box-search'];
    $product = Product::where('title', 'like', '%'. $search_text.'%')->with('category')->get();
    return view('search', compact('product'));
}
public function viewsearch()
{
 
    $products = Product::all();
    return view('search', compact('products'));
}
}
