{{-- @extends('admin.layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">All Posts</h1>
<table class="table border">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Author</th>
        <th scope="col">Created_at</th>
        <th scope="col">Control</th>
      </tr>
    </thead>
    <tbody>
         @foreach ($posts as $post)
      <tr>     
        <th scope="row"></th>
        <td><img src="'img')}}"></td>
        <td>{{$post->title}}</td>
        <td>{{$post->desc}}</td>
        <td>{{$post->author}}</td>
        <td>{{$post->created_at}}</td>
        <td class="d-flex">   
                          
            <a href="{{route('posts.show', $post->id) }}" class="btn"><script src="https://cdn.lordicon.com/lusqsztk.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/tyounuzx.json"
                  trigger="loop"
                  style="width:50px;height:50px">  
                           
          </lord-icon></a> --}}
{{-- <a href="{{route('posts.edit', $post->id) }}" class="btn"><script src="https://cdn.lordicon.com/lusqsztk.js"></script> --}}
{{-- <a href="#" class="btn"><script src="https://cdn.lordicon.com/lusqsztk.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/wloilxuq.json"
                  trigger="loop"
                  style="width:50px;height:50px">
              </lord-icon></a>
              <form method="post" action="{{route('posts.destroy', $post->id)}}">
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
  <a href="{{route('posts.create')}}" class="btn btn-primary">Add New Post</a> 
</div>
@endsection --}}






@extends('admin.layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            @if (session()->has('Message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('Message') }}
                </div>
            @endif
            <div class="div-center">
                <h1 class="text-crnter">Add Catrgory </h1>
                <form method="post" action="{{ url('/add_category') }}">
                    @csrf
                    <input class="color-dark" type="text" name="category" placeholder="Write category name">
                    <input type="submit" class="btn btn-dark" name="submit" value="Add Category">

                </form>
            </div>
            <table class="table border m-auto" style="width: 50%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr>
                            <th scope="row"></th>
                            <td> {{$data->category_name}}</td>
                            <td>
                                <form method="post" action="{{ url('delete.category', $data->id) }}" onclick="return confirm('Are You Sure You want Delete This')">
                                    @csrf
                                    @method('DELETE')
                                    <button>
                                        <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                                        <lord-icon src="https://cdn.lordicon.com/qjwkduhc.json" trigger="loop"
                                            style="width:50px;height:50px">
                                        </lord-icon>
                                    </button>
                                </form>
                            </td>



                            </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
@endsection
