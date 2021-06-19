<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    //

    public function index(){
        $products = Product::where('status',1)->latest()->get();
        $lts_p = Product::where('status',1)->latest()->limit(3)->get();
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.index',compact('products','categories','lts_p'));
    }

    public function productDetail($product_id){

        $product = Product::findOrFail($product_id);
        $category_id = $product->category_id;
        $related_p = Product::where('category_id',$category_id)->latest()->limit(3)->get();
        return view('pages.product-deatails',compact('product','related_p'));

    }

    // categorywiese product
    public function catWiseProduct($cat_id){
        $products = Product::where('category_id',$cat_id)->latest()->paginate(9);
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.cat-product',compact('products','categories'));
    }
}
