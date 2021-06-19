@extends('admin.admin-master')
@section('products') active show-sub @endsection
@section('manage-products') active @endsection
@section('admin_content')

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">admin</a>
            <span class="breadcrumb-item active">manage product</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-12">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

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
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">لیست محصولات</h6>
                        <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                                <thead>
                                <tr>
                                    <th class="wd-25p">عملیات ها</th>



                                    <th class="wd-20p" style="text-align: center">وضعیت</th>
                                    <th class="wd-15p" style="text-align: center">دسته بندی</th>
                                    <th class="wd-15p" style="text-align: center">تعداد محصول</th>
                                    <th class="wd-15p" style="text-align: center">نام محصول</th>
                                    <th class="wd-15p" style="text-align: center">عکس</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($products as $row)
                                    <tr>
                                        <td style="text-align: center">

                                            <a href="{{ route('edit-products',$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>

                                            <a href="{{ route('delete-products',$row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Shure To Delete')"><i class="fa fa-trash"></i></a>
                                            @if($row->status == 1)

                                                <a href="{{ route('inactive-products',$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                                            @else

                                                <a href="{{ route('active-products',$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
                                            @endif
                                        </td>




                                        <td style="text-align: center">
                                            @if($row->status == 1)
                                                <span class="badge badge-success">فعال</span>
                                            @else
                                                <span class="badge badge-danger">غیرفعال</span>
                                            @endif
                                        </td>
                                        <td style="text-align: center">{{ $row->category->category_name }}</td>
                                        <td style="text-align: center">{{ $row->product_quantity }}</td>
                                        <td style="text-align: center">{{ $row->product_name }}</td>
                                        <td style="text-align: center">
                                            <img src="{{ asset($row->image_one) }}" width="50px;" height="50px;" alt="">
                                        </td>

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
