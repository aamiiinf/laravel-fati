@extends('layouts.index')

@section('center')

<section>
    <div class="container">
        <div class="row">

            <br>
            <div class="col-sm-9 padding-right">
                <br>
                <div class="product-details"><!--product-details-->

                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="{{asset('images/product-details/new.jpg')}}" class="newarrival" alt="" />
                            <h1 style="text-align: right;margin-right: 20px">{{ $product->product_name }}</h1>
                            <p>Web ID: 1089772</p>
                            <h2 style="text-align: right;margin-right: 20px"><span>تومان</span>{{ $product->price }}</h2>
                            <h5 style="text-align: center;">{!! $product->short_description  !!}  </h5>
                            <img src="images/product-details/rating.png" alt="" />
                            <span>


                                 <form  action="{{ route('add-cart' ,$product->id) }}" method="POST" >
                                    @csrf
                                    <input type="hidden" name="price" value="{{$product->price}}">
									<button type="submit" class="btn btn-fefault cart" style="margin-left: 250px">
										<i class="fa fa-shopping-cart"></i>
										افزودن به سبد خرید
									</button>
                                    </form>


								</span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b> E-SHOPPER</p>
                            <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                    <div class="col-sm-5">
                        <div class="view-product">
{{--                            <img src="images/product-details/1.jpg" alt="" />--}}
                            <a href=""><img src="{{ asset($product->image_one )}}"  alt=""></a>
{{--                            <h3>ZOOM</h3>--}}
                            <a href="{{ url('add/to-wishlist/'.$product->id) }}">

{{--                            <h3>افزودن به لیست علاقه مندی ها</h3>--}}
                                <button type="submit" class="btn btn-fefault cart1" >
                                    <i class="fa fa-heart"></i>
                                    افزودن به لیست علاقه مندی ها
                                </button>
                            </a>

                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">

                                    <a href=""><img src="{{ asset($product->image_one )}}" style="width: 90px ;height: 90px" alt=""></a>
                                    <a href=""><img src="{{ asset($product->image_two )}}" style="width: 90px ;height: 90px" alt=""></a>
                                    <a href=""><img src="{{ asset($product->image_three )}}" style="width: 90px ;height: 90px" alt=""></a>


                                </div>
                                <div class="item">

                                    <a href=""><img src="{{ asset($product->image_one )}}" style="width: 90px ;height: 90px" alt=""></a>
                                    <a href=""><img src="{{ asset($product->image_two )}}" style="width: 90px ;height: 90px" alt=""></a>
                                    <a href=""><img src="{{ asset($product->image_three )}}" style="width: 90px ;height: 90px" alt=""></a>

                                </div>
                                <div class="item">

                                    <a href=""><img src="{{ asset($product->image_one )}}" style="width: 90px ;height: 90px" alt=""></a>
                                    <a href=""><img src="{{ asset($product->image_two )}}" style="width: 90px ;height: 90px" alt=""></a>
                                    <a href=""><img src="{{ asset($product->image_three )}}" style="width: 90px ;height: 90px" alt=""></a>

                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li ><a href="#details" data-toggle="tab">Details</a></li>


                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="details" >

                                    <h5 >{!! $product->long_description !!}  </h5>


                                </div>
                            </div>










                    </div>
                </div><!--/category-tab-->
            <div class="col-sm-3">
                <br>
                <div class="left-sidebar">
                    <h2>دسته بندی ها</h2>
                    @php

                        $categories = App\Models\Category::where('status',1)->latest()->get();

                    @endphp
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($categories as $row)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">{{ $row->category_name }}</a></h4>
                                </div>
                            </div>
                        @endforeach



                    </div><!--/category-products-->

                    <h2> برند ها</h2>
                    @php

                        $brands = App\Models\Brand::where('status',1)->latest()->get();

                    @endphp
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($brands as $row)



                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">{{ $row->brand_name }}</a></h4>
                                </div>
                            </div>
                        @endforeach


                    </div><!--/category-products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="{{asset('images/home/shipping.jpg')}}" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>
        </div>

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">محصولات پیشنهادی</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($related_p as $product)
                            <div class="item active">



                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products1">
                                            <div class="productinfo text-center">

                                                <a href=""><img src="{{ asset($product->image_one )}}" style="width: 200px ;height: 200px" alt=""></a>
                                                <h2>{{$product->price}}</h2>
                                                <p>{{ $product->product_name }}</p>

                                                <a href="{{url('proudct/details/'.$product->id)}}" button type="button" class="btn btn-default get">خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            @endforeach

                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>
@endsection
