
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
                        <td class="price" style="text-align: right"></td>
                        <td class="price" style="text-align: right">افزودن به سبد خرید</td>
                        <td class="price" style="text-align: right">قیمت</td>

                        <td class="price" style="text-align: right"></td>
                        <td class="image">کالا ها</td>





                    </tr>
                    </thead>
                    <tbody>
                    @foreach($wishlists as $row)

                        <tr>

                            <td class="cart_delete" style="text-align: center">

                                <a class="cart_quantity_delete" href="{{ route('delete-wishlist' ,$row->id) }}"><i class="fa fa-times"></i></a>
                            </td>


                                <a href="{{url('proudct/details/'.$row->product->id)}}" class="btn btn-default add-to-cart"> <i class="fa fa-shopping-cart"></i>خرید</a>
{{--                                <a href="detail/{{$row['id']}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>خرید</a>--}}
                            </td>

                            <td class="cart_price" style="text-align: right">

                                تومان {{ $row->product->price }}
                                <p></p>
                            </td>

                            <td class="cart_price" style="text-align: right">

                                <h5>{{ $row->product->product_name }}</h5>

                            </td>

                            <td class="cart_product">

                                <img src="{{ $row->product->image_one }}" style="width: 70px; height: 70px" alt="">


                            </td>


                        </tr>



                    @endforeach


                    </tbody>
                </table>

            </div>
{{--            {{$wishlists->links() }}--}}
        </div>
    </section> <!--/#cart_items-->



@endsection








