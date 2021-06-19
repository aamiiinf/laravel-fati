@extends('layouts.fontend-master')

@section('content')



    {{--@extends('layouts.index')--}}

    {{--@section('center')--}}

    {{--    <h2>This is center this page</h2>--}}
    {{--<div class="header-bottom"><!--header-bottom-->--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-sm-9">--}}
    {{--                <div class="navbar-header">--}}
    {{--                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">--}}
    {{--                        <span class="sr-only">Toggle navigation</span>--}}
    {{--                        <span class="icon-bar"></span>--}}
    {{--                        <span class="icon-bar"></span>--}}
    {{--                        <span class="icon-bar"></span>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--                <div class="mainmenu pull-left">--}}
    {{--                    <ul class="nav navbar-nav collapse navbar-collapse">--}}
    {{--                        <li><a href="index.html" class="active">Home</a></li>--}}
    {{--                        <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>--}}
    {{--                            <ul role="menu" class="sub-menu">--}}
    {{--                                <li><a href="shop.html">Products</a></li>--}}
    {{--                                <li><a href="product-details.html">Product Details</a></li>--}}
    {{--                                <li><a href="checkout.html">Checkout</a></li>--}}
    {{--                                <li><a href="cart.html">Cart</a></li>--}}
    {{--                                <li><a href="login.html">Login</a></li>--}}
    {{--                            </ul>--}}
    {{--                        </li>--}}
    {{--                        <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>--}}
    {{--                            <ul role="menu" class="sub-menu">--}}
    {{--                                <li><a href="blog.html">Blog List</a></li>--}}
    {{--                                <li><a href="blog-single.html">Blog Single</a></li>--}}
    {{--                            </ul>--}}
    {{--                        </li>--}}
    {{--                        <li><a href="404.html">404</a></li>--}}
    {{--                        <li><a href="contact-us.html">Contact</a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm-3">--}}
    {{--                <div class="search_box pull-right">--}}
    {{--                    <input type="text" placeholder="Search"/>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div><!--/header-bottom-->--}}
    {{--</header><!--/header-->--}}

    {{--<section id="slider"><!--slider-->--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-sm-12">--}}
    {{--                <div id="slider-carousel" class="carousel slide" data-ride="carousel">--}}
    {{--                    <ol class="carousel-indicators">--}}
    {{--                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>--}}
    {{--                        <li data-target="#slider-carousel" data-slide-to="1"></li>--}}
    {{--                        <li data-target="#slider-carousel" data-slide-to="2"></li>--}}
    {{--                    </ol>--}}

    {{--                    <div class="carousel-inner">--}}
    {{--                        <div class="item active">--}}
    {{--                            <div class="col-sm-6">--}}
    {{--                                <h1><span>E</span>-SHOPPER</h1>--}}
    {{--                                <h2>Free E-Commerce Template</h2>--}}
    {{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>--}}
    {{--                                <button type="button" class="btn btn-default get">Get it now</button>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-6">--}}
    {{--                                <img src="{{asset('images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />--}}
    {{--                                <img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="item">--}}
    {{--                            <div class="col-sm-6">--}}
    {{--                                <h1><span>E</span>-SHOPPER</h1>--}}
    {{--                                <h2>100% Responsive Design</h2>--}}
    {{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>--}}
    {{--                                <button type="button" class="btn btn-default get">Get it now</button>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-6">--}}
    {{--                                <img src="{{asset('images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />--}}
    {{--                                <img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="item">--}}
    {{--                            <div class="col-sm-6">--}}
    {{--                                <h1><span>E</span>-SHOPPER</h1>--}}
    {{--                                <h2>Free Ecommerce Template</h2>--}}
    {{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>--}}
    {{--                                <button type="button" class="btn btn-default get">Get it now</button>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-6">--}}
    {{--                                <img src="{{asset('images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />--}}
    {{--                                <img src="{{asset('images/home/pricing.png')}}" class="pricing" alt="" />--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}

    {{--                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">--}}
    {{--                        <i class="fa fa-angle-left"></i>--}}
    {{--                    </a>--}}
    {{--                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">--}}
    {{--                        <i class="fa fa-angle-right"></i>--}}
    {{--                    </a>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section><!--/slider-->--}}

    {{--<section>--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-sm-3">--}}
    {{--                <div class="left-sidebar">--}}
    {{--                    <h2>Category</h2>--}}
    {{--                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->--}}
    {{--                        <div class="panel panel-default">--}}
    {{--                            <div class="panel-heading">--}}
    {{--                                <h4 class="panel-title"><a href="{{Route('menProducts')}}">Men</a>--}}
    {{--                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">--}}
    {{--                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>--}}
    {{--                                        Sportswear--}}
    {{--                                    </a>--}}
    {{--                                </h4>--}}
    {{--                            </div>--}}
    {{--                            </div>--}}

    {{--                        <div class="panel panel-default">--}}
    {{--                            <div class="panel-heading">--}}
    {{--                                <h4 class="panel-title"><a href="{{Route('womenProducts')}}">Women</a>--}}
    {{--                                    --}}{{--                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">--}}
    {{--                                    --}}{{--                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>--}}
    {{--                                    --}}{{--                                        Sportswear--}}
    {{--                                    --}}{{--                                    </a>--}}
    {{--                                </h4>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                            <div id="sportswear" class="panel-collapse collapse">--}}
    {{--                                <div class="panel-body">--}}
    {{--                                    <ul>--}}
    {{--                                        <li><a href="#">Nike </a></li>--}}
    {{--                                        <li><a href="#">Under Armour </a></li>--}}
    {{--                                        <li><a href="#">Adidas </a></li>--}}
    {{--                                        <li><a href="#">Puma</a></li>--}}
    {{--                                        <li><a href="#">ASICS </a></li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="panel panel-default">--}}
    {{--                            <div class="panel-heading">--}}
    {{--                                <h4 class="panel-title">--}}
    {{--                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">--}}
    {{--                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>--}}
    {{--                                        Mens--}}
    {{--                                    </a>--}}
    {{--                                </h4>--}}
    {{--                            </div>--}}
    {{--                            <div id="mens" class="panel-collapse collapse">--}}
    {{--                                <div class="panel-body">--}}
    {{--                                    <ul>--}}
    {{--                                        <li><a href="#">Fendi</a></li>--}}
    {{--                                        <li><a href="#">Guess</a></li>--}}
    {{--                                        <li><a href="#">Valentino</a></li>--}}
    {{--                                        <li><a href="#">Dior</a></li>--}}
    {{--                                        <li><a href="#">Versace</a></li>--}}
    {{--                                        <li><a href="#">Armani</a></li>--}}
    {{--                                        <li><a href="#">Prada</a></li>--}}
    {{--                                        <li><a href="#">Dolce and Gabbana</a></li>--}}
    {{--                                        <li><a href="#">Chanel</a></li>--}}
    {{--                                        <li><a href="#">Gucci</a></li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="panel panel-default">--}}
    {{--                            <div class="panel-heading">--}}
    {{--                                <h4 class="panel-title">--}}
    {{--                                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">--}}
    {{--                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>--}}
    {{--                                        Womens--}}
    {{--                                    </a>--}}
    {{--                                </h4>--}}
    {{--                            </div>--}}
    {{--                            <div id="womens" class="panel-collapse collapse">--}}
    {{--                                <div class="panel-body">--}}
    {{--                                    <ul>--}}
    {{--                                        <li><a href="#">Fendi</a></li>--}}
    {{--                                        <li><a href="#">Guess</a></li>--}}
    {{--                                        <li><a href="#">Valentino</a></li>--}}
    {{--                                        <li><a href="#">Dior</a></li>--}}
    {{--                                        <li><a href="#">Versace</a></li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="panel panel-default">--}}
    {{--                            <div class="panel-heading">--}}
    {{--                                <h4 class="panel-title"><a href="#">Kids</a></h4>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="panel panel-default">--}}
    {{--                            <div class="panel-heading">--}}
    {{--                                <h4 class="panel-title"><a href="#">Fashion</a></h4>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="panel panel-default">--}}
    {{--                            <div class="panel-heading">--}}
    {{--                                <h4 class="panel-title"><a href="#">Households</a></h4>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="panel panel-default">--}}
    {{--                            <div class="panel-heading">--}}
    {{--                                <h4 class="panel-title"><a href="#">Interiors</a></h4>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="panel panel-default">--}}
    {{--                            <div class="panel-heading">--}}
    {{--                                <h4 class="panel-title"><a href="#">Clothing</a></h4>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="panel panel-default">--}}
    {{--                            <div class="panel-heading">--}}
    {{--                                <h4 class="panel-title"><a href="#">Bags</a></h4>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="panel panel-default">--}}
    {{--                            <div class="panel-heading">--}}
    {{--                                <h4 class="panel-title"><a href="#">Shoes</a></h4>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div><!--/category-products-->--}}

    {{--                    <div class="brands_products"><!--brands_products-->--}}
    {{--                        <h2>Brands</h2>--}}
    {{--                        <div class="brands-name">--}}
    {{--                            <ul class="nav nav-pills nav-stacked">--}}
    {{--                                <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>--}}
    {{--                                <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>--}}
    {{--                                <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>--}}
    {{--                                <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>--}}
    {{--                                <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>--}}
    {{--                                <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>--}}
    {{--                                <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div><!--/brands_products-->--}}

    {{--                    <div class="price-range"><!--price-range-->--}}
    {{--                        <h2>Price Range</h2>--}}
    {{--                        <div class="well text-center">--}}
    {{--                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />--}}
    {{--                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>--}}
    {{--                        </div>--}}
    {{--                    </div><!--/price-range-->--}}

    {{--                    <div class="shipping text-center"><!--shipping-->--}}
    {{--                        <img src="{{asset('images/home/shipping.jpg')}}" alt="" />--}}
    {{--                    </div><!--/shipping-->--}}

    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="col-sm-9 padding-right">--}}
    {{--                <div class="features_items"><!--features_items-->--}}
    {{--                    <h2 class="title text-center">Features Items</h2>--}}

    {{--                    @foreach($products as $product)--}}

    {{--                    <div class="col-sm-4">--}}
    {{--                        <div class="product-image-wrapper">--}}
    {{--                            <div class="single-products">--}}
    {{--                                <div class="productinfo text-center">--}}
    {{--                                    <img src="{{asset('images/home/product1.jpg')}}" alt="" />--}}
    {{--                                    <img src="{{$Storage::disk('local')->url('$product_images/'.$product->image)}}" alt=""/>--}}
    {{--                                    <h2>$56</h2>--}}
    {{--                                    <h2>{{$product->price}}</h2>--}}
    {{--                                    <p>{{$product->name}}</p>--}}
    {{--                                    <p>{{$product->description	}}</p>--}}
    {{--                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                </div>--}}
    {{--                                <div class="product-overlay">--}}
    {{--                                    <div class="overlay-content">--}}
    {{--                                        <h2>$56</h2>--}}
    {{--                                        <h2>{{$product->price}}</h2>--}}
    {{--                                        <p>{{$product->name}}</p>--}}
    {{--                                        <p>Easy Polo Black Edition</p>--}}
    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        <a href="{{route('AddToCartProduct',['id'=>$product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="choose">--}}
    {{--                                <ul class="nav nav-pills nav-justified">--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    @endforeach--}}
    {{--                    <div class="col-sm-4">--}}
    {{--                        <div class="product-image-wrapper">--}}
    {{--                            <div class="single-products">--}}
    {{--                                <div class="productinfo text-center">--}}
    {{--                                    <img src="{{asset('images/home/product2.jpg')}}" alt="" />--}}
    {{--                                    <h2>$56</h2>--}}
    {{--                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                </div>--}}
    {{--                                <div class="product-overlay">--}}
    {{--                                    <div class="overlay-content">--}}
    {{--                                        <h2>$56</h2>--}}
    {{--                                        <p>Easy Polo Black Edition</p>--}}
    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="choose">--}}
    {{--                                <ul class="nav nav-pills nav-justified">--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-sm-4">--}}
    {{--                        <div class="product-image-wrapper">--}}
    {{--                            <div class="single-products">--}}
    {{--                                <div class="productinfo text-center">--}}
    {{--                                    <img src="{{asset('images/home/product3.jpg')}}" alt="" />--}}
    {{--                                    <h2>$56</h2>--}}
    {{--                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                </div>--}}
    {{--                                <div class="product-overlay">--}}
    {{--                                    <div class="overlay-content">--}}
    {{--                                        <h2>$56</h2>--}}
    {{--                                        <p>Easy Polo Black Edition</p>--}}
    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="choose">--}}
    {{--                                <ul class="nav nav-pills nav-justified">--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-sm-4">--}}
    {{--                        <div class="product-image-wrapper">--}}
    {{--                            <div class="single-products">--}}
    {{--                                <div class="productinfo text-center">--}}
    {{--                                    <img src="{{asset('images/home/product4.jpg')}}" alt="" />--}}
    {{--                                    <h2>$56</h2>--}}
    {{--                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                </div>--}}
    {{--                                <div class="product-overlay">--}}
    {{--                                    <div class="overlay-content">--}}
    {{--                                        <h2>$56</h2>--}}
    {{--                                        <p>Easy Polo Black Edition</p>--}}
    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <img src="{{asset('images/home/new.png')}}" class="new" alt="" />--}}
    {{--                            </div>--}}
    {{--                            <div class="choose">--}}
    {{--                                <ul class="nav nav-pills nav-justified">--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-sm-4">--}}
    {{--                        <div class="product-image-wrapper">--}}
    {{--                            <div class="single-products">--}}
    {{--                                <div class="productinfo text-center">--}}
    {{--                                    <img src="{{asset('images/home/product5.jpg')}}" alt="" />--}}
    {{--                                    <h2>$56</h2>--}}
    {{--                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                </div>--}}
    {{--                                <div class="product-overlay">--}}
    {{--                                    <div class="overlay-content">--}}
    {{--                                        <h2>$56</h2>--}}
    {{--                                        <p>Easy Polo Black Edition</p>--}}
    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <img src="{{asset('images/home/sale.png')}}" class="new" alt="" />--}}
    {{--                            </div>--}}
    {{--                            <div class="choose">--}}
    {{--                                <ul class="nav nav-pills nav-justified">--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-sm-4">--}}
    {{--                        <div class="product-image-wrapper">--}}
    {{--                            <div class="single-products">--}}
    {{--                                <div class="productinfo text-center">--}}
    {{--                                    <img src="{{asset('images/home/product6.jpg')}}" alt="" />--}}
    {{--                                    <h2>$56</h2>--}}
    {{--                                    <p>Easy Polo Black Edition</p>--}}
    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                </div>--}}
    {{--                                <div class="product-overlay">--}}
    {{--                                    <div class="overlay-content">--}}
    {{--                                        <h2>$56</h2>--}}
    {{--                                        <p>Easy Polo Black Edition</p>--}}
    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="choose">--}}
    {{--                                <ul class="nav nav-pills nav-justified">--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                </div><!--features_items-->--}}
    {{--                {{$products->links()}}--}}

    {{--                <div class="category-tab"><!--category-tab-->--}}
    {{--                    <div class="col-sm-12">--}}
    {{--                        <ul class="nav nav-tabs">--}}
    {{--                            <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>--}}
    {{--                            <li><a href="#blazers" data-toggle="tab">Blazers</a></li>--}}
    {{--                            <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>--}}
    {{--                            <li><a href="#kids" data-toggle="tab">Kids</a></li>--}}
    {{--                            <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                    <div class="tab-content">--}}
    {{--                        <div class="tab-pane fade active in" id="tshirt" >--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery1.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery2.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery3.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery4.jpg')}}i" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="tab-pane fade" id="blazers" >--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery4.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery3.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery2.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery1.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="tab-pane fade" id="sunglass" >--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery3.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery4.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery1.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery2.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="tab-pane fade" id="kids" >--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery1.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery2.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery3.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery4.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="tab-pane fade" id="poloshirt" >--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery2.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery4.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery3.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-3">--}}
    {{--                                <div class="product-image-wrapper">--}}
    {{--                                    <div class="single-products">--}}
    {{--                                        <div class="productinfo text-center">--}}
    {{--                                            <img src="{{asset('images/home/gallery1.jpg')}}" alt="" />--}}
    {{--                                            <h2>$56</h2>--}}
    {{--                                            <p>Easy Polo Black Edition</p>--}}
    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div><!--/category-tab-->--}}

    {{--                <div class="recommended_items"><!--recommended_items-->--}}
    {{--                    <h2 class="title text-center">recommended items</h2>--}}

    {{--                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">--}}
    {{--                        <div class="carousel-inner">--}}
    {{--                            <div class="item active">--}}
    {{--                                <div class="col-sm-4">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{asset('images/home/recommend1.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-4">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{asset('images/home/recommend2.jpg')}}images/home/recommend2.jpg" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-4">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{asset('images/home/recommend3.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="item">--}}
    {{--                                <div class="col-sm-4">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{asset('images/home/recommend1.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-4">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{asset('images/home/recommend2.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-4">--}}
    {{--                                    <div class="product-image-wrapper">--}}
    {{--                                        <div class="single-products">--}}
    {{--                                            <div class="productinfo text-center">--}}
    {{--                                                <img src="{{asset('images/home/recommend3.jpg')}}" alt="" />--}}
    {{--                                                <h2>$56</h2>--}}
    {{--                                                <p>Easy Polo Black Edition</p>--}}
    {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">--}}
    {{--                            <i class="fa fa-angle-left"></i>--}}
    {{--                        </a>--}}
    {{--                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">--}}
    {{--                            <i class="fa fa-angle-right"></i>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div><!--/recommended_items-->--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}

    {{--@endsection--}}
    {{--<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">--}}

    {{--@foreach ($products as $product)--}}
    {{--    <p class="text-center">  {{ $product->name }}</p>--}}
    {{--    <p> {{ $product->price }}  </p>--}}
    {{--    <p> {{ $product->description }}  </p>--}}
    {{--@endforeach--}}



    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                {{--            <div class="col-sm-9">--}}
                {{--                <div class="navbar-header">--}}
                {{--                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">--}}
                {{--                        <span class="sr-only">Toggle navigation</span>--}}
                {{--                        <span class="icon-bar"></span>--}}
                {{--                        <span class="icon-bar"></span>--}}
                {{--                        <span class="icon-bar"></span>--}}
                {{--                    </button>--}}
                {{--                </div>--}}
                {{--                <div class="mainmenu pull-right">--}}
                {{--                <div class="mainmenu pull-left">--}}
                {{--                    <ul class="nav navbar-nav collapse navbar-collapse">--}}
                {{--                        <li><a href="index.html" class="active">Home</a></li>--}}
                {{--                        <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>--}}
                {{--                            <ul role="menu" class="sub-menu">--}}
                {{--                                <li><a href="shop.html">Products</a></li>--}}
                {{--                                <li><a href="product-details.html">Product Details</a></li>--}}
                {{--                                <li><a href="checkout.html">Checkout</a></li>--}}
                {{--                                <li><a href="cart.html">Cart</a></li>--}}
                {{--                                <li><a href="login.html">Login</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>--}}
                {{--                            <ul role="menu" class="sub-menu">--}}
                {{--                                <li><a href="blog.html">Blog List</a></li>--}}
                {{--                                <li><a href="blog-single.html">Blog Single</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li><a href="404.html">404</a></li>--}}
                {{--                        <li><a href="contact-us.html">Contact</a></li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                <div class="col-sm-12">
                    <div class="search_box pull-right">
                        <form action="search" method="get">
                            <input type="text" name="searchText" placeholder="Search"/>
                        </form>
                    </div>
                </div>
                {{--            <div class="col-sm-9">--}}
                {{--                <div class="navbar-header">--}}
                {{--                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">--}}
                {{--                        <span class="sr-only">Toggle navigation</span>--}}
                {{--                        <span class="icon-bar"></span>--}}
                {{--                        <span class="icon-bar"></span>--}}
                {{--                        <span class="icon-bar"></span>--}}
                {{--                    </button>--}}
                {{--                </div>--}}
                {{--                <div class="mainmenu pull-right">--}}
                {{--                    --}}{{--                <div class="mainmenu pull-left">--}}
                {{--                    <ul class="nav navbar-nav collapse navbar-collapse">--}}
                {{--                        <li><a href="index.html" class="active">Home</a></li>--}}
                {{--                        <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>--}}
                {{--                            <ul role="menu" class="sub-menu">--}}
                {{--                                <li><a href="shop.html">Products</a></li>--}}
                {{--                                <li><a href="product-details.html">Product Details</a></li>--}}
                {{--                                <li><a href="checkout.html">Checkout</a></li>--}}
                {{--                                <li><a href="cart.html">Cart</a></li>--}}
                {{--                                <li><a href="login.html">Login</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>--}}
                {{--                            <ul role="menu" class="sub-menu">--}}
                {{--                                <li><a href="blog.html">Blog List</a></li>--}}
                {{--                                <li><a href="blog-single.html">Blog Single</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li><a href="404.html">404</a></li>--}}
                {{--                        <li><a href="contact-us.html">Contact</a></li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
        </div>
    </div>

    <!--/header-bottom-->
    </header><!--/header-->

    <div class="container">
        @include('alert')
    </div>

{{--    @if ($products->isNotEmpty())--}}
        <section id="slider"><!--slider-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($products as $key=>$item)
                                    @if ($loop->iteration == 4)
                                        @break
                                    @endif
                                    <li data-target="#slider-carousel" data-slide-to="{{ $key - 1 }}" class="{{$loop->first ? 'active' : ''}}"></li>
                                @endforeach
                            </ol>

                            <div class="carousel-inner">
                                @foreach ($products as $item)
                                    @if ($loop->iteration == 4)
                                        @break
                                    @endif
                                    <div class="item {{$loop->first ? 'active' : ''}}">
                                        <div class="col-sm-6">
                                            <img src="{{ $item->image_url }}" class="girl img-responsive" alt="{{ $item->name }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <h1>{{ $item->name }}</h1>
                                            <h2>{{ $item->category->name }}</h2>
                                            <h2>{{ $item->brand->name }}</h2>
                                            <p>{{ $item->description }}</p>
                                            <a href="detail/{{$item['id']}}">
                                                <button type="button" class="btn btn-default get">خرید</button>
                                            </a>
                                            {{--                                <button type="button" class="btn btn-default get">خرید</button>--}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if($products->count() > 1)
                                <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </section><!--/slider-->
    @endif

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        @include('partial.category-products')
                        @include('partial.brand-products')


                        {{--                    </div><!--/category-products-->--}}

                        {{--                    <div class="brands_products"><!--brands_products-->--}}
                        {{--                        <h2>برند ها</h2>--}}
                        {{--                        <h2>Brands</h2>--}}
                        {{--                        <div class="brands-name">--}}
                        {{--                            <ul class="nav nav-pills nav-stacked">--}}
                        {{--                                <li><a href="#"> <span class="pull-right">برند1</span>(50)</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">برند1</span>(56)</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">برند1</span>(27)</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">برند1</span>(32)</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">برند1</span>(5)</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">برند1</span>(9)</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">برند1</span>(4)</a></li>--}}
                        {{--                                <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                        {{--                    </div><!--/brands_products-->--}}

                        <div class="price-range"><!--price-range-->
                            <h2>محدوده قیمت </h2>
                            {{--                        <h2>Price Range</h2>--}}
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="1000000" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                {{--                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>--}}
                                <b class="pull-left"> صفر تومان</b> <b class="pull-right">یک میلیون تومان </b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">مصولات ویژه</h2>
                        {{--                    <h2 class="title text-center">Features Items</h2>--}}

                        @foreach($products as $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            {{--                                       {{$product ->id}}--}}
                                            {{--                                        {{Storage::disk('local')->url('product_images/' .$product->image)}}--}}

                                            <img src="{{Storage::disk('local')->url('product_images/' .$product->image)}}">
                                            {{--                                        <img src="images/home/product1.jpg" alt="" />--}}
                                            <h2>{{$product-> price}}</h2>
                                            <p>{{$product-> name}}</p>
                                            <p>{{$product-> description}}</p>
                                            {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>{{$product-> price}}</h2>
                                                <p>{{$product-> name}}</p>
                                                {{--                                            <a href="{{route('AddToCartProduct',['id'=>$product -> id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                                <a href="detail/{{$product['id']}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>خرید</a>
                                                {{--                                            <a href="{{route('AddToCartProduct',['id'=>$product -> id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="{{ url('add/to-wishlist'.$product->id) }}"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>




                        @endforeach
                    </div>


                    {{$products->links()}}
                    <br>
                    {{--                    <div class="col-sm-4">--}}
                    {{--                        <div class="product-image-wrapper">--}}
                    {{--                            <div class="single-products">--}}
                    {{--                                <div class="productinfo text-center">--}}
                    {{--                                    <img src="images/home/product1.jpg" alt="" />--}}
                    {{--                                    <h2>$56</h2>--}}
                    {{--                                    <p>Easy Polo Black Edition</p>--}}
                    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="product-overlay">--}}
                    {{--                                    <div class="overlay-content">--}}
                    {{--                                        <h2>$56</h2>--}}
                    {{--                                        <p>Easy Polo Black Edition</p>--}}
                    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="choose">--}}
                    {{--                                <ul class="nav nav-pills nav-justified">--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-sm-4">--}}
                    {{--                        <div class="product-image-wrapper">--}}
                    {{--                            <div class="single-products">--}}
                    {{--                                <div class="productinfo text-center">--}}
                    {{--                                    <img src="images/home/product2.jpg" alt="" />--}}
                    {{--                                    <h2>$56</h2>--}}
                    {{--                                    <p>Easy Polo Black Edition</p>--}}
                    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="product-overlay">--}}
                    {{--                                    <div class="overlay-content">--}}
                    {{--                                        <h2>$56</h2>--}}
                    {{--                                        <p>Easy Polo Black Edition</p>--}}
                    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="choose">--}}
                    {{--                                <ul class="nav nav-pills nav-justified">--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-sm-4">--}}
                    {{--                        <div class="product-image-wrapper">--}}
                    {{--                            <div class="single-products">--}}
                    {{--                                <div class="productinfo text-center">--}}
                    {{--                                    <img src="images/home/product3.jpg" alt="" />--}}
                    {{--                                    <h2>$56</h2>--}}
                    {{--                                    <p>Easy Polo Black Edition</p>--}}
                    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="product-overlay">--}}
                    {{--                                    <div class="overlay-content">--}}
                    {{--                                        <h2>$56</h2>--}}
                    {{--                                        <p>Easy Polo Black Edition</p>--}}
                    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="choose">--}}
                    {{--                                <ul class="nav nav-pills nav-justified">--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-sm-4">--}}
                    {{--                        <div class="product-image-wrapper">--}}
                    {{--                            <div class="single-products">--}}
                    {{--                                <div class="productinfo text-center">--}}
                    {{--                                    <img src="images/home/product4.jpg" alt="" />--}}
                    {{--                                    <h2>$56</h2>--}}
                    {{--                                    <p>Easy Polo Black Edition</p>--}}
                    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="product-overlay">--}}
                    {{--                                    <div class="overlay-content">--}}
                    {{--                                        <h2>$56</h2>--}}
                    {{--                                        <p>Easy Polo Black Edition</p>--}}
                    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <img src="images/home/new.png" class="new" alt="" />--}}
                    {{--                            </div>--}}
                    {{--                            <div class="choose">--}}
                    {{--                                <ul class="nav nav-pills nav-justified">--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-sm-4">--}}
                    {{--                        <div class="product-image-wrapper">--}}
                    {{--                            <div class="single-products">--}}
                    {{--                                <div class="productinfo text-center">--}}
                    {{--                                    <img src="images/home/product5.jpg" alt="" />--}}
                    {{--                                    <h2>$56</h2>--}}
                    {{--                                    <p>Easy Polo Black Edition</p>--}}
                    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="product-overlay">--}}
                    {{--                                    <div class="overlay-content">--}}
                    {{--                                        <h2>$56</h2>--}}
                    {{--                                        <p>Easy Polo Black Edition</p>--}}
                    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <img src="images/home/sale.png" class="new" alt="" />--}}
                    {{--                            </div>--}}
                    {{--                            <div class="choose">--}}
                    {{--                                <ul class="nav nav-pills nav-justified">--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-sm-4">--}}
                    {{--                        <div class="product-image-wrapper">--}}
                    {{--                            <div class="single-products">--}}
                    {{--                                <div class="productinfo text-center">--}}
                    {{--                                    <img src="images/home/product6.jpg" alt="" />--}}
                    {{--                                    <h2>$56</h2>--}}
                    {{--                                    <p>Easy Polo Black Edition</p>--}}
                    {{--                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="product-overlay">--}}
                    {{--                                    <div class="overlay-content">--}}
                    {{--                                        <h2>$56</h2>--}}
                    {{--                                        <p>Easy Polo Black Edition</p>--}}
                    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="choose">--}}
                    {{--                                <ul class="nav nav-pills nav-justified">--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
                    {{--                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                </div><!--features_items-->--}}


                    {{--                بعدا اضافه شه قبل محصولات پیشنهادی--}}
                    {{--                <div class="category-tab"><!--category-tab-->--}}
                    {{--                    <div class="col-sm-12">--}}
                    {{--                        <ul class="nav nav-tabs">--}}
                    {{--                            <li class="active"><a href="#tshirt" data-toggle="tab">تی شرت</a></li>--}}
                    {{--                            <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>--}}
                    {{--                            <li><a href="#blazers" data-toggle="tab">پیراهن</a></li>--}}
                    {{--                            <li><a href="#blazers" data-toggle="tab">Blazers</a></li>--}}
                    {{--                            <li><a href="#sunglass" data-toggle="tab">شلوار</a></li>--}}
                    {{--                            <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>--}}
                    {{--                            <li><a href="#kids" data-toggle="tab">کفش</a></li>--}}
                    {{--                            <li><a href="#kids" data-toggle="tab">Kids</a></li>--}}
                    {{--                            <li><a href="#kids" data-toggle="tab">ساعت</a></li>--}}
                    {{--                            <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="tab-content">--}}
                    {{--                        <div class="tab-pane fade active in" id="tshirt" >--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery1.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery2.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery3.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery4.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                    {{--                        <div class="tab-pane fade" id="blazers" >--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery4.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery3.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery2.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery1.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                    {{--                        <div class="tab-pane fade" id="sunglass" >--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery3.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery4.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery1.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery2.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                    {{--                        <div class="tab-pane fade" id="kids" >--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery1.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery2.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery3.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery4.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                    {{--                        <div class="tab-pane fade" id="poloshirt" >--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery2.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery4.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery3.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-3">--}}
                    {{--                                <div class="product-image-wrapper">--}}
                    {{--                                    <div class="single-products">--}}
                    {{--                                        <div class="productinfo text-center">--}}
                    {{--                                            <img src="images/home/gallery1.jpg" alt="" />--}}
                    {{--                                            <h2>$56</h2>--}}
                    {{--                                            <p>Easy Polo Black Edition</p>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div><!--/category-tab-->--}}

                    <div class="recommended_items"><!--recommended_items-->
                        {{--                    <h2 class="title text-center">recommended items</h2>--}}
                        <h2 class="title text-center">محصولات پیشنهادی</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($products as  $item)
                                    @if($loop->first )
                                        <div class="item active">
                                            @else
                                                <div class="item ">
                                                    @endif
                                                    @foreach($products  as $val)
                                                        @if ($loop->iteration == 4)
                                                            @break
                                                        @endif
                                                        <div class="col-sm-4 " >
                                                            <div class="product-image-wrapper">
                                                                <div class="single-products">
                                                                    <div class="productinfo text-center">
                                                                        <img src="/{{$val->image}}" alt="" />
                                                                        {{--                                                <img src="{{Storage::disk('local')->url('product_images/' .$product->image)}}">--}}
                                                                        <h2>{{$val->price}}</h2>
                                                                        <p>{!! $val->description !!}</p>
                                                                        {{--                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                                @endforeach
                                        </div>
                                        @if($products->count() > 1)
                                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        @endif
                            </div>
                        </div><!--/recommended_items-->


                    </div>
                </div>
            </div>
    </section>
@endsection













