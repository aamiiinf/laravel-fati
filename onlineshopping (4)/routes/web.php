<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/products', [ProductsController::class, 'index'])->name('allProducts');



\Illuminate\Support\Facades\Auth::routes();




// =========================



// ===================================
Route::group(['prefix'=>'admin','middleware'=>'auth'],function() {

    // home
    Route::get('/home', [\App\Http\Controllers\AdminController::class,'index'])->name('adminDisplay');
    //category section
    Route::get('/categories', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin.category');
    Route::post('/categories-store',[\App\Http\Controllers\Admin\CategoryController::class,'StoreCat'])->name('store.category');
    Route::get('/categories/edit/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Edit'])->name('edit.category');
    Route::post('/categories-update',[\App\Http\Controllers\Admin\CategoryController::class,'UpdateCat'])->name('update.category');
    Route::get('/categories/delete/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Delete'])->name('delete.category');
    Route::get('/categories/inactive/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Inactive'])->name('inactive.category');
    Route::get('/categories/active/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Active'])->name('active.category');
    // ==========================Brand ==================================
    Route::get('/brand', [\App\Http\Controllers\Admin\BrandController::class, 'index'])->name('admin.brand');
    Route::post('/brand-store', [\App\Http\Controllers\Admin\BrandController::class, 'Store'])->name('store.brand');
    Route::get('/brand/edit/{brand_id}', [\App\Http\Controllers\Admin\BrandController::class, 'Edit'])->name('edit.brand');
    Route::post('/brand-update', [\App\Http\Controllers\Admin\BrandController::class, 'Update'])->name('update.brand');
    Route::get('/brand/delete/{brand_id}', [\App\Http\Controllers\Admin\BrandController::class, 'Delete'])->name('delete.brand');
    Route::get('/brand/inactive/{brand_id}', [\App\Http\Controllers\Admin\BrandController::class, 'Inactive'])->name('inactive.brand');
    Route::get('/brand/active/{brand_id}', [\App\Http\Controllers\Admin\BrandController::class, 'Active'])->name('active.brand');
    // ======================= coupon =============================
    Route::get('/coupon', [\App\Http\Controllers\Admin\CouponController::class, 'index'])->name('admin.coupon');
    Route::post('/coupon-store', [\App\Http\Controllers\Admin\CouponController::class, 'Store'])->name('store.coupon');
    Route::get('/coupon/edit/{coupon_id}', [\App\Http\Controllers\Admin\CouponController::class, 'couponEdit'])->name('edit.coupon');
    Route::post('/coupon-update', [\App\Http\Controllers\Admin\CouponController::class, 'update'])->name('update.coupon');
    Route::get('/coupon/delete/{coupon_id}', [\App\Http\Controllers\Admin\CouponController::class, 'couponDelete'])->name('delete.coupon');
    Route::get('/coupon/inactive/{coupon_id}', [\App\Http\Controllers\Admin\CouponController::class, 'Inactive'])->name('inactive.coupon');
    Route::get('/coupon/active/{coupon_id}', [\App\Http\Controllers\Admin\CouponController::class, 'Active'])->name('active.coupon');

    //=====================
    Route::get('/orders',[\App\Http\Controllers\Admin\CouponController::class, 'orderIndex'])->name('admin.orders');
    Route::get('/orders/delete/{order_id}', [\App\Http\Controllers\Admin\CouponController::class, 'orderDelete'])->name('delete.orders');
    Route::get('/orders/view/{id}',[\App\Http\Controllers\Admin\CouponController::class, 'viewOrder'])->name('view.orders');

});



//=================

    Route::group(['prefix'=>'admin/products','middleware'=>'auth'],function() {
    Route::get('/add', [\App\Http\Controllers\Admin\ProductController::class, 'addProduct'])->name('add-products');
    Route::post('/store', [\App\Http\Controllers\Admin\ProductController::class, 'storeProduct'])->name('store-products');
    Route::get('/manage', [\App\Http\Controllers\Admin\ProductController::class, 'manageProduct'])->name('manage-products');
        Route::get('/edit/{proudct_id}', [\App\Http\Controllers\Admin\ProductController::class, 'editProduct'])->name('edit-products');
    Route::post('/update', [\App\Http\Controllers\Admin\ProductController::class, 'updateProduct'])->name('update-products');
    Route::post('/image-update', [\App\Http\Controllers\Admin\ProductController::class, 'updateImage'])->name('update-image');
        Route::get('/delete/{product_id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('delete-products') ;
        Route::get('/inactive/{product_id}', [\App\Http\Controllers\Admin\ProductController::class, 'Inactive'])->name('inactive-products');
        Route::get('/active/{product_id}', [\App\Http\Controllers\Admin\ProductController::class, 'Active'])->name('active-products');
});
// =======================



// ================= cart ============

Route::post('add/to-cart/{prouct_id}',[CartController::class,'addToCart'])->name('add-cart');
Route::get('cart',[CartController::class,'cartPage'])->name('cart');
Route::get('cart/destroy/{cart_id}',[CartController::class,'destroy'])->name('delete-cart');
Route::post('cart/quantity/update/{cart_id}',[CartController::class,'quantityUpdate'])->name('quantity-cart');
Route::post('coupon/apply',[CartController::class,'applyCoupon'])->name('applyCoupon-cart');
Route::get('coupon/destroy',[CartController::class, 'couponDestroy'])->name('couponDelete-cart');


// ================= wishlist ============

Route::get('add/to-wishlist/{prouct_id}',[\App\Http\Controllers\WishlistController::class,'addToWishlist'])->name('add-wishlist');

Route::get('wishlist',[\App\Http\Controllers\WishlistController::class,'wishPage'])->name('wishlist');

Route::get('wishlist/destroy/{wishlist_id}',[\App\Http\Controllers\WishlistController::class,'destroy'])->name('delete-wishlist');


// =============== category product show

Route::get('category/product-show/{id}',[ProductsController::class,'catWiseProduct'])->name('category-show');

// =============== brand product show

Route::get('brand/product-show/{id}',[ProductsController::class,'brandWiseProduct'])->name('brand-show');

// ============= product details ============

Route::get('proudct/details/{product_id}',[ProductsController::class,'productDetail'])->name('detail-product');


// checkout page

Route::get('checkout',[\App\Http\Controllers\CheckoutController::class,'index'])->name('checkout');
Route::post('place/order',[\App\Http\Controllers\OrderController::class,'storeOrder'])->name('place-order');
Route::get('order/success',[\App\Http\Controllers\OrderController::class,'orderSuccess']);














Route::post('/login',[UserController::class, 'login']);
Route::get('/login',function (){
    return view('login');
});

Route::get('/', [ProductsController::class, 'index'])->name('allProducts');








//show all products
Route::get('/products', [ProductsController::class, 'index'])->name('allProducts');





//search
Route::get('/search', [ProductsController::class, 'search'])->name('searchProducts');
Route::get('/search',[ProductsController::class,'getSearch'])->name('search');



//User Authentication
Auth::routes();
Route::get('/home',[HomeController::class, 'index'])->name('home');