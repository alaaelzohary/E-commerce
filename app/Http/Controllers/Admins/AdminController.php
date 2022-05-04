<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    //
    public function index()
    {
        $data = Category::all();
    return view('admin.category.all', compact('data'));
    }
    public function add_category(Request $request)
    {
     $data = new Category;
     $data->category_name = $request->category;
     $data->save();
     return redirect()->back()->with('Message', 'Category Add Successfuly');
    }
    public function delete_category($id)
    {
    $data = Category::findOrfail($id);
    $data->delete();
    return redirect()->back()->with('Message', 'Categore Deleted Successfully');
    }
}
