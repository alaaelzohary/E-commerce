@extends('admin.layouts.admin')

@section('content')
<div class="container mt-5 ">
    <h1 class="text-center mb-5">Show {{$user->name}} Information</h1>
<table class="table border">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created_at</th>
        {{-- <th scope="col">Controls</th> --}}
      </tr>
    </thead>
    <tbody>
       
      <tr>     
        <th scope="row"></th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        {{-- <td></td> --}}
      </tr>
     

    </tbody>

  </table>
  <a href="{{route('users.index')}}" class="btn btn-primary">Back To All Users</a> 
</div>
</div>
@endsection