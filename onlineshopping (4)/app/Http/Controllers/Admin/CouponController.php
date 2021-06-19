<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    //
    public function index(){
        $coupons = Coupon::latest()->get();
//        return view('admin.coupon.index',compact('coupons'));
        return view('admin.coupon.index',['coupons'=>$coupons]);

    }

    //    ============= coupon store =========
    public function Store(Request $request){

        Coupon::insert([

            'coupon_name'=> strtoupper($request->coupon_name) ,
            'discount'=> $request->discount ,
            'created_at'=> Carbon::now(),

        ]);

        return Redirect()->back()->with('success','Coupon added');
    }

    public function couponEdit($coupon_id){

        $coupon = Coupon::findOrFail($coupon_id);
//        return view('admin.coupon.edit',compact('coupon'));
        return view('admin.coupon.edit',['coupon'=>$coupon]);

    }

    public function update(Request $request){

        $coupon_id = $request->id;
        Coupon::findOrFail($coupon_id)->update([

            'coupon_name'=> strtoupper($request->coupon_name) ,
            'updated_at'=> Carbon::now(),

        ]);

        return Redirect()->route('admin.coupon')->with('success','Coupon Updated');

    }

    public function couponDelete($coupon_id){

        Coupon::findOrFail($coupon_id)->delete();
        return Redirect()->back()->with('delete','Coupon Deleted');

    }

    // status inactive
    public function Inactive($coupon_id){
        Coupon::find($coupon_id)->update(['status' => 0]);
        return Redirect()->back()->with('status','Coupon inactive');
    }


    // status inactive
    public function Active($coupon_id){
        Coupon::find($coupon_id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Coupon Activated');
    }

    // =================== Order ==========================

    public function orderIndex(){
        $orders = Order::latest()->get();
//        return view('admin.order.index',compact('orders'));
        return view('admin.order.index',['orders'=>$orders]);
    }

    //view orders //

    public function viewOrder($order_id){

        $order = Order::findOrFail($order_id);
        $orderItems = OrderItem::where('order_id',$order_id)->get();
        $shipping = Shipping::where('order_id',$order_id)->first();
//        return view('admin.order.view',compact('order','orderItems','shipping'));
        return view('admin.order.view',['order'=>$order,'orderItems'=>$orderItems,'shipping'=>$shipping]);

    }

    public function orderDelete($order_id){

        Order::findOrFail($order_id)->delete();
        return Redirect()->back()->with('delete','Coupon Deleted');

    }


}
