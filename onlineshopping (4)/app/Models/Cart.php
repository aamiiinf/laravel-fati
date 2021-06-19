<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//class Cart extends Model
//{
////    use HasFactory;
//}


///**
// * Class Cart
// * Cart contruct
// */

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id', 'qty','price','user_ip',
    ];

    public function product(){

        return $this->belongsTo(Product::class,'product_id');
//        return $this->belongsTo(Product::class,'product_id');
    }
}



//    public $items; //['id'=>['quantity'=>,'Price'=>'data'=>],.,]
//    public $totalQuantity;
//    public $totalPrice;
//
//
//
//
//
//
//    public function __construct($prevCart)
//    {
//        if ($prevCart != null){
//            $this->items =$prevCart->items;
//            $this->totalQuantity = $prevCart->totalQuantity;
//            $this->totalPrice = $prevCart ->totalPrice;
//
//        }else{
//            $this->items = [];
//            $this->totalQuantity=0;
//            $this->totalPrice=0;
//
//        }
//    }
//
//    public function addItem($id,$product){
//
//        $price = (int) str_replace("$"," ",$product->price);
//
//        // the item already exists
//        if(array_key_exists($id,$this->items)){
//
//            $productToAdd = $this->items[$id];
//            $productToAdd['quantity']++;
//            $productToAdd['totalSinglePrice'] = $productToAdd['quantity']  * $price;
//
//            // first time to add this product to cart
//        }else{
//
//            $productToAdd = ['quantity'=>1, 'totalSinglePrice'=>$price , 'data'=>$product];
//
//        }
//        $this->items[$id] = $productToAdd;
//        $this->totalQuantity++;
//        $this->totalPrice = $this->totalPrice + $price;
//    }
//    public function removeItem($id,$product){
//
//        $price = (int) str_replace("$"," ",$product->price);
//
//        // the item already exists
//        if(array_key_exists($id,$this->items)){
//
//            $productToremove = $this->items[$id];
//            $productToremove['quantity']--;
//            $productToremove['totalSinglePrice'] = $productToremove['quantity']  * $price;
//
//            // first time to add this product to cart
//        }else{
//
//            $productToremove = ['quantity'=>1, 'totalSinglePrice'=>$price , 'data'=>$product];
//
//        }
//        $this->items[$id] = $productToremove;
//        $this->totalQuantity--;
//        $this->totalPrice = $this->totalPrice - $price;
//    }
//
//    public function updatePriceAndQunatity(){
//
//        $totalPrice = 0;
//        $totalQuanity = 0;
//
//        foreach ($this->items as $item){
//            $totalQuanity = $totalQuanity + $item['quantity'];
//            $totalPrice = $totalPrice + $item['totalSinglePrice'];
//        }
//
//
//        $this->totalQuantity = $totalQuanity;
//        $this->totalPrice = $totalPrice;
//    }



//}
