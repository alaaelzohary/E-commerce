@extends('admin.layouts.admin')
@section('content')

<div class=" container w-50 mt-5 border bold">
  <h1 class="mt-4"> Create Post </h1>
<form method="post" action="{{ route('posts.store') }}" style="margin-top:10%">
   @csrf</div>
   <div>
    <label for="formFileLg" class="form-label mb-4">Upload Your Image</label>
    <input class="form-control form-control-lg mb-3" id="formFileLg" type="file" name="category_pic">
  </div>
    <div class="mb-4">
      <label for="exampleInputTitle1" class="form-label">Title</label>
      <input type="textarea" class="form-control" name="category_name">
     
    </div>
    <div class="mb-4">
      <label for="exampleInputdesc1" class="form-label">Description</label>
      <input type="textarea" class="form-control mb-5" name="desc">
      
    
  
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
  
</div>

  @endsection