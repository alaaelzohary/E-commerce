@extends('layouts.app')

@section('content')
<div class="product-item">
    @foreach($products as $product)
    <div class="overlay">
        <a href="" class="product-thumb">
            {{$product->image}}
        </a>
        <span class="discount">{{$product->discount_price}}</span>
    </div>
    <div class="product-info">
        <span>{{$product->title}}</span>
        <h4>{{$product->price}}</h4>
    </div>
    <ul class="icons">
        <li> <a href="../views/CartView.vue" class="active">
                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                </lord-icon>
            </a></li>
        <li> <a href="enduser/cart.html">
                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                    style="width: 70px; height: 70px">
                </lord-icon>
            </a></li>
    </ul>
    @endforeach
</div>


@endsection