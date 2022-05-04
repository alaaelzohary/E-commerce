@extends('admin.layouts.admin')
@section('content')

<div class=" container w-50 mt-5 border bold">
  <h1 class="mt-4"> Create User </h1>
<form method="post" action="{{ route('users.store') }}" style="margin-top:10%">
   @csrf
    <div class="mb-3">
      <label for="exampleInputName1" class="form-label">User Name</label>
      <input type="name" class="form-control @error('name') is-invalid @enderror text-light" name="name">
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror text-light" name="email">
      @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    </div>
    <div class="mb-4">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror text-light" name="password">
      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    </div>
    <div class="mb-5">
      <select class="form-select" aria-label="Disabled select example" name="role_id">
        <option selected>Select Your Role</option>
     @foreach ($roles as $role)
     <option value="{{$role->id}}">{{$role->name}}</option>
         
     @endforeach
     
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
</div>
</div>
  @endsection