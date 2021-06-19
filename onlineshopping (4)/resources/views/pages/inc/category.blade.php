
<h2>همه دسته بندی ها</h2>
@php

    $categories = App\Models\Category::where('status',1)->latest()->get();

@endphp
<div class="panel-group category-products" id="accordian"><!--category-productsr-->
    @foreach($categories as $row)



        <div class="panel panel-default">
            <div class="panel-heading">
{{--                <h4 class="panel-title"><a href="{{ url('category/product-show/' .$row->id) }}">{{ $row->category_name }}</a></h4>--}}
                <h4 class="panel-title"><a href="{{ route('category-show' ,$row->id) }}">{{ $row->category_name }}</a></h4>
            </div>
        </div>
    @endforeach


</div><!--/category-products-->
