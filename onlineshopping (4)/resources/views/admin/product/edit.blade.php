@extends('admin.admin-master')
@section('products') active show-sub @endsection
@section('manage-products') active @endsection
@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">ادمین</a>
            <span class="breadcrumb-item active">بروزرسانی محصولات</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">

                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title" style="text-align: right">بروزرسانی محصولات</h6>
                    <form action="{{ route('update-products') }}" method="POST" >
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <div class="form-layout">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{session('success')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="row mg-b-25">
                                <div class="col-lg-4">
                                    <div class="form-group" style="text-align: right">
                                        <label class="form-control-label"> <span class="tx-danger">*</span>:نام محصول</label>
                                        <input class="form-control" type="text" name="product_name" value="{{ $product->product_name }}" placeholder="product name" style="text-align: right">
                                        @error('product_name')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group" style="text-align: right">
                                        <label class="form-control-label"> <span class="tx-danger">*</span>:کد محصول</label>
                                        <input class="form-control" type="text" name="product_code" value="{{ $product->product_code }}" placeholder="product code">
                                        @error('product_code')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group" style="text-align: right">
                                        <label class="form-control-label"> <span class="tx-danger">*</span>:قیمت</label>
                                        <input class="form-control" type="text" name="price" value="{{ $product->price }}" placeholder="product price">
                                        @error('price')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->

                                <div class="col-lg-4">
                                    <div class="form-group" style="text-align: right">
                                        <label class="form-control-label"> <span class="tx-danger">*</span>:تعداد</label>
                                        <input class="form-control" type="number" name="product_quantity" value="{{ $product->product_quantity }}" placeholder="product quantity">
                                        @error('product_quantity')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->

                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force" style="text-align: right">
                                        <label class="form-control-label"> <span class="tx-danger">*</span> :دسته بندی</label>
                                        <select class="form-control select2" name="category_id" data-placeholder="Choose country">
                                            <option label="Choose category"></option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? "selected":"" }}>{{ $category->category_name }}</option>
                                            @endforeach

                                        </select>
                                        @error('category_id')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->

                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force" style="text-align: right">
                                        <label class="form-control-label"> <span class="tx-danger">*</span>:برند</label>
                                        <select class="form-control select2" name="brand_id" data-placeholder="Choose country">
                                            <option label="Choose brand"></option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? "selected":"" }}>{{ $brand->brand_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-12">
                                    <div class="form-group" style="text-align: right">
                                        <label class="form-control-label"> <span class="tx-danger">*</span>:توضیح کوتاه محصول</label>

                                        <textarea name="short_description" id="summernote">{!! $product->short_description !!}  </textarea>
                                        @error('short_description')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->


                                <div class="col-lg-12">
                                    <div class="form-group" style="text-align: right">
                                        <label class="form-control-label"> <span class="tx-danger">*</span>:توضیح کامل محصول</label>
                                        <textarea name="long_description" id="summernote2">{!! $product->long_description !!} </textarea>
                                        @error('long_description')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->


                            </div><!-- row -->

                            <button class="btn btn-info mg-r-5" type="submit" style="float: right">بروزرسانی اطلاعات</button>

                    </form>

                    <form action="{{ route('update-image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="img_one" value="{{ $product->image_one }}">
                        <input type="hidden" name="img_two" value="{{ $product->image_two }}">
                        <input type="hidden" name="img_three" value="{{ $product->image_three }}">
                        <div class="row row-sm mt-5">

                            <div class="col-lg-4">
                                <div class="form-group">

                                    <img src="{{ asset($product->image_three) }}" alt="" height="120px;" width="120px;" style="margin-left: 80px;">
                                    <label class="form-control-label"> <span class="tx-danger">*</span>:عکس سوم</label>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">

                                    <img src="{{ asset($product->image_two) }}" alt="" height="120px;" width="120px;" style="margin-left: 80px;">
                                    <label class="form-control-label"> <span class="tx-danger">*</span>:عکس دوم</label>
                                </div>
                            </div><!-- col-4 -->



                            <div class="col-lg-4">
                                <div class="form-group">

                                    <img src="{{ asset($product->image_one) }}" alt="" height="120px;" width="120px;" style="margin-left: 80px;">
                                    <label class="form-control-label"> <span class="tx-danger">*</span>:عکس اصلی</label>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group" style="text-align: right">
                                    <label class="form-control-label"> <span class="tx-danger">*</span>: عکس سوم</label>
                                    <input class="form-control" type="file" name="image_three"  style="direction: rtl">
                                    @error('image_three')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div><!-- col-4 -->


                            <div class="col-lg-4">
                                <div class="form-group" style="text-align: right">
                                    <label class="form-control-label"><span class="tx-danger">*</span>:عکس دوم</label>
                                    <input class="form-control" type="file" name="image_two" style="direction: rtl">
                                    @error('image_two')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div><!-- col-4 -->



                            <div class="col-lg-4">
                                <div class="form-group" style="text-align: right">
                                    <label class="form-control-label"> <span class="tx-danger">*</span>:عکس اصلی</label>
                                    <input class="form-control" type="file" name="image_one" style="direction: rtl" >
                                    @error('image_one')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div><!-- col-4 -->

                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5" style="float: right">بروزرسانی تصویر</button>
                        </div><!-- form-layout-footer -->
                    </form>
                </div><!-- form-layout -->
            </div><!-- card -->
        </div>

    </div>
@endsection
