

@extends('layouts.index')

@section('center')
<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <div class="search_box pull-right">
                    <form action="search" method="get">
                    <input type="text" name="searchText" placeholder="Search"/>
                    </form>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="search_box pull-right">
                    <form action="{{route('search')}}" method="get">
                        <input type="search" name="keyword" placeholder="Search..."/>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!--/header-bottom-->
</header><!--/header-->

<div class="container">
    @include('alert')
    @if(session('cart'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('cart')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>

@if ($products->isNotEmpty())
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
{{--                        @foreach ($products as $key=>$item)--}}
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
                                <img src="{{ $item->image_one }}" class="girl img-responsive" alt="{{ $item->product_name }}" />
                            </div>
                            <div class="col-sm-6">
                                <h1>{{ $item->product_name }}</h1>
                                <h2>{{ $item->category->category_name }}</h2>
{{--                                <h2>{{ $item->brand->brand_name }}</h2>--}}
{{--                                <h2>{{ $item->brand->name }}</h2>--}}

                                <p style="text-align: right"> {!! $item->short_description !!}</p>
{{--                                <a href="detail/{{$item['id']}}">--}}
{{--                                <a href="{{url('proudct/details/'.$item->id)}}" class="btn btn-default get">خرید</a>--}}
                                <a href="{{route('detail-product',$item->id)}}" class="btn btn-default get">خرید</a>
{{--                                <a href="detail/{{$item['id']}}" class="btn btn-default get">خرید</a>--}}
{{--                                    <button type="button" class="btn btn-default get">خرید</button>--}}
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

{{--                                        <img src="{{Storage::disk('local')->url('product_images/' .$product->image)}}">--}}
{{--                                        --}}{{--                                        <img src="images/home/product1.jpg" alt="" />--}}
                                        <img src="{{ $product->image_one }}" alt="{{ $item->product_name }}" />

                                        <h2>{{$product-> price}}</h2>

                                        <p>{!! $product->product_name !!}</p>
{{--                                        <p>{{$product-> description}}</p>--}}
                                        {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{$product-> price}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            {{--                                            <a href="{{route('AddToCartProduct',['id'=>$product -> id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                            <a href="{{url('proudct/details/'.$product->id)}}" class="btn btn-default add-to-cart"> <i class="fa fa-shopping-cart"></i>خرید</a>
                                            <a href="detail/{{$product['id']}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>خرید</a>
                                            {{--                                            <a href="{{route('AddToCartProduct',['id'=>$product -> id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</a>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
{{--                                        <li><a href="{{ url('add/to-wishlist/'.$product->id) }}"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
                                        <li><a href="{{ route('add-wishlist',$product->id) }}"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>




                    @endforeach
                </div>


                {{$products->links()}}
                <br>


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
                                                                    <img src="/{{$val->image_one}}" alt="" />
                                                                    {{--                                                <img src="{{Storage::disk('local')->url('product_images/' .$product->image)}}">--}}
                                                                    <h2>{{$val->price}}</h2>
{{--                                                                    <p>{!! $val->description !!}</p>--}}
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
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        {{--                    @include('partial.category-products')--}}
                        {{--                    @include('partial.brand-products')--}}
                        @include('pages.inc.category')
                        @include('pages.inc.brand')



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
            </div>
        </div>
</section>
@endsection
