@extends('admin.layouts.admin')

@section('content')
<div class="col container">
 
    <h1 class="text-center mb-5 mt-5">All Users</h1>
<table class="table border">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created_at</th>
        <th scope="col">Controls</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        @foreach ($users as $user)

        <th scope="row"></th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td class="d-flex">   
                          
            <a href="{{route('users.show', $user->id) }}" class="btn "><script src="https://cdn.lordicon.com/lusqsztk.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/tyounuzx.json"
                  trigger="loop"
                  class="bg-light"
                  style="width:50px;height:50px;">
                  
                </lord-icon></a>
            <a href="{{route('users.edit', $user->id) }}" class="btn"><script src="https://cdn.lordicon.com/lusqsztk.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/wloilxuq.json"
                  trigger="loop"
                  class="bg-light"
                  style="width:50px;height:50px">
              </lord-icon></a>
              <form method="post" action="{{route('users.destroy', $user->id)}}" class="ml-2">
                @csrf 
                  @method('DELETE')
             <button> <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/qjwkduhc.json"
                  trigger="loop"
                  class="bg-light"
                  style="width:48px;height:50px">
              </lord-icon></button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>

  </table>
  <a href="{{route('users.create')}}" class="btn btn-primary mt-5">Add New User</a> 
</div>
</div>

@endsection