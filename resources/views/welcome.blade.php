@extends('layouts.app')
@section('content')
    <!-- ======================start content========================== -->
    <header class="header" id="header">


        <!-- Categories Section -->
        <section class="section category">
            <div class="cat-center">
                {{-- <div class="cat" name="category_pic">
                  @foreach ($data as $category)
                      
                    <img src="enduser/img/cat3.jpg" alt="" />
                    {{$category->category_pic}}
                    <div>
                        <a href="" name="category_name">
                            <p>{{$category->category_name}}</p>
                        </a>
                    </div>
                  @endforeach

                </div> --}}
                <div class="cat" name="category_pic">
                      
                    <img src="enduser/img/cat3.jpg" alt="" />
                    <div>
                        <a href="" name="category_name">
                            <p>Woman</p>
                        </a>
                    </div>

                </div>
                <div class="cat">
                    <img src="enduser/img/cat2.jpg" alt="" />
                    <div>
                        <a href="">
                            <p>CHEK OUR offers</p>
                        </a>
                    </div>
                </div>
                <div class="cat">
                    <img src="enduser/img/headerpic.png" alt="" />
                    <div>
                        <a href="/sales">
                            <p>SALES</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- New Arrivals -->
        <section class="section new-arrival">
            <div class="title">
                <h1>NEW ARRIVALS</h1>
                <p>All the latest picked from designer of our store</p>
            </div>

            <div class="product-center">
                {{-- <div class="product-item">
                    <div class="overlay">
                      @foreach($products as $product)
                        
                        <a href="productDetails.html" class="product-thumb" name="image">
                          {{$product->image}}
                        </a>
                    </div>
                    <div class="product-info">
                        <span name="title">{{$product->title}}</span>
                        <h4 name="price">{{$product->price}}</h4>
                        <input name="desc">
                        <input name="category">
                        <input name="quantity">
                        <input name="discount_price">
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></i></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>

                    </ul>
                    @endforeach

                </div> --}}
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic50.png" alt="pic" />
                        </a>
                    </div>

                    <div class="product-info">
                        <span>Black Pump Jacket</span>
                        <h4>1200 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></i></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic50.png" alt="pic" />
                        </a>
                    </div>

                    <div class="product-info">
                        <span>Black Pump Jacket</span>
                        <h4>1200 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></i></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic80.jpg" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>Red Suit</span>
                        <h4>1500 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></i></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic30.png" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>Blak Suit</span>
                        <h4>1900 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></i></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic20.png" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>Brown Jacket</span>
                        <h4>700 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></i></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic40.png" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>White Dress</span>
                        <h4>900 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></i></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic300.jpg" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>Jacket Jeans</span>
                        <h4>500 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></i></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/jeans1.jpg" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>Jeans</span>
                        <h4>460 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Promo -->

        <section class="section banner row">
            <div class="col left">
                <span class="trend">Trend Design</span>
                <h1>New Collection 2022</h1>
                <p>New Arrival <span class="color">Sale 50% OFF</span> Limited Time Offer</p>
                <a href="enduser/offers.html" class="btn btn-1">Discover Now</a>
            </div>
            <div class="col right">
                <img src="enduser/img/banner.png" alt="">
            </div>
        </section>




        <!-- ===============================start product=================================== -->

        <section class="section new-arrival">
            <div class="title">
                <h1>Our Spicial Designs</h1>
                <p>All the latest picked from designer of our store</p>
            </div>

            <div class="product-center">
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/jeans3.jpg" alt="" />
                        </a>
                        <span class="discount">50%</span>
                    </div>
                    <div class="product-info">
                        <span>Trendy Jeans</span>
                        <h4>400 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></li>
                        {{-- <li>
                          <form method="post" action="{{url('addcart', $product->id)}}">
                            @csrf 
                          <a href="cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 50px; height: 50px">
                                </lord-icon>
                            </a>
                          </form>
                          </li> --}}
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/jeans2.jpg" alt="" />
                        </a>
                    </div>

                    <div class="product-info">
                        <span>Trendy Jeans</span>
                        <h4>500 EPG</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></i></li>
                        <li> <a href="enduser/cart.html">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic10.png" alt="" />
                        </a>
                        <span class="discount">40%</span>
                    </div>
                    <div class="product-info">
                        <span>Dress</span>
                        <h4>1150 EPG</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic11 (2).jpg" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>White Blouse</span>
                        <h4>350 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic11 (1).jpg" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>White Shirt</span>
                        <h4>350 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic11 (3).jpg" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>Shirt</span>
                        <h4>400 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic11 (5).jpg" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>T-Shirt</span>
                        <h4>260 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic11 (6).jpg" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>T-Shirt</span>
                        <h4>200 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="enduser/img/pic11 (7).jpg" alt="" />
                        </a>
                    </div>
                    <div class="product-info">
                        <span>T-Shirt</span>
                        <h4>250 EGP</h4>
                    </div>
                    <ul class="icons">
                        <li> <a href="../views/CartView.vue" class="active">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#121331,secondary:#c71f16" style="width: 50px; height: 50px">
                                </lord-icon>
                            </a></li>
                        <li> <a href="/cart">
                                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop"
                                    style="width: 70px; height: 70px">
                                </lord-icon>
                            </a></li>
                    </ul>
                </div>

        </section>

        <!-- ===============================start product=================================== -->








        <!-- ======================end content========================== -->
    @endsection
