<header class="site-navbar" role="banner">
    <div class="site-navbar-top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                    <form action="" class="site-block-top-search">
                        <span class="icon icon-search2"></span>
                        <input type="text" class="form-control border-0" placeholder="Search">
                    </form>
                </div>

                <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                    <div class="site-logo">
                        <a href="{{ route('index') }}" class="js-logo-clone">Shoppers</a>
                    </div>
                </div>

                <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                    <div class="site-top-icons">
                        <ul>
                            <li><a href="{{ route('user_profile') }}">
                                    <span class="icon icon-person"></span></a></li>
                            {{-- ajex --}}
                            <li><a href="{{ route('wishlist') }}" class="site-cart">
                                    <span class="icon icon-heart-o"></span>
                                    <span class="count">{{ Cart::instance('wishlist')->content()->count() }}</span>
                                </a></li>
                            <li>
                                <a href="{{ route('cart') }}" class="site-cart">
                                    <span class="icon icon-shopping_cart"></span>

                                    <span class="count">{{ $count = Cart::instance('shopping')->count() }}</span>
                                </a>
                            </li>
                            @auth

                            <li>
                                <div class="dropdown show">
                                    <a class="btn btn-light dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Checkout
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('dashboard2') }}">My Dashboard</a>
                                        <a class="dropdown-item"
                                            href="{{ route('front.frontInterface.my-orders') }}">My Order</a>
                                        {{-- <a class="dropdown-item" href="{{route('logout')}}">logout</a> --}}
                                    </div>
                                </div>
                            </li>
                            @endauth

                            <li>

                            </li>
                            {{-- end ajex --}}
                            <li class="d-inline-block d-md-none ml-md-0"><a href="#"
                                    class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">
                <li class="">
                    <a href="{{ route('index') }}">Home</a>
                    {{-- <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
                <li class="has-children">
                  <a href="#">Sub Menu</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                  </ul>
                </li>
              </ul> --}}
                </li>
                <li class="">
                    <a href="{{ route('about') }}">About</a>
                    {{-- <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul> --}}
                </li>
                <li><a href="{{ route('shop') }}">Shop</a></li>

                <li><a href="{{ route('contact') }}">Contact</a></li>

                {{-- resturnt app 3 --}}
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ route('dashboard2') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </nav>
</header>
