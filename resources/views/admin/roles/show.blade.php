@extends('admin.layouts.admin')

@section('contant')
<h1 class="text-center mt-5"> Show</h1>
<div class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created_at</th>
            <th scope="col">Controller</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($roles_user as $role_user)
                
            <tr>
                <th scope="row">{{$role_user->id}}</th>
                <td>{{$role_user->name}}</td>
                <td>{{$role_user->email}}</td>
                <td>{{$role_user->Created_at}}</td>
            </tr>
            @endforeach
            
        </tbody>

    </table>
    <a href="{{route('roles.index')}}" class="btn btn-primary">Back To All Roles</a>

</div>


@endsection