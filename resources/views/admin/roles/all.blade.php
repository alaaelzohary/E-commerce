@extends('admin.layouts.admin')

@section('content')
<div class="container mt-5" style="width: 70%">
    <h1 class="text-center mb-5">All Roles</h1>
<table class="table border">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Controls</th>
      </tr>
    </thead>
    <tbody>
         @foreach ($roles as $role)
      <tr>     
        <th scope="row"></th>
        <td>{{$role->name}}</td>
        <td class="d-flex">   
                          
            <a href="{{route('roles.show', $role->id) }}" class="btn "><script src="https://cdn.lordicon.com/lusqsztk.js"></script>
            <a href="#" class="btn "><script src="https://cdn.lordicon.com/lusqsztk.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/tyounuzx.json"
                  trigger="loop"
                  style="width:50px;height:50px">  
                           
          </lord-icon></a>
         
              <form method="post" action="{{route('roles.destroy', $role->id)}}">
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
      </tr>
      @endforeach

    </tbody>

  </table>
  {{-- <a href="{{route('roles.create')}}" class="btn btn-primary mt-4">Create New Role</a>  --}}
  <a href="#" class="btn btn-primary mt-4">Create New Role</a> 
</div>
@endsection