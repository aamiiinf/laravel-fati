<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //

    public function addToWishlist($product_id){

        if (Auth::check()) {
            Wishlist::insert([
                'user_id' => Auth::id(),
                'product_id' => $product_id,
            ]);

            return redirect()->back()->with('cart', 'Product added On Wishlist');


        }else{

            return redirect()->route('login')->with('loginError', ' At First Login Your Account Product added On Wishlist');

            }




      }
    // ------------- pages -----------

      public function wishPage(){

        $wishlists = Wishlist::where('user_id',Auth::id())->latest()->get();
        return view('pages.wishlist',compact('wishlists'));
      }

    // --------- wishlist destroy ------

    public function destroy($wishlist_Id){
        Wishlist::where('id',$wishlist_Id)->where('user_id',Auth::id())->delete();
        return Redirect()->back()->with('cart_delete','Wishist Product Removed');
    }

}
