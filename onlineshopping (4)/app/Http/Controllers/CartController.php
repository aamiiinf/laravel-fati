<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;
//use MongoDB\Driver\Session;
//use Illuminate\Contracts\Session\Session;
//use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    public function addToCart(Request $request,$product_id){

//        echo request()->ip();
//        die();
        $check = Cart::where('product_id',$product_id)->where('user_ip',request()->ip())->first();
        if ($check){

             Cart::where('product_id',$product_id)->where('user_ip',request()->ip())->increment('qty');

            return redirect()->back()->with('cart','Product added On Cart');

        }else{
            Cart::insert([
                'product_id'=> $product_id,
                'qty'=> 1,
                'price'=> $request->price,
                'user_ip'=> request()->ip(),

            ]);

            return redirect()->back()->with('cart','Product added On Cart');

        }


    }

    // -------------- cart page --------------------

    public function cartPage(){

        $carts = Cart::where('user_ip',request()->ip())->latest()->get();
        $subtotal = Cart::all()->where('user_ip',request()->ip())->sum(function ($t){
            return $t->price * $t->qty;
        });
        return view('pages.cart',compact('carts','subtotal'));
    }

    // --------- cart destroy ------

    public function destroy($cart_id){

        Cart::where('id',$cart_id)->where('user_ip',request()->ip())->delete();
        return redirect()->back()->with('cart_delete',' Cart Product Removed');


    }

    // ------------- cart quantity update -----------

    public function quantityUpdate(Request $request,$cart_id){

        Cart::where('id',$cart_id)->where('user_ip',request()->ip())->update([
            'qty'=>$request->qty,
        ]);
        return redirect()->back()->with('cart_update',' Quantity Updated');

    }

    // --------------- coupon applied =------------

    public function applyCoupon(Request $request){

        $check = Coupon::where('coupon_name',$request->coupon_name)->first();
        if ($check){
            $subtotal = Cart::all()->where('user_ip',request()->ip())->sum(function ($t){
                return $t->price * $t->qty;
            });

            Session::put('coupon',[
                'coupon_name'=> $check->coupon_name,
                'coupon_discount'=> $check->discount,
                'discount_amount'=> $subtotal * ($check->discount/100),
                ]);
            return redirect()->back()->with('cart_update','Successfully Coupon Applied');
        }else{
            return redirect()->back()->with('cart_delete','Invalid Coupon');
        }

    }

    // coupon destroy


    public function couponDestroy(){
        if (Session::has('coupon')) {
            session()->forget('coupon');
            return Redirect()->back()->with('cart_delete','Coupon Removed Success');
        }

    }
//    public function addToCart(Request $request,$product_id){
//
//
//        $check = Cart::where('product_id',$product_id)->where('user_ip',request()->ip())->first();
//        if ($check){
//             Cart::where('product_id',$product_id)->where('user_ip',request()->ip())->increment('qty');
//            return redirect()->back()->with('cart','Product added On Cart');
//
//        }else{
//            Cart::insert([
//                'product_id' => $product_id,
//                'qty' => 1,
//                'price' => $request->price,
//                'user_ip'=> request()->ip(),
//
//            ]);
//
//        }
//
//        return redirect()->back()->with('cart','Product added On Cart');
//
//    }

//    public function cartPage(){
//
//        $carts = Cart::where('user_ip', request()->ip())->latest()->get();
//        $subtotal = Cart::all()->where('user_ip',request()->ip())->sum(function ($t){
//            return $t->price * $t->qty;
//        });
//        return view('cartproducts',compact('carts','subtotal'));
//    }
//
//    public function destroy($cart_id){
//
//
//        Cart::where('id',$cart_id)->where('user_ip',request()->ip())->delete();
//        return redirect()->back()->with('cart_delete',' Cart Product Removed');
//    }
//    public function quantityUpdate(Request $request,$cart_id){
//
//        Cart::where('id',$cart_id)->where('user_ip',request()->ip())->update([
//            'qty' => $request->qty,
//
//
//        ]);
//        return redirect()->back()->with('cart_update',' Quantity Updated');
//
//    }
//
//    public function applyCoupon(Request $request){
//        $check = Coupon::where('coupon_name',$request->coupon_name)->first();
//        if ($check) {
//            $subtotal = Cart::all()->where('user_ip',request()->ip())->sum(function($t){
//                return $t->price * $t->qty;
//            });
//
//            Session::put('coupon',[
//                'coupon_name' => $check->coupon_name,
//                'coupon_discount' => $check->discount,
//                'discount_amount' => $subtotal * ($check->discount/100),
//            ]);
//            return Redirect()->back()->with('cart_update','Successfully Coupon Applied');
//        }else{
//            return Redirect()->back()->with('cart_delete','Invalid Coupon');
//        }
//    }
//
//    public function couponDestroy(){
//        if (Session::has('coupon')){
//            session()->forget('coupon');
//            return Redirect()->back()->with('cart_delete','Coupon Remove Success');
//        }
//    }
}
