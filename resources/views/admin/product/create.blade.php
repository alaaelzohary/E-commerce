@extends('admin.layouts.admin')
@section('content')
<div class="content-wrapper">
    @if (session()->has('Message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{ session()->get('Message') }}
    </div>
@endif
<div class=" container w-50 mt-5 border bold">
  <h1 class="mt-4"> Add Product </h1>
<form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data" style="margin-top:10%">
   @csrf
   
    <div >
      <label for="exampleInputTitle1" class="form-label">Product Title</label>
      <input type="text" class="form-control text-light" placeholder="Write a Title..." name="title" required>
     
    </div>

    <div >
        <label for="exampleInputdesc1" class="form-label">Description</label>
        <input type="textarea" class="form-control mb-5 text-light" placeholder="Write a Description..." name="desc">
      </div>

    <div>
      <label for="exampleInputprice1" class="form-label">Product Price</label>
      <input type="number" class="form-control mb-5 text-light" placeholder="Write a Price..." name="price" required>
    </div>
    
    <div class="mb-2">
        <label for="exampleInputQuan1" class="form-label">Product Quantity</label>
        <input type="number" class="form-control mb-5 text-light" min="0" placeholder="..." name="quantity">
      </div>


      <div >
        <label for="exampleInputdescount1" class="form-label">Product Discount</label>
        <input type="number" class="form-control mb-5 text-light" placeholder="..." name="discount_price">
      </div>
{{-- 
    <div name="category_name">
      <label for="exampleInputQuan1" class="form-label" >Product Category</label>
        <select name="category" required>
            <option value="" selected>Add Category Here</option>
            @foreach ($data as $category)
            <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
   
        </select>
    </div> --}}




    <div>
        <label for="formFileLg" class="form-label mb-2">Upload Product Image</label>
        <input class="form-control form-control-lg mb-3" id="formFileLg" placeholder="Upload the pic..." type="file" name="image" required>
      </div> 
  
    <button type="submit" class="btn btn-primary">Add Product</button>
  </form>
  
</div>

  @endsection