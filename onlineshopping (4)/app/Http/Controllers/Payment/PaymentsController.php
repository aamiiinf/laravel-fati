<?php

namespace App\Http\Controllers\Payment;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class PaymentsController extends Controller
{
    //

    public function index(){

        $products = Product::paginate(3);
        return view("allproducts",compact("products"));
    }


    public function showPaymentPage(){

        $payment_info =Session::get('payment_info');

        //has not paied
        if ($payment_info['status'] == 'on_hold'){
            return view('payment.paymentpage',['payment_info'=>$payment_info]);
            //cart is empty
        }else{
            return redirect()->route("allProducts");
        }
        //delete cart
        Session::forget("cart");
        Session::flush();
//        Session::forget("cart");
//        Session::flush();
    }



    public function showCart(){
        $cart = Session::get('cart');
        //cart is not empty
        if ($cart){
            return view('cartproducts',['cartItems'=>$cart]);
            //cart is empty
        }else{
            return redirect()->route("allProducts");
        }
    }

    public function checkoutProducts(){

        //return redirect()->route('checkoutProducts');
        return view('checkoutproducts');
    }

    public function createNewOrder(Request $request){
        $cart = Session::get('cart');

        $first_name = $request->input('first_name');
        $address = $request->input('address');
        $last_name = $request->input('last_name');
//        $zip = $request->input('zip');
        $phone = $request->input('phone');
        $email = $request->input('email');


        //cart is not empty
        if ($cart){
            //dump($cart);
            $date =date('Y-m-d H:i:s');
//            $newOrderArray = array("status"=>"on_hold","date"=>$date,"del_date"=>$date,"price"=>$cart->totalPrice,"first_name"=>$first_name,"address"=>$address,'last_name'=>$last_name,'zip'=>$zip,'email'=>$email,'phone'=>$phone);
            $newOrderArray = array("status"=>"on_hold","date"=>$date,"del_date"=>$date,"price"=>$cart->totalPrice,"first_name"=>$first_name,"address"=>$address,'last_name'=>$last_name,'email'=>$email,'phone'=>$phone);

            $created_order = DB::table("orders")->insert($newOrderArray);
            $order_id = DB::getPdo()->lastInsertId();

            foreach ($cart->items as $cart_item){

                $item_id = $cart_item['date']['id'];
                $item_name = $cart_item['date']['name'];
                $item_price = $cart_item['date']['price'];
                $newItemsInCurrentOrder = array("item_id"=>$item_id,"order_id"=>$order_id,"item_name"=>$item_name,"item_price"=>$item_price);
                $created_order_items = DB::table("order_items")->insert($newItemsInCurrentOrder);
            }
            //delete cart
            Session::forget("cart");
            Session::flush();

            print_r($newOrderArray);
            // return redirect()->route("allProducts")->withsuccess("Thanks For Choosing Us");


        }else{
            print_r('error');
        }






    }

}
