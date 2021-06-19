@extends('admin.admin-master')
@section('coupon') active @endsection
@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">ادمین</a>
            <span class="breadcrumb-item active">کد تخفیف</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title" style="text-align: right">لیست کد های تخفیف</h6>


                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('status')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
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




                                    <th class="wd-25p" style="text-align: center">عملیات ها</th>
                                    <th class="wd-20p" style="text-align: center">وضعیت</th>
                                    <th class="wd-15p" style="text-align: center">درصد تخفیف</th>
                                    <th class="wd-15p" style="text-align: center">نام کد تخفیف</th>
                                    <th class="wd-15p" style="text-align: center">شناسه</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($coupons as $row)
                                    <tr>




                                        <td style="text-align: center">

                                            <a href="{{ route('edit.coupon',$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>

                                            <a href="{{ route('delete.coupon',$row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('are you shure to delete')"><i class="fa fa-trash"></i></a>
                                            @if($row->status == 1)

                                                <a href="{{ route('inactive.coupon',$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                                            @else

                                                <a href="{{ route('active.coupon',$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
                                            @endif
                                        </td>
                                        <td style="text-align: center">
                                            @if($row->status == 1)
                                                <span class="badge badge-success">فعال</span>
                                            @else
                                                <span class="badge badge-danger">غیر فعال</span>
                                            @endif
                                        </td>
                                        <td style="text-align: center">{{ $row->discount }}%</td>
                                        <td style="text-align: center">{{ $row->coupon_name }}</td>
                                        <td style="text-align: center">{{ $i++ }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- table-wrapper -->
                    </div><!-- card -->
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header" style="text-align: right">افزودن کد تخفیف
                        </div>

                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{session('success')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <form action="{{ route('store.coupon') }}" method="POST">
                                @csrf
                                <div class="form-group" style="text-align: right">
                                    <label for="exampleInputEmail1">نام کد تخفیف</label>
                                    <input type="text" name="coupon_name" class="form-control @error('coupon_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="کد تخفیف " style="text-align: right">

                                    @error('coupon_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>

                                <div class="form-group" style="text-align: right">
                                    <label for="exampleInputEmail1">درصد تخفیف</label>
                                    <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="%درصد تخفیف" style="text-align: right">

                                    @error('discount')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-primary" style="float: right">افزودن کد تخفیف</button>
                            </form>




                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
