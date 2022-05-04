@extends('admin.layouts.admin')

@section('content')



<div class="container mt-5 ">
    <h1 class="text-center mb-5">Show All Product </h1>
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
        <th scope="col">Controls</th>
    
      </tr>
    </thead>
    <tbody>
       
      <tr>   
          @foreach ($products as $product)
              
        <th scope="row"></th>
        <td>{{$product->image}}</td>
        <td>{{$product->title}}</td>
        <td>{{$product->desc}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->discount_price}}</td>
        <td>{{$product->category_name}}</td>
        <td>{{$product->created_at}}</td>
        <td class="d-flex">   
                          
            <a href="{{route('products.show', $product->id) }}" class="btn "><script src="https://cdn.lordicon.com/lusqsztk.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/tyounuzx.json"
                  trigger="loop"
                  style="width:50px;height:50px">  
                           
          </lord-icon></a>
            <a href="{{route('products.edit', $product->id) }}" class="btn"><script src="https://cdn.lordicon.com/lusqsztk.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/wloilxuq.json"
                  trigger="loop"
                  style="width:50px;height:50px">
              </lord-icon></a>
              <form method="post" action="{{route('products.destroy', $product->id)}}">
                @csrf 
                  @method('DELETE')
             <button> <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/qjwkduhc.json"
                  trigger="loop"
                  style="width:50px;height:50px">
              </lord-icon></button>
          </form>
        </td>
        @endforeach  
   
      </tr>
     

    </tbody>

  </table>
  <a href="{{route('products.create')}}" class="btn btn-primary">Create New Product</a>
</div>

@endsection

