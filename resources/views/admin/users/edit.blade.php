@extends('admin.layouts.admin')
@section('content')

<div class=" container w-50 mt-5">
  <h1> Edit {{$user->name}} </h1>
<form method="post" action="{{ route('users.update', $user->id) }}" style="margin-top:10%">
   @csrf
   @method('PUT')
    <div class="mb-3">
      <label for="exampleInputName1" class="form-label">User Name</label>
      <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}">
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}">
      @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    </div>
    <div class="mb-4">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$user->password}}">
      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    </div>
   <div class="mb-5">
    <select class="form-select" aria-label="Disabled select example" name="role_id">
        <option selected>Chose Your Role</option>
        @foreach($roles as $role)
          
        <option value="{{$role->id}}">{{ ucwords($role->name) }}</option>
      @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
  
</div>
</div>
  @endsection