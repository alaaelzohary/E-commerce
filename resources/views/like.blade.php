
@extends('layouts.app')

@section('content')
    <section>
        
        <div>
            <h1 class="font-weight-bold pt-5 cartdesc">Likes</h1>
        </div>
        <div class="container my-5 cart">
            <table class="table">
          <thead>
            <tr>
              <th scope="col">Remove</th>
              <th scope="col">Image</th>
              <th scope="col">Price</th>
              <th scope="col">Add to Cart</th>
            </tr>
          </thead>
          <tbody>
           
            <tr>
              <th scope="row"><lord-icon
            src="https://cdn.lordicon.com/dovoajyj.json"
            trigger="loop"
            style="width:50px;height:50px">
        </lord-icon></th>
              <td><img src="img/pic40.png" alt="#" style="width:100px"></td>
              <td><h5>700 EGP</h5></td>
              <td><a class="nav-link btn cartbutton" href="/cart">Add to Cart</a></td>
            </tr>
          
          
          </tbody>
        </table>
       
        
            </section>







@endsection