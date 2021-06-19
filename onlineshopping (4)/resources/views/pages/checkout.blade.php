

@section('center')
@extends('layouts.index')


<body>
<header id="header"><!--header-->


    <div class="header-middle"><!--header-middle-->
        <div class="container">

        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->

    </div><!--/header-bottom-->
</header><!--/header-->

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div><!--/breadcrums-->






        <div class="shopper-informations">

            <div class="row">



                <section id="do_action1">
                    <div class="col-sm-6">
                        <div class="shopper-info">
{

                            <form action="{{ route('place-order') }}" method="post">
                                @csrf
                        <div class="total_area">
                            <h4 dir="rtl">سفارشات شما</h4>
                            <p> محصولات  <span>   قیمت</span></p>
                            <ul>

                                @foreach($carts as $cart)
                                    <li>{{ $cart->product->product_name }} ( {{ $cart->qty }} ) <span> تومان{{ $cart->price * $cart->qty }}</span></li>
                                @endforeach


                            </ul>





                            @if(Session::has('coupon'))
                                <ul>

                                <li> Total <span>تومان{{  $subtotal - session()->get('coupon')['discount_amount'] }}</span></li>

                                <input type="hidden" name="coupon_discount" value="{{ session()->get('coupon')['coupon_discount'] }}">

                                <input type="hidden" name="subtotal" value="{{  $subtotal  }}">

                                <input type="hidden" name="total" value="{{  $subtotal - session()->get('coupon')['discount_amount'] }}">
                                </ul>

                            @else
                                <ul>
                                    <li>Subtotal <span>تومان{{$subtotal}}</span></li>

                                    <input type="hidden" name="subtotal" value="{{  $subtotal  }}">

                                    <input type="hidden" name="total" value="{{  $subtotal  }}">
                                    @endif

                                </ul>


                        </div>
                    </div>
                </section>

                <div class="col-sm-6 ">
                    <div class="shopper-info">
                        <p>اطلاعات گیرنده</p>

                        <form action="{{ route('place-order') }}" method="post">
                            @csrf



                            <label style="float: right;margin-right: 10px;">نام  </label>

                            <input type="text" placeholder="نام شما" name="shipping_first_name" value="{{ Auth::user()->name }}">

                            {{--                            <input type="text" placeholder="Middle Name">--}}
                            <label style="float: right;margin-right: 10px;">نام خانوادگی</label>
                            <input type="text" placeholder="نام خانوادگی شما" name="shipping_last_name" >
                            <label style="float: right;margin-right: 10px;">شماره تلفن</label>
                            <input type="text" name="shipping_phone" placeholder="شماره تلفن شما" >
                            <label style="float: right;margin-right: 10px;">ایمیل</label>
                            <input type="text" placeholder="Email*" name="shipping_email" value="{{ Auth::user()->email }}">
                            <label style="float: right;margin-right: 10px;">آدرس</label>
                            <textarea type="text" placeholder="آدرس شما" name="address" style="text-align: right"></textarea>
                            <br><br>
                            {{--                            <input type="text" placeholder="Address 2">--}}
                            {{--                            <input type="text" placeholder="Zip / Postal Code *" name="post_code">--}}
                            <label style="float: right;margin-right: 10px;">شهر و استان </label>

                            <input type="text" name="state" placeholder="شهر و استان شما" >

                            <label style="float: right;margin-right: 10px;">کد پستی</label>
                            <input type="text" placeholder="کد پستی شما" name="post_code">
                            <br><br>

                            <div class="payment-options">

                                <h5 dir="rtl"> درگاه پرداخت خود را انتخاب کنید</h5>
                                <span dir="rtl">


						<label><input type="checkbox" id="payment" value="melate" name="payment_type"> ملت</label>
					</span>
                                <span dir="rtl">
						<label><input type="checkbox" id="payment2" value="tejarat" name="payment_type"> تجارت</label>
					</span>
                            </div>
                            <button class="btn btn-default check1" type="submit" >ثبت سفارش</button>
                           </form>
                    </div>
                </div>
                </div>







{{--                            <div class="total_area">--}}


                        </form>


            </div>
            <div class="col-sm-8">

        </div>
    </div>





                            <br><br>

{{--                            <button class="btn btn-default check" type="submit" name="submit">Place order</button>--}}
                        </div>


                </div>


    </div>
</section> <!--/#cart_items-->
{{--//بعدا اضافه شود--}}
<section id="do_action">
    <div class="container">

        <div class="row">

        </div>
    </div>
</section><!--/#do_action-->









@endsection
