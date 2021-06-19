@extends('admin.admin-master')
@section('brand') active @endsection
@section('admin_content')

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">پنل ادمین</a>
            <span class="breadcrumb-item active">برند ها</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title" style="text-align: right">لیست برند ها</h6>
                        @if(session('Catupdated'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('Catupdated')}}</strong>
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

                                    <th class="wd-25p" style="text-align: center" >عملیات ها</th>
                                    <th class="wd-20p" style="text-align: center; ">وضعیت</th>
                                    <th class="wd-15p" style="text-align: center">نام دسته بندی</th>
                                    <th class="wd-15p" style="text-align: center">شناسه</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($brands as $row)
                                    <tr style="text-align: center">
                                        <td>

                                            <a href="{{ route('edit.brand',$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>

                                            <a href="{{ route('delete.brand',$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            @if($row->status == 1)

                                                <a href="{{ route('inactive.brand',$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                                            @else

                                                <a href="{{ route('active.brand',$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
                                            @endif
                                        </td>


                                        <td style="text-align: center">
                                            @if($row->status == 1)
                                                <span class="badge badge-success">فعال</span>
                                            @else
                                                <span class="badge badge-danger">غیرفعال</span>
                                            @endif
                                        </td>
                                        <td style="text-align: center">{{ $row->brand_name }}</td>
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
                        <div class="card-header" style="text-align: right;">افزودن برند
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

                            <form action="{{ route('store.brand') }}" method="POST">
                                @csrf
                                <div class="form-group" style="text-align: right;">
                                    <label for="exampleInputEmail1">نام برند</label>
                                    <input type="text" name="brand_name" class="form-control @error('brand_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="نام برند " style="text-align: right;">

                                    @error('brand_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-primary" style="float: right;">افزودن برند</button>
                            </form>




                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
