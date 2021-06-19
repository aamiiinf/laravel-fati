@extends('admin.admin-master')
@section('orders') active @endsection
@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">پنل ادمین</a>
            <span class="breadcrumb-item active">نمایش سفارشات</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title" style="text-align: right">اطلاعات گیرنده</h6>
                    <div class="form-layout">
                        <div class="row mg-b-25">

                            <div class="col-lg-4">
                                <div class="form-group" style="text-align: right">
                                    <label class="form-control-label"> <span class="tx-danger">*</span>:آدرس ایمیل</label>
                                    <input class="form-control" type="text" name="email" \ placeholder="Enter email address" value="{{ $shipping->shipping_email }}" readonly >
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4" style="text-align: right">
                                <div class="form-group">
                                    <label class="form-control-label"> <span class="tx-danger">*</span>:نام خانوادگی</label>
                                    <input class="form-control" type="text" name="lastname"  placeholder="Enter lastname" value="{{ $shipping->shipping_last_name }}" readonly style="text-align: right">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4" style="text-align: right" >
                                <div class="form-group">
                                    <label class="form-control-label"> <span class="tx-danger">*</span>:نام</label>
                                    <input class="form-control" type="text" name="firstname" value="{{ $shipping->shipping_first_name }}" readonly placeholder="Enter firstname" style="text-align: right">
                                </div>
                            </div><!-- col-4 -->


                            <div class="col-lg-4">
                                <div class="form-group" style="text-align: right">
                                    <label class="form-control-label"> <span class="tx-danger">*</span>:شماره تلفن</label>
                                    <input class="form-control" type="text" name="email"  placeholder="Enter email address" value="{{ $shipping->shipping_phone }}" readonly>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group" style="text-align: right">
                                    <label class="form-control-label"> <span class="tx-danger">*</span> :آدرس</label>
                                    <input class="form-control" type="text" name="email"  placeholder="Enter email address" value="{{ $shipping->address }}" readonly style="text-align: right">
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group" style="text-align: right">
                                    <label class="form-control-label"><span class="tx-danger">*</span>:شهر و استان:</label>
                                    <input class="form-control" type="text" name="email"  placeholder="Enter email address" value="{{ $shipping->state }}" readonly style="text-align: right">
                                </div>
                            </div><!-- col-4 -->
                            <br><br><br><br>
                            <hr>
                            <div class="col-lg-4" style="margin-left: 845px;">
                                <div class="form-group" style="text-align: right">
                                    <label class="form-control-label"> <span class="tx-danger">*</span> :کد پستی</label>
                                    <input class="form-control" type="text" name="email" placeholder="Enter email address" value="{{ $shipping->post_code }}" readonly>
                                </div>
                            </div><!-- col-4 -->



                        </div><!-- row -->

                    </div><!-- form-layout -->

                </div><!-- card -->



                <div class="card pd-20 pd-sm-40"  style="margin-top: 20px;margin-left: 500px;">
                    <h6 class="card-body-title" style="text-align: right">اطلاعات سفارش </h6>
                    <div class="form-layout">
                        <div class="row mg-b-25" >
                            <div class="col-lg-6">
                                <div class="form-group" style="text-align: right">
                                    <label class="form-control-label"> <span class="tx-danger">*</span>:شماره فاکتور</label>
                                    <input class="form-control" type="text" name="firstname" value="{{ $order->invoice_no }}" readonly >
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6" style="text-align: right">
                                <div class="form-group">
                                    <label class="form-control-label"> <span class="tx-danger">*</span>:درگاه پرداخت</label>
                                    <input class="form-control" type="text" name="lastname"  placeholder="Enter lastname" value="{{ $order->payment_type }}" readonly>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6" style="text-align: right">
                                <div class="form-group">
                                    <label class="form-control-label"> <span class="tx-danger">*</span> : قیمت نهایی</label>
                                    <input class="form-control" type="text" name="email" \ placeholder="Enter email address" value="{{ $order->total }}" readonly>
                                </div>
                            </div><!-- col-4 -->





                            <div class="col-lg-6" style="text-align: right">
                                <div class="form-group" >
                                    <label class="form-control-label"> <span class="tx-danger">*</span>:    جمع کل سفارشات</label>
                                    <input class="form-control" type="text" name="email"  placeholder="Enter email address" value="{{ $order->subtotal }}" readonly>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-12" >
                                <div class="form-group"style="text-align: right" >
                                    <label class="form-control-label"><span class="tx-danger">*</span>:میزان تخفیف</label>
                                    @if ($order->coupon_discount == NULL)
                                        <span class="badge badge-pill badge-danger">NO</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">{{ $order->coupon_discount }}%</span>
                                    @endif

                                </div>
                            </div><!-- col-4 -->

                        </div><!-- row -->

                    </div><!-- form-layout -->

                </div><!-- card -->

                <div class="card pd-20 pd-sm-40" style="margin-top: 20px;margin-left: 1050px;">
                    <h6 class="card-body-title" style="text-align: right">محصولات سفارش داده شده</h6>
                    <div class="form-layout">

                        <div class="table-wrapper">
                            <table id="" class="table display responsive nowrap ">
                                <thead>
                                <tr>
                                    <th class="wd-15p" style="text-align: center">تعداد</th>
                                    <th class="wd-15p" style="text-align: center">نام محصول</th>

                                    <th class="wd-15p" style="text-align: center">عکس</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($orderItems as $row)
                                    <tr>
                                        <td style="text-align: center">
                                            {{ $row->product_qty }}
                                        </td>
                                        <td style="text-align: center">
                                            {{ $row->product->product_name }}
                                        </td>


                                        <td style="text-align: center">
                                            <img src="{{ asset($row->product->image_one) }}" height="50px;" width="50px;" alt="img">
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div><!-- table-wrapper -->




                    </div><!-- form-layout -->

                </div><!-- card -->


            </div>

        </div>
@endsection
