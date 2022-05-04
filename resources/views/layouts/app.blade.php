<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="{{URL::asset('enduser/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('enduser/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" id="light-mode" href="{{URL::asset('enduser/css/style.css')}}">
    {{-- <link rel="stylesheet" id="dark-mode" href="{{ URL::asset('enduser/css/style.css') }}"> --}}

</head>

<body class="body" id="body">

   
 

        <!-- start navbar -->
        <nav class="navbar navbar-expand-lg navbar-light top-0 w-100 position-fixed ">
            <div class="container mt-0">
                <a class="navbar-brand" href="#">
                    <h3> E<span>-</span>Commerce</h3>
                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 ">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item ">
                            <form type="get" action="{{url('/search')}}">
                                @csrf
                            <div class="search-box" media="max=600px">
                                <input type="text" v-b-popover.hover.topleft="Search!" placeholder="Search...."
                                    class="search-input" name="box-search"/>
                                <a href="#" class="icon">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        style="width: 50px; height: 50px">
                                    </lord-icon>
                                </a>
                            </div>
                        </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cart">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/like">Like</a>
                        </li>
                      
                     
                        <li class="nav-item">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"><i class="fas fa-moon moon-icon"></i></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="#"><i class="fas fa-sun sun-icon"></i></a>
                      </li>

                    </ul>


                </div>

            </div>
        </nav>
      @if (session()->has('message'))
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
      {{session()->get('message')}}
        </div>
        @endif

        <!-- end navbar -->

        <!-- start sticky navbar -->
        <nav class="navbar navbar-expand-lg navbar-light sticky-navbar top-0 w-100 position-fixed ">
            <div class="container">
                <a class="navbar-brand " href="{{url('/')}}">
                    <h3> E<span>-</span>Commerce</h3>
                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <form type="get" action="{{url('/search')}}">
                                @csrf
                            <div class="search-box" media="max=600px">
                                <input type="text" v-b-popover.hover.topleft="Search!" placeholder="Search...."
                                    class="search-input" name="box-search"/>
                                <a href="#" class="icon">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        style="width: 50px; height: 50px">
                                    </lord-icon>
                                </a>
                            </div>
                            </form>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/cart">Cart</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/like">Like</a>
                        </li>
                       
                        <li class="nav-item">
                           <!-- Authentication Links -->
                           @guest
                           @if (Route::has('login'))
                       <li class="nav-item">
                           <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                       </li>
                       @endif

                       @if (Route::has('register'))
                           <li class="nav-item">
                               <a class="nav-link " href="{{ route('register') }}">{{ __('Register') }}</a>
                           </li>
                       @endif
                   @else
                       <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->name }}
                           </a>

                           <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                   class="d-none">
                                   @csrf
                               </form>
                           </div>
                       </li>
                   @endguest
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"><i class="fas fa-moon moon-icon"></i></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><i class="fas fa-sun sun-icon"></i></a>
                      </li>
                    </ul>


                </div>

            </div>
        </nav>

        <!-- end sticky navbar -->
{{-- =========================start header========================== --}}
<header>
    <div class="musthead mb-5">
        <img src="enduser/img/pic90.png" alt="pic" class="headerpic">
    </div>
    </header>
{{-- =========================start header========================== --}}
        @yield('content')
        <!-- ===========================start footer============================= -->
        <footer class="page mt-5">
          <div class="container py-5">
            <div class="row py-4">
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="enduser/img/logo.png" alt="" width="180" class="mb-3">
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Shop</h6>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><a href="{{url('/')}}" class="text-muted">For Women</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Stores</a></li>
                  <li class="mb-2"><a href="/sales" class="text-muted">Our Sales</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><a href="{{ route('login') }}" class="">Login</a></li>
                  <li class="mb-2"><a href="{{ route('register') }}" class="text-muted">Register</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Wishlist</a></li>
                  <li class="mb-2"><a href="{{url('/')}}" class="text-muted">Our Products</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-6 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
                <p class="text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
             
              </div>
            </div>
          </div>
        
          <!-- Copyrights -->
          <div class="bg-light py-4">
            <div class="container text-center">
              <p class="text-muted mb-0 py-2">© 2022 E-commerce All rights reserved.</p>
            </div>
          </div>
        </footer>



        <!-- ===========================end footer============================= -->





        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
        <script src="./js/index.js"></script>

        <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
        <script src="{{ URL::asset('enduser/js/main.js') }}"></script>
        <script src="{{ URL::asset('enduser/js/bootstrap.min.js') }}"></script>
</body>

</html>
