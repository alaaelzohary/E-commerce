@extends('admin.layouts.admin')
@section('content')

<div class=" container w-50 mt-5">
  <h1> Edit Product </h1>
<form method="post" action="{{ route('products.update', $product->id) }}" style="margin-top:10%">
   @csrf
   @method('PUT')
    <div class="mb-3">
      <label for="exampleInputproductTitle1" class="form-label">Product Title</label>
      <input type="text" class="form-control" name="title" value="{{$product->title}}">
   
    </div>
    <div class="mb-3">
      <label for="exampleInputDesc1" class="form-label">Product Description</label>
      <input type="textarea" class="form-control " name="desc" value="{{$product->desc}}">
     
    </div>
    <div class="mb-4">
      <label for="exampleInputPrice1" class="form-label">Product Price</label>
      <input type="number" class="form-control" name="price" value="{{$product->price}}">
  
         
    <div class="mb-4">
        <label for="exampleInputQuan1" class="form-label">Product Quantity</label>
        <input type="number" class="form-control mb-5" min="0" placeholder="..." name="quantity" value="{{$product->quantity}}">
      </div>

    </div>
    <div class="mb-4">
      <label for="exampleInputdiscount1" class="form-label">Product Discount</label>
      <input type="number" class="form-control" name="discount_price" value="{{$product->discount_price}}">
  
    </div>
   <div class="mb-4">
    <label for="exampleInputdiscount1" class="form-label" >Product Category</label>
    <select class="form-select" aria-label="Disabled select example" name="category_name">
        @foreach($categories as $category)
          
        <option value="{{$category->category_name}}">{{ ucwords($category->category_name) }}</option>
      @endforeach
      </select>
      <div>
        <label for="formFileLg" class="form-label mb-4">Upload Product Image</label>
        <input class="form-control form-control-lg mb-3" id="formFileLg" placeholder="Upload the pic..." type="file" value="{{$product->image}}" required>
      </div> 
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
  
</div>

  @endsection