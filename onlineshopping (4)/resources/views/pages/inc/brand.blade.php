
<h2>همه برند ها</h2>
@php

    $brands = App\Models\Brand::where('status',1)->latest()->get();

@endphp
<div class="panel-group category-products" id="accordian"><!--category-productsr-->
    @foreach($brands as $row)



        <div class="panel panel-default">
            <div class="panel-heading">
{{--                <h4 class="panel-title"><a href="{{ url('brand/product-show/' .$row->id) }}">{{ $row->brand_name }}</a></h4>--}}
                <h4 class="panel-title"><a href="{{ route('brand-show' ,$row->id) }}">{{ $row->brand_name }}</a></h4>
            </div>
        </div>
    @endforeach


</div><!--/category-products-->

