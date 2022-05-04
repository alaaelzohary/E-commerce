<?php

namespace App\Http\Controllers\Admins;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use InvalidArgumentException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Database\QueryException;
use App\Http\Requests\StoreProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.product.all', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $data = Category::all();
        return view('admin.product.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
  
        $image = $request->file('image');
        $ProductImage = time(). '.'. $image->getClientOriginalExtension();
      
        $image->move('img', $ProductImage);
        $request->Validated();
        Product::create([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'discount_price'=>$request->discount_price,
           'image'=> $ProductImage,
           'category_name'=>$request->category_name,
        ]);
       
        return redirect()->back()->with('Message', 'Product Added Successfully');  
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
        $product = Product::findOrfail($id);
        $category = Category::findOrfail($id);
        return view('admin.product.show', compact(['product', 'category']));
        
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
        $product = Product::findOrfail($id);
        return view('admin.product.edit', compact('product'));
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

        

        $category = Category::findOrfail($id);
        $product = Product::findOrfail($id);
        $image = $request->file('image');
        $ProductImage = time(). '_'. $image->getClientOriginalName();

        $image->move('image', $ProductImage);
        $product->update([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'quantity'=>$request->desc,
            'price'=>$request->desc,
            'discount_price'=>$request->desc,
           'image'=> $request->$ProductImage,
           'category_name'=>$request->category_name,
        ]);
        return redirect()->back()->with('Message', 'Product Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products = Product::findOrfail($id)->products;

        return view("admin.products.all", compact('products'));
    }
 
}
