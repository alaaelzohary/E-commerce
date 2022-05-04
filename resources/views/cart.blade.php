
@extends('layouts.app')
@section('content')

    <section>
        
        <div>
            <h1 class="font-weight-bold pt-5 cartdesc">Shopping Cart</h1>
        </div>
        <div class="container my-5 cart">
            <table class="table">
          <thead>
            <tr>
              <th scope="col">Remove</th>
              <th scope="col">Image</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">total</th>
            </tr>
          </thead>
          <tbody>
            
            <tr>
              <th scope="row"><lord-icon
            src="https://cdn.lordicon.com/dovoajyj.json"
            trigger="loop"
            style="width:50px;height:50px">
        </lord-icon></th>
              <td><img src="enduser/img/pic30.png" alt="#" style="width:100px"></td>
              <td><h5>1200 EGP</h5></td>
              <td><b-form-input class="w-25 pl-1" value="1" type="number"></b-form-input></td>
              <td><h5>1200 EGP</h5></td>
            </tr>
            <tr>
              <th scope="row"><lord-icon
            src="https://cdn.lordicon.com/dovoajyj.json"
            trigger="loop"
            style="width:50px;height:50px">
        </lord-icon></th>
              <td><img src="enduser/img/pic40.png" alt="#" style="width:100px"></td>
              <td><h5>700 EGP</h5></td>
              <td><b-form-input class="w-25 pl-1" value="1" type="number"></b-form-input></td>
              <td><h5>700 EGP</h5></td>
            </tr>
            <tr>
              <th scope="row"><lord-icon
            src="https://cdn.lordicon.com/dovoajyj.json"
            trigger="loop"
            style="width:50px;height:50px">
        </lord-icon></th>
              <td><img src="enduser/img/pic50.png" alt="#" style="width:100px"></td>
              <td><h5>1200 EGP</h5></td>
              <td><b-form-input class="w-25 pl-1" value="1" type="number"></b-form-input></td>
              <td><h5>1200 EGP</h5></td>
            </tr>
          
          </tbody>
        </table>
        </div>
        <div class="container">
            <div class="total">
                <h5>Cart Total</h5>
               <div class="d-flex justify-contant-around">
                   <h6>Subtotal</h6>
                   <h6>3100 </h6>
               </div>
               <div class="d-flex justify-contant-around">
                   <h6>Shipping</h6>
                   <h6>80 </h6>
               </div>
               <hr class="second-hr">
               <div class="d-flex justify-contant-flex-around">
                   <h6>Total</h6>
                   <h6 class="ms-4">3180 </h6>
               </div>
               <a href="" class="btn">Confirm</a>
            </div>
        
        </div>
        
            </section>







@endsection