@extends('admin.admin-master')
@section('category') active @endsection
@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">پنل ادمین</a>
            <span class="breadcrumb-item active">دسته بندی ها</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Basic Responsive DataTable</h6>

{{--                        @if(isset($message))--}}
{{--                            @php--}}
{{--                                var_dump($message);--}}
{{--                            die();--}}
{{--                            @endphp--}}
{{--                            <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                                <strong>{{$message}}</strong>--}}
{{--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        @endif--}}
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
                                @foreach ($categories as $category)
                                    <tr>

                                        <td style="text-align: center">

                                            <a href="{{ route('edit.category',$category->id) }}" class="btn btn-sm btn-success">ویرایش</a>

                                            <a href="{{ route('delete.category',$category->id) }}" class="btn btn-sm btn-danger">حذف</a>
                                            @if($category->status == 1)

                                                <a href="{{ route('inactive.category',$category->id) }}" class="btn btn-sm btn-danger">غیرفعال</a>

                                            @else

                                                <a href="{{ route('active.category',$category->id) }}" class="btn btn-sm btn-success">فعال</a>
                                            @endif
                                        </td>

                                        <td style="text-align: center">
                                            @if($category->status == 1)
                                                <span class="badge badge-success" >فعال</span>
                                            @else
                                                <span class="badge badge-danger">غیر فعال</span>
                                            @endif
                                        </td>
                                        <td style="text-align: center">{{ $category->category_name }}</td>
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
                        <div class="card-header" style="text-align: right;">افزودن دسته بندی
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

                            <form action="{{ route('store.category') }}" method="POST">
                                @csrf
                                <div class="form-group" style="text-align: right;">
                                    <label for="exampleInputEmail1" >افزودن دسته بندی</label>
                                    <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="نام دسته بندی" style="text-align: right;">

                                    @error('category_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-primary" style="float: right;">افزودن</button>
                            </form>




                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
