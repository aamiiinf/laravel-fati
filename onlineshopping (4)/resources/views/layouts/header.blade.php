{{--<h1>Header</h1>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>فروشگاه لباس</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>

    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">


</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-6">--}}
{{--                    <div class="contactinfo">--}}
{{--                        <ul class="nav nav-pills">--}}
{{--                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6">--}}
{{--                    <div class="social-icons pull-right">--}}
{{--                        <ul class="nav navbar-nav">--}}
{{--                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            @if(session('cart'))
                <div class="alert alert-success alert-dismissable fade show" role="alert">
                    <strong>{{session('cart')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row">
                {{--    @if(session('cart'))--}}
                {{--        <div class="alert alert-success alert-dismissable fade show" role="alert">--}}
                {{--            <strong>{{session('cart')}}</strong>--}}
                {{--            <button type="button" class="close" data-dismiss="alert" aria-label="close">--}}
                {{--                <span aria-hidden="true">&times;</span>--}}
                {{--            </button>--}}

                {{--        </div>--}}
                {{--    @endif
{{--                <div class="col-sm-4">--}}
{{--                    <div class="navbar-header">--}}
{{--                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">--}}
{{--                            <span class="sr-only">Toggle navigation</span>--}}
{{--                            <span class="icon-bar"></span>--}}
{{--                            <span class="icon-bar"></span>--}}
{{--                            <span class="icon-bar"></span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="mainmenu pull-right">--}}
{{--                        --}}{{--                <div class="mainmenu pull-left">--}}
{{--                        <ul class="nav navbar-nav collapse navbar-collapse">--}}
{{--                            <li class="dropdown"><a href="#">فروشگاه<i class="fa fa-angle-down"></i></a>--}}
{{--                                <ul role="menu" class="sub-menu">--}}
{{--                                    <li><a href="login.html">ورود</a></li>--}}
{{--                                    <li><a href="cart.html">سبد خرید</a></li>--}}
{{--                                    <li><a href="checkout.html">پرداخت</a></li>--}}
{{--                                    <li><a href="product-details.html">صفحه جزیات محصولات</a></li>--}}
{{--                                    <li><a href="shop.html">محصولات</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="dropdown"><a href="#">بلاگ<i class="fa fa-angle-down"></i></a>--}}
{{--                                <ul role="menu" class="sub-menu">--}}
{{--                                    <li><a href="blog.html">لیست بلاگ</a></li>--}}
{{--                                    <li><a href="blog-single.html">وبلاگ تک</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="404.html">404</a></li>--}}
{{--                            <li><a href="contact-us.html">تماس با ما</a></li>--}}
{{--                            <li><a href="index.html" class="active">خانه</a></li>--}}
{{--                            --}}{{--                            <li><a href="index.html" class="active">Home</a></li>--}}
{{--                            --}}{{--                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>--}}
{{--                            --}}{{--                                <ul role="menu" class="sub-menu">--}}
{{--                            --}}{{--                                    <li><a href="shop.html">Products</a></li>--}}
{{--                            --}}{{--                                    <li><a href="product-details.html">Product Details</a></li>--}}
{{--                            --}}{{--                                    <li><a href="checkout.html">Checkout</a></li>--}}
{{--                            --}}{{--                                    <li><a href="cart.html">Cart</a></li>--}}
{{--                            --}}{{--                                    <li><a href="login.html">Login</a></li>--}}
{{--                            --}}{{--                                </ul>--}}
{{--                            --}}{{--                            </li>--}}
{{--                            --}}{{--                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>--}}
{{--                            --}}{{--                                <ul role="menu" class="sub-menu">--}}
{{--                            --}}{{--                                    <li><a href="blog.html">Blog List</a></li>--}}
{{--                            --}}{{--                                    <li><a href="blog-single.html">Blog Single</a></li>--}}
{{--                            --}}{{--                                </ul>--}}
{{--                            --}}{{--                            </li>--}}
{{--                            --}}{{--                            <li><a href="404.html">404</a></li>--}}
{{--                            --}}{{--                            <li><a href="contact-us.html">Contact</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="logo pull-left">--}}
{{--                        <a href="index.html"><img src="{{asset('images/home/logo.png')}}" alt="" /></a>--}}
{{--                    </div>--}}
{{--                    <div class="btn-group pull-right">--}}
{{--                        <div class="btn-group">--}}
{{--                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">--}}
{{--                                USA--}}
{{--                                <span class="caret"></span>--}}
{{--                            </button>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#">Canada</a></li>--}}
{{--                                <li><a href="#">UK</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="btn-group">--}}
{{--                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">--}}
{{--                                DOLLAR--}}
{{--                                <span class="caret"></span>--}}
{{--                            </button>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#">Canadian Dollar</a></li>--}}
{{--                                <li><a href="#">Pound</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-sm-8">
                    <div class="shop-menu pull-right2">
                        @php
                           $total = App\Models\Cart::all()->where('user_ip',request()->ip())->sum(function ($t){
                           return $t->price * $t->qty;
                           });
                           $quantity = App\Models\Cart::where('user_ip',request()->ip())->sum('qty');
                           $wishqty = App\Models\Wishlist::where('user_id',Auth::id())->get();


                        @endphp
                        <ul class="nav navbar-nav">
{{--                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>--}}
                            <li><a href="#"><i class="fa fa-user"></i> اکانت من</a></li>
{{--                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>--}}
{{--                            <li><a href="{{ url('wishlist') }}"><i class="fa fa-star"></i> لیست علاقه مندی ها</a><span>{{ count($wishqty) }}</span></li>--}}
{{--                            <li><a href="{{ url('wishlist') }}"><i class="fa fa-star"></i> لیست علاقه مندی ها <span>{{ count($wishqty) }}</span> </a></li>--}}
                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-star"></i> لیست علاقه مندی ها <span>{{ count($wishqty) }}</span> </a></li>
{{--                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>--}}
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> پرداخت ها <span>{{$total}}تومان</span> </a></li>
{{--                            <li><a href="#"></a><i class="fa fa-shopping-cart"></i>Cart </li>--}}
{{--                            @if(Auth::check())--}}
{{--                                <li><a href="/home"><i class="fa fa-lock"></i> Profile</a></li>--}}
{{--                            @else--}}
{{--                            <li><a href="{{route('cartproducts')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>--}}
{{--                            <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i>سبد خرید <span>{{ $quantity }}</span></a></li>--}}
                            <li><a href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i>سبد خرید <span>{{ $quantity }}</span></a></li>
                            @if(Auth::check())
{{--                            <li><a href="/login"><i class="fa fa-lock"></i> Login</a></li>--}}
{{--                                <li><a href="/home"><i class="fa fa-lock"></i> Profile</a></li>--}}
                                <li><a href="/home"><i class="fa fa-lock"></i> پروفایل</a></li>
                            @else
{{--                                <li><a href="/login"><i class="fa fa-lock"></i> Login</a></li>--}}
                                <li><a href="/login"><i class="fa fa-lock"></i> ورود</a></li>
                            @endif
                        </ul>
                        <ul class="navbar-nav ml-auto">
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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    {{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
                                    {{--                                       onclick="event.preventDefault();--}}
                                    {{--                                                     document.getElementById('logout-form').submit();">--}}
                                    {{--                                        {{ __('Logout') }}--}}
                                    {{--                                    </a>--}}

                                    {{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                                    {{--                                        @csrf--}}
                                    {{--                                    </form>--}}
                                    {{--                                </div>--}}
                                    <a href="{{ route('logout') }}" class="nav-link float-right"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="shop-menu pull-right">
                        {{--                <div class="mainmenu pull-left">--}}
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li class="dropdown"><a href="#">فروشگاه<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="login.html">ورود</a></li>
                                    <li><a href="cart.html">سبد خرید</a></li>
                                    <li><a href="checkout.html">پرداخت</a></li>
                                    <li><a href="product-details.html">صفحه جزیات محصولات</a></li>
                                    <li><a href="shop.html">محصولات</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">بلاگ<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">لیست بلاگ</a></li>
                                    <li><a href="blog-single.html">وبلاگ تک</a></li>
                                </ul>
                            </li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="contact-us.html">تماس با ما</a></li>
                            <li><a href="{{ url('/') }}" class="active">خانه</a></li>
                            {{--                            <li><a href="index.html" class="active">Home</a></li>--}}
                            {{--                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>--}}
                            {{--                                <ul role="menu" class="sub-menu">--}}
                            {{--                                    <li><a href="shop.html">Products</a></li>--}}
                            {{--                                    <li><a href="product-details.html">Product Details</a></li>--}}
                            {{--                                    <li><a href="checkout.html">Checkout</a></li>--}}
                            {{--                                    <li><a href="cart.html">Cart</a></li>--}}
                            {{--                                    <li><a href="login.html">Login</a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>--}}
                            {{--                                <ul role="menu" class="sub-menu">--}}
                            {{--                                    <li><a href="blog.html">Blog List</a></li>--}}
                            {{--                                    <li><a href="blog-single.html">Blog Single</a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                            {{--                            <li><a href="404.html">404</a></li>--}}
                            {{--                            <li><a href="contact-us.html">Contact</a></li>--}}
                        </ul>
                    </div>
                </div>

            </div>
{{--            <div class="row">--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="search_box pull-right1">--}}
{{--                        <form action="search" method="get">--}}
{{--                            <input type="text" name="searchText" placeholder="Search"/>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-9">--}}
{{--                    <div class="navbar-header">--}}
{{--                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">--}}
{{--                            <span class="sr-only">Toggle navigation</span>--}}
{{--                            <span class="icon-bar"></span>--}}
{{--                            <span class="icon-bar"></span>--}}
{{--                            <span class="icon-bar"></span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="mainmenu pull-right">--}}
{{--                        --}}{{--                <div class="mainmenu pull-left">--}}
{{--                        <ul class="nav navbar-nav collapse navbar-collapse">--}}
{{--                            <li class="dropdown"><a href="#">فروشگاه<i class="fa fa-angle-down"></i></a>--}}
{{--                            <ul role="menu" class="sub-menu">--}}
{{--                            <li><a href="login.html">ورود</a></li>--}}
{{--                            <li><a href="cart.html">سبد خرید</a></li>--}}
{{--                            <li><a href="checkout.html">پرداخت</a></li>--}}
{{--                            <li><a href="product-details.html">صفحه جزیات محصولات</a></li>--}}
{{--                            <li><a href="shop.html">محصولات</a></li>--}}
{{--                            </ul>--}}
{{--                            </li>--}}
{{--                            <li class="dropdown"><a href="#">بلاگ<i class="fa fa-angle-down"></i></a>--}}
{{--                                <ul role="menu" class="sub-menu">--}}
{{--                                    <li><a href="blog.html">لیست بلاگ</a></li>--}}
{{--                                    <li><a href="blog-single.html">وبلاگ تک</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="404.html">404</a></li>--}}
{{--                            <li><a href="contact-us.html">تماس با ما</a></li>--}}
{{--                            <li><a href="index.html" class="active">خانه</a></li>--}}
{{--                            <li><a href="index.html" class="active">Home</a></li>--}}
{{--                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>--}}
{{--                                <ul role="menu" class="sub-menu">--}}
{{--                                    <li><a href="shop.html">Products</a></li>--}}
{{--                                    <li><a href="product-details.html">Product Details</a></li>--}}
{{--                                    <li><a href="checkout.html">Checkout</a></li>--}}
{{--                                    <li><a href="cart.html">Cart</a></li>--}}
{{--                                    <li><a href="login.html">Login</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>--}}
{{--                                <ul role="menu" class="sub-menu">--}}
{{--                                    <li><a href="blog.html">Blog List</a></li>--}}
{{--                                    <li><a href="blog-single.html">Blog Single</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="404.html">404</a></li>--}}
{{--                            <li><a href="contact-us.html">Contact</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div><!--/header-bottom-->
            </div>
        </div>
    </div><!--/header-middle-->
</header>
