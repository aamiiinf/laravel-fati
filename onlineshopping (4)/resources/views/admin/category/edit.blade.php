@extends('admin.admin-master')

@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">پنل ادمین</a>
            <span class="breadcrumb-item active">دسته بندی ها</span>
            <span class="breadcrumb-item active" s>ویرایش</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-8 m-auto">
                    <div class="card">
                        <div class="card-header" style="text-align: right" >بروز رسانی دسته بندی
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

                            <form action="{{ route('update.category') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $category->id }}" name="id">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="float: right">نام دسته بندی</label>
                                    <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $category->category_name }}" style="text-align: right">

                                    @error('category_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-primary" style="float: right">بروز رسانی دسته بندی ها</button>
                            </form>




                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
