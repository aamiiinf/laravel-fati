{{--@extends('layouts.admin')--}}
@extends('admin.admin-master')

@section('orders') active @endsection

{{--@section('body')--}}
@section('admin_content')



    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">پنل ادمین</a>
            <span class="breadcrumb-item active">سفارشات</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-12">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">لیست سفارشات</h6>

                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('status')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if(session('delete'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{session('delete')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                                <thead>
                                <tr>






                                    <th class="wd-25p" style="text-align: center">فعالیت ها</th>
                                    <th class="wd-25p" style="text-align: center">وضعیت کد تخفیف</th>
                                    <th class="wd-20p" style="text-align: center"> جمع کل سفارشات</th>
                                    <th class="wd-20p" style="text-align: center">قیمت نهایی</th>
                                    <th class="wd-15p" style="text-align: center">درگاه پرداخت</th>
                                    <th class="wd-15p" style="text-align: center">شماره فاکتور</th>
                                    <th class="wd-15p" style="text-align: center">شناسه</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($orders as $row)
                                    <tr>







                                        <td style="text-align: center">

                                            <a href="{{ route('view.orders',$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>

                                            <a href="{{ route('delete.orders',$row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('are you shure to delete')"><i class="fa fa-trash"></i></a>

                                        </td>
                                        <td style="text-align: center">
                                            @if($row->coupon_discount == NULL)
                                                <span class="badge badge-danger">No</span>
                                            @else
                                                <span class="badge badge-success">Yes</span>
                                            @endif
                                        </td >
                                        <td style="text-align: center">{{ $row->subtotal }}$</td>
                                        <td style="text-align: center">{{ $row->total }}$</td>
                                        <td style="text-align: center">{{ $row->payment_type }}%</td>
                                        <td style="text-align: center">#{{ $row->invoice_no }}</td>
                                        <td style="text-align: center">{{ $i++ }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- table-wrapper -->
                    </div><!-- card -->
                </div>
            </div>

        </div>
@endsection
