
@extends('layouts.index')


@section('center')


    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>

            @if(session('cart_delete'))
                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong >{{session('cart_delete')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if(session('cart_update'))
                <div class="alert alert-success alert-dismissable fade show" role="alert">
                    <strong >{{session('cart_update')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif



            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>



                    <tr class="cart_menu">
                        <td></td>
                        <td class="total" style="text-align: center">مجموع</td>
                        <td class="quantity" style="text-align: center">تعداد</td>
                        <td class="price" style="text-align: right">قیمت</td>
                        <td class="description" style="text-align: right"></td>
                        <td class="image" >کالا ها</td>





                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carts as $cart)

                        <tr>


                            <td class="cart_delete" style="text-align: center">

                                <a class="cart_quantity_delete" href="{{ route('delete-cart' ,$cart->id) }}"><i class="fa fa-times"></i></a>
                            </td>

                            <td class="cart_total" style="text-align: center">

                                <p class="cart_total_price" >تومان{{$cart-> price * $cart->qty}}</p>

                            </td>


                            <td class="cart_quantity" >
                                <div class="quantity" >

                                    <form action="{{ route('quantity-cart',$cart->id) }}" method="POST">
                                        @csrf
                                        <div class="cart_quantity_button">

                                            <input class="cart_quantity_input" type="text" name="qty" value="{{ $cart->qty }}" autocomplete="off" size="2" min="1">

                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success">بروزرسانی</button>
                                    </form>
                                </div>
                            </td>


                            <td class="cart_price" style="text-align: right">

                                تومان {{ $cart->price }}
                                <p></p>
                            </td>

                            <td class="cart_description" style="text-align: right">

                                <h5>{{ $cart->product->product_name }}</h5>

                            </td>

                            <td class="cart_product">

                                <img src="{{ $cart->product->image_one }}" style="width: 70px; height: 70px" alt="">


                            </td>


                        </tr>



                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    {{--//بعدا اضافه شود--}}
    <section id="do_action">
        <div class="container">
            <div class="heading">
                {{--            <h3>What would you like to do next?</h3>--}}
                <h3>دوست دارید بعد از آن چکاری انجام دهید؟</h3>
                {{--            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>--}}
                <p>اگر کد تخفیف یا امتیاز پاداش دارید که می خواهید استفاده کنید یا می خواهید هزینه تحویل خود را تخمین بزنید ، انتخاب کنید.</p>
            </div>
            <div class="row">












                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>

                            {{--                   @if(session()->get('coupon')['coupon_name'])--}}
                            @if(Session::has('coupon'))
                            @else
                                <div class="shoping__continue">
                                    <div class="shoping__discount">
                                        <h4>کد تخفیف</h4>

{{--                                        <form action="{{ url('coupon/apply') }}" method="POST">--}}
                                        <form action="{{ route('applyCoupon-cart') }}" method="POST">
                                            @csrf
                                            <input type="text" name="coupon_name" placeholder="کد تخفیف را وارد کنید">
                                            <button type="submit" class="site-btn1">اعمال کد تخفیف</button>
                                            {{--                                <a class="btn btn-default check_out" href="ordernow">order now</a>--}}
                                        </form>
                                    </div>
                                </div>

                            @endif
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 ">
                    <div class="total_area">
                        <ul>

                            <li>تعداد<span></span></li>



                            <li>هزینه ارسال <span>رایگان</span></li>
                            {{--                        <li>Total <span>$61</span></li>--}}
                            <li>   جمع کل<span>    تومان{{ $subtotal }}              </span></li>
                           @if(Session::has('coupon'))
                               <li>Subtotal <span>{{ $subtotal }}</span></li>
                                <li>    جمع کل سفارشات<span>    تومان{{ $subtotal }}              </span></li>
                                <li>Coupon <span>{{ session()->get('coupon')['coupon_name'] }} <a href="{{ url('coupon/destroy') }}">×</a> </span></li>

                                <li>کد تخفیف <span>{{ session()->get('coupon')['coupon_name'] }} <a href="{{ route('couponDelete-cart') }}">×</a> </span></li>

                                <li>Discount <span>{{session()->get('coupon')['coupon_discount']}}% ({{   session()->get('coupon')['discount_amount'] }}</span></li>
                                <li>میزان تخفیف <span>{{session()->get('coupon')['coupon_discount']}}% ( تومان{{   session()->get('coupon')['discount_amount'] }}) </span></li>
                                <li>Total <span>{{ $subtotal - session()->get('coupon')['discount_amount'] }}</span></li>
                                <li>مبلغ پرداختی <span>تومان{{ $subtotal - session()->get('coupon')['discount_amount'] }}</span></li>

                            @else
                               <li>Total <span>{{$subtotal}}</span></li>
                                <li>    قیمت نهایی <span>تومان{{$subtotal}}</span></li>
                            @endif

                        </ul>

                        <a class="btn btn-default update" href=" {{ url('/') }} ">ادامه خرید</a>

                        <a class="btn btn-default check_out" href="{{ route('checkout') }}">ثبت و مرحله بعد</a>


                    </div>
                </div>

            </div>
        </div>
    </section><!--/#do_action-->

@endsection







