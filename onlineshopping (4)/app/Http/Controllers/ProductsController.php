<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Support\Facades\Session;



class ProductsController extends Controller
{
    //
    public function index(){
        /* $products = [ 0=> ["name"=>"Iphone","category"=>"smart phone","price"=>1000],
             1=> ["name"=>"Galaxy","category"=>"tablets","price"=>2000],
             2=> ["name"=>"Sony","category"=>"TV","price"=>3000]];*/
        $products = Product::with('category')->latest('id')->paginate(6);
//        $categories = Category::where('status',1)->latest()->get();
        $categories = Category::all();
        $brands = Brand::all();
//            $products = Product::simplePaginate(6);

//        return view("allproducts",compact("products", "categories","brands"));
        return view('allproducts',['products'=>$products,'categories'=>$categories,'brands'=>$brands]);

    }

    public function productDetail($product_id){


        $product = Product::findOrFail($product_id);
        $category_id = $product->category_id;
        $related_p = Product::where('category_id',$category_id)->where('id','!=',$product_id)->latest()->limit(3)->get();
//        return view('pages.product-deatails',compact('product','related_p'));
        return view('pages.product-deatails',['product'=>$product,'related_p'=>$related_p]);
    }

    // categorywiese product

    public function catWiseProduct($cat_id){
        $products = Product::where('category_id',$cat_id)->latest()->paginate(9);
        $categories = Category::where('status',1)->latest()->get();
        $brands = Brand::where('status',1)->latest()->get();
//        return view('pages.cat-product',compact('products','categories','brands'));
        return view('pages.cat-product',['products'=>$products,'categories'=>$categories,'brands'=>$brands]);

    }
    public function brandWiseProduct($brand_id){
        $products = Product::where('brand_id',$brand_id)->latest()->paginate(9);
        $categories = Category::where('status',1)->latest()->get();
        $brands = Brand::where('status',1)->latest()->get();
//        return view('pages.brand-product',compact('products','categories','brands'));
        return view('pages.brand-product',['products'=>$products,'categories'=>$categories,'brands'=>$brands]);
    }

    public function detail($id){

        $data = Product::find($id);
        return view('detail',['product'=>$data]);

    }

    public function menProducts(){

        $products = DB::table('products')->where('type', "مردانه")->get();
        return view("menProducts",compact("products"));

    }

    public function womenProducts(){

        $products = DB::table('products')->where('type', "زنانه")->get();
        return view("womenProducts",compact("products"));

    }

    public function search(Request $request){

        $searchText = $request->get('searchText');
        $products = Product::where('product_name',"Like",$searchText."%")->paginate(3);
        $categories = Category::all();
        $brands = Brand::all();
        return view("allproducts",compact("products", "categories","brands"));

    }

    public function getSearch(Request $request){

        $key = $request->input('keyword');
        $products = Product::search($key)->latest()->paginate(3);
        $categories = Category::all();
        $brands = Brand::all();
        return view('pages.search',['products'=>$products,'categories'=>$categories,'brands'=>$brands]);
    }

    public function showCategory(Category $category)
    {
        $products = Product::where('category_id', $category->id)->simplePaginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('allproducts', ['products' => $products, 'categories' => $categories, 'brands' => $brands]);
    }

    public function showBrand(Brand $brand)
    {
        $products = Product::where('brand_id', $brand->id)->simplePaginate(6);
        $brands = Brand::all();
        $categories = Category::all();
        return view('allproducts', ['products' => $products, 'brands' => $brands,'categories' => $categories]);
    }

    public function addProductToCart(Request $request,$id){

//        $request->session()->forget("cart");
//        $request->session()->flash();

////        print_r($id);
        $prevCart = $request->session()->get('cart');
        $cart= new Cart($prevCart);

        $product = Product::find($id);
        $cart->addItem($id,$product);
        $request->session()->put('cart',$cart);

//          //dump($cart);
//
        return redirect()->route("allProducts");
    }

    public function showCart(){
        $cart = Session::get('cart');
        //cart is not empty
        if($cart){

//             dump($cart);
            return view('cartproducts',['cartItems'=> $cart]);

            //cart is empty
        }else{

//            echo "cart is empty";
            return redirect()->route('allProducts');

        }
    }


    public function deleteItemFromCart(Request $request,$id){

        $cart = $request->session()->get("cart");

        if(array_key_exists($id,$cart->items)){
            unset($cart->items[$id]);
        }

        $prevCart = $request->session()->get("cart");
        $updatedCart = new Cart($prevCart);
        $updatedCart->updatePriceAndQunatity();

        $request->session()->put("cart",$updatedCart);



        return redirect()->route('cartproducts');


    }



    public function increaseSingleProduct(Request $request,$id){

        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);

        $product = Product::find($id);
        $cart->addItem($id,$product);
        $request->session()->put('cart',$cart);

        //dump($cart)

        return redirect()->route("cartproducts");
    }

    public function decreaseSingleProduct(Request $request,$id){

//        $prevCart = $request->session()->get('cart');
//        $cart = new Cart($prevCart);
//
//        if ( $cart->items[$id]['quantity'] > 1){
//            $product = Product::find($id);
//            $cart->items[$id]['quantity'] = $cart->items[$id]['quantity']-1;
//            $cart->items[$id]['totalSinglePrice'] = $cart->items[$id]['quantity'] * $product['price'];
//            $cart->updatePriceAndQunatity();
//
//            $request->session()->put('cart',$cart);
//        }
//        return redirect()->route("cartproducts");
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);

        $product = Product::find($id);
        $cart->removeItem($id,$product);
        $request->session()->put('cart',$cart);

        //dump($cart)

        return redirect()->route("cartproducts");
    }

//    public function checkoutProducts(){
//        return view('checkoutproducts');
//    }




    public function checkoutProducts(){

        return view('checkoutproducts');

    }

    public function createNewOrder(Request $request){

        $cart = Session::get('cart');

        $first_name = $request->input('first_name');
        $address = $request->input('address');
        $last_name = $request->input('last_name');
        $zip = $request->input('zip');
        $phone = $request->input('phone');
        $email = $request->input('email');

        //cart is not empty
        if ($cart){
            //dump($cart);
            $date = date('Y-m-d H:is');
            $newOrderArray = array("status"=>"on_hold","date"=>$date,"del_date"=>$date,"price"=>$cart->totalPrice,"first_name"=>$first_name,"address"=>$address,'last_name'=>$last_name,'zip'=>$zip,'email'=>$email,'phone'=>$phone);

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
            Session::flash();

            $payment_info =  $newOrderArray;
            $request->session()->put('payment_info',$payment_info);
//            print_r($newOrderArray);
            // return redirect()->route("allProducts")->withsuccess("Thanks For Choosing Us");
            return redirect()->route("showPaymentPage");
        }else{

            //return redirect()->route("allProducts");
            return redirect()->route("allProducts");

//            print_r('error');
        }
    }



    public function createOrder(){

        $cart = Session::get('cart');

        //cart is not empty
        if ($cart){
            //dump($cart)
            $date =date('Y-m-d H:i:s');
            $newOrderArray = array("status"=>"در انتظار","date"=>$date,"del_date"=>$date,"price"=>$cart->totalPrice);
            $created_order = DB::table("orders")->insert($newOrderArray);
            $order_id = DB::getPdo()->lastInsertId();


            foreach ($cart->items as $cart_item){
                $item_id = $cart_item['data']['id'];
                $item_name = $cart_item['data']['name'];
                $item_price = $cart_item['data']['price'];
                $newItemsInCurrentOrder = array("item_id"=>$item_id,"order_id"=>$order_id,"item_name"=>$item_name,"item_price"=>$item_price);
                $created_order_items = DB::table("order_items")->insert($newItemsInCurrentOrder);
            }

            //delete cart
            Session::forget("cart");
            Session::flush();
//            return redirect()->route("allProducts")->withsuccess("Thanks For Choosing Us");
            return redirect()->route("allProducts")->withsuccess("از اینکه ما را انتخاب کردید متشکریم");
        }else{

            return redirect()->route("allProducts");
        }
    }


    public function cartItem(){



    }


    public function orderNow(){

        return view('ordernow');

    }

    public function orderPlace(Request $request){

//        return $request->input();

        $order = new Order;
        $order->status="pending";
        $order->payment_method=$request->payment;
        $order->payment_status="pending";
        $order->address=$request->address;
        $order->save();

        return $request->input();




    }







}



