@extends('admin.layouts.admin')

@section('content')
<div class="container mt-5 ">
    <h1 class="text-center mb-5">Show Product Information</h1>
<table class="table border">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Image</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Product Price</th>
        <th scope="col">Product Quantity</th>
        <th scope="col">Product Discount</th>
        <th scope="col">Product Category</th>
        <th scope="col">Created_at</th>
    
      </tr>
    </thead>
    <tbody>
       
      <tr>     
        <th scope="row"></th>
        <td>{{$product->image}}</td>
        <td>{{$product->title}}</td>
        <td>{{$product->desc}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->discount_price}}</td>
        <td>{{$product->category_name}}</td>
        <td>{{$product->created_at}}</td>
   
      </tr>
     

    </tbody>

  </table>
  <a href="{{route('products.index')}}" class="btn btn-primary">Back To All Product</a>
</div>
@endsection