Route::get('/tt',[\App\Http\Controllers\FontendController::class,'index']);
Route::get('/products', [ProductsController::class, 'index'])->name('allProducts');



\Illuminate\Support\Facades\Auth::routes();


Route::get('admin/products', [App\Http\Controllers\Admin\AdminProductsController::class, 'index'])->name('adminDisplayProducts')->middleware( 'restrictToAdmin');

// =========================



// ===================================

Route::prefix('admin')->middleware('restrictToAdmin')->group(function() {
    // home
    Route::get('/home', [\App\Http\Controllers\AdminController::class,'index'])->name('adminDisplay');
    //category section
    Route::get('/categories', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin.category');
    Route::post('/categories-store',[\App\Http\Controllers\Admin\CategoryController::class,'StoreCat'])->name('store.category');
    Route::get('/categories/edit/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Edit']);
    Route::post('/categories-update',[\App\Http\Controllers\Admin\CategoryController::class,'UpdateCat'])->name('update.category');
    Route::get('/categories/delete/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Delete']);
    Route::get('/categories/inactive/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Inactive']);
    Route::get('/categories/active/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Active']);
    // ==========================Brand ==================================
    Route::get('/brand', [\App\Http\Controllers\Admin\BrandController::class, 'index'])->name('admin.brand');
    Route::post('/brand-store', [\App\Http\Controllers\Admin\BrandController::class, 'Store'])->name('store.brand');
    Route::get('/brand/edit/{brand_id}', [\App\Http\Controllers\Admin\BrandController::class, 'Edit']);
    Route::post('/brand-update', [\App\Http\Controllers\Admin\BrandController::class, 'Update'])->name('update.brand');
    Route::get('/brand/delete/{brand_id}', [\App\Http\Controllers\Admin\BrandController::class, 'Delete']);
    Route::get('/brand/inactive/{brand_id}', [\App\Http\Controllers\Admin\BrandController::class, 'Inactive']);
    Route::get('/brand/active/{brand_id}', [\App\Http\Controllers\Admin\BrandController::class, 'Active']);
    // ======================= coupon =============================
    Route::get('/coupon', [\App\Http\Controllers\Admin\CouponController::class, 'index'])->name('admin.coupon');
    Route::post('/coupon-store', [\App\Http\Controllers\Admin\CouponController::class, 'Store'])->name('store.coupon');
    Route::get('/coupon/edit/{coupon_id}', [\App\Http\Controllers\Admin\CouponController::class, 'couponEdit']);
    Route::post('/coupon-update', [\App\Http\Controllers\Admin\CouponController::class, 'update'])->name('update.coupon');
    Route::get('/coupon/delete/{coupon_id}', [\App\Http\Controllers\Admin\CouponController::class, 'couponDelete']);
    Route::get('/coupon/inactive/{coupon_id}', [\App\Http\Controllers\Admin\CouponController::class, 'Inactive']);
    Route::get('/coupon/active/{coupon_id}', [\App\Http\Controllers\Admin\CouponController::class, 'Active']);

    //=====================
    Route::get('/orders',[\App\Http\Controllers\Admin\CouponController::class, 'orderIndex'])->name('admin.orders');
    Route::get('/orders/view/{id}',[\App\Http\Controllers\Admin\CouponController::class, 'viewOrder']);

});



//=================
Route::prefix('admin/products')->middleware('restrictToAdmin')->group(function() {
    Route::get('/add', [\App\Http\Controllers\Admin\ProductController::class, 'addProduct'])->name('add-products');
    Route::post('/store', [\App\Http\Controllers\Admin\ProductController::class, 'storeProduct'])->name('store-products');
    Route::get('/manage', [\App\Http\Controllers\Admin\ProductController::class, 'manageProduct'])->name('manage-products');
    Route::get('/edit/{proudct_id}', [\App\Http\Controllers\Admin\ProductController::class, 'editProduct']);
    Route::post('/update', [\App\Http\Controllers\Admin\ProductController::class, 'updateProduct'])->name('update-products');
    Route::post('/image-update', [\App\Http\Controllers\Admin\ProductController::class, 'updateImage'])->name('update-image');
    Route::get('/delete/{product_id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy']);
    Route::get('/inactive/{product_id}', [\App\Http\Controllers\Admin\ProductController::class, 'Inactive']);
    Route::get('/active/{product_id}', [\App\Http\Controllers\Admin\ProductController::class, 'Active']);
});
// =======================


//================================================Admin Route=================================================================
////category section
//Route::get('admin/categories', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin.category');
//Route::post('admin/categories-store',[\App\Http\Controllers\Admin\CategoryController::class,'StoreCat'])->name('store.category');
//Route::get('admin/categories/edit/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Edit']);
//Route::post('admin/categories-update',[\App\Http\Controllers\Admin\CategoryController::class,'UpdateCat'])->name('update.category');
//Route::get('admin/categories/delete/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Delete']);
//Route::get('admin/categories/inactive/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Inactive']);
//Route::get('admin/categories/active/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class,'Active']);

// ==========================Brand ==============================================================================================
//Route::get('admin/brand',[\App\Http\Controllers\Admin\BrandController::class,'index'])->name('admin.brand');
//Route::post('admin/brand-store',[\App\Http\Controllers\Admin\BrandController::class,'Store'])->name('store.brand');
//Route::get('admin/brand/edit/{brand_id}',[\App\Http\Controllers\Admin\BrandController::class,'Edit']);
//Route::post('admin/brand-update',[\App\Http\Controllers\Admin\BrandController::class,'Update'])->name('update.brand');
//Route::get('admin/brand/delete/{brand_id}',[\App\Http\Controllers\Admin\BrandController::class,'Delete']);
//Route::get('admin/brand/inactive/{brand_id}',[\App\Http\Controllers\Admin\BrandController::class,'Inactive']);
//Route::get('admin/brand/active/{brand_id}',[\App\Http\Controllers\Admin\BrandController::class,'Active']);
// ============================= Products ============================
//Route::get('admin/products/add',[\App\Http\Controllers\Admin\ProductController::class,'addProduct'])->name('add-products');
//Route::post('admin/products/store',[\App\Http\Controllers\Admin\ProductController::class,'storeProduct'])->name('store-products');
//Route::get('admin/products/manage',[\App\Http\Controllers\Admin\ProductController::class,'manageProduct'])->name('manage-products');
//Route::get('admin/products/edit/{proudct_id}',[\App\Http\Controllers\Admin\ProductController::class,'editProduct']);
//Route::post('admin/products/update',[\App\Http\Controllers\Admin\ProductController::class,'updateProduct'])->name('update-products');
//Route::post('admin/products/image-update',[\App\Http\Controllers\Admin\ProductController::class,'updateImage'])->name('update-image');
//Route::get('admin/products/delete/{product_id}',[\App\Http\Controllers\Admin\ProductController::class,'destroy']);
//Route::get('admin/products/inactive/{product_id}',[\App\Http\Controllers\Admin\ProductController::class,'Inactive']);
//Route::get('admin/products/active/{product_id}',[\App\Http\Controllers\Admin\ProductController::class,'Active']);

// ======================= coupon =============================
//Route::get('admin/coupon',[\App\Http\Controllers\Admin\CouponController::class, 'index'])->name('admin.coupon');
//Route::post('admin/coupon-store',[\App\Http\Controllers\Admin\CouponController::class, 'Store'])->name('store.coupon');
//Route::get('admin/coupon/edit/{coupon_id}',[\App\Http\Controllers\Admin\CouponController::class, 'couponEdit']);
//Route::post('admin/coupon-update',[\App\Http\Controllers\Admin\CouponController::class, 'update'])->name('update.coupon');
//Route::get('admin/coupon/delete/{coupon_id}',[\App\Http\Controllers\Admin\CouponController::class, 'couponDelete']);
//Route::get('admin/coupon/inactive/{coupon_id}',[\App\Http\Controllers\Admin\CouponController::class, 'Inactive']);
//Route::get('admin/coupon/active/{coupon_id}',[\App\Http\Controllers\Admin\CouponController::class, 'Active']);

//==================================

//Route::get('admin/orders',[\App\Http\Controllers\Admin\CouponController::class, 'orderIndex'])->name('admin.orders');
//Route::get('admin/orders/view/{id}',[\App\Http\Controllers\Admin\CouponController::class, 'viewOrder']);
// =================================
//Route::get('admin/orders',[\App\Http\Controllers\Admin\CouponController::class, 'orderIndex'])->name('admin.orders');
//Route::get('admin/orders/view/{id}',[\App\Http\Controllers\Admin\CouponController::class, 'viewOrder']);

// ================= cart ============
Route::post('add/to-cart/{prouct_id}',[CartController::class,'addToCart']);
Route::get('cart',[CartController::class,'cartPage']);
Route::get('cart/destroy/{cart_id}',[CartController::class,'destroy']);
Route::post('cart/quantity/update/{cart_id}',[CartController::class,'quantityUpdate']);
Route::post('coupon/apply',[CartController::class,'applyCoupon']);
Route::get('coupon/destroy',[CartController::class, 'couponDestroy']);
//Route::post('add/to-cart/{product_id}',[\App\Http\Controllers\CartController::class, 'addToCart']);
////Route::post('add/to-cart/{prouct_id}','CartController@addToCart');
//Route::get('cart',[\App\Http\Controllers\CartController::class,'cartPage']);
//Route::get('cart/destroy/{cart_id}',[\App\Http\Controllers\CartController::class, 'destroy']);
////Route::post('cart/quantity/update/{cart_id}',\App\Http\Controllers\CartController::class,'quantityUpdate');
//Route::post('cart/quantity/update/{cart_id}',[\App\Http\Controllers\CartController::class, 'quantityUpdate']);
//Route::post('coupon/apply',[\App\Http\Controllers\CartController::class, 'applyCoupon']);
//Route::get('coupon/destroy',[\App\Http\Controllers\CartController::class, 'couponDestroy']);
//

// ================= wishlist ============
Route::get('add/to-wishlist/{prouct_id}',[\App\Http\Controllers\WishlistController::class,'addToWishlist']);
Route::get('wishlist',[\App\Http\Controllers\WishlistController::class,'wishPage']);
Route::get('wishlist/destroy/{wishlist_id}',[\App\Http\Controllers\WishlistController::class,'destroy']);
//Route::get('add/to-wishlist/{prouct_id}','WishlistController@addToWishlist');
//Route::get('wishlist','WishlistController@wishPage');
//Route::get('wishlist/destroy/{wishlist_id}','WishlistController@destroy');

// =============== category product show
Route::get('category/product-show/{id}',[ProductsController::class,'catWiseProduct']);

// =============== brand product show
Route::get('brand/product-show/{id}',[ProductsController::class,'brandWiseProduct']);

// ============= product details ============
Route::get('proudct/details/{product_id}',[ProductsController::class,'productDetail']);
Route::get('proudct/details/{product_id}',[\App\Http\Controllers\FontendController::class,'productDetail']);
//Route::get('proudct/details/{product_id}','FontendController@productDetail');

// checkout page
Route::get('checkout',[\App\Http\Controllers\CheckoutController::class,'index']);
Route::post('place/order',[\App\Http\Controllers\OrderController::class,'storeOrder'])->name('place-order');
//Route::post('place/order','OrderController@storeOrder')->name('place-order');
Route::get('order/success',[\App\Http\Controllers\OrderController::class,'orderSuccess']);
//Route::get('checkout','CheckoutController@index');
//Route::get('checkout','CheckoutController@index');
//Route::post('place/order','OrderController@storeOrder')->name('place-order');
//Route::get('order/success','OrderController@orderSuccess');


















Route::post('/login',[UserController::class, 'login']);
Route::get('/login',function (){
    return view('login');
});

Route::get('/', [ProductsController::class, 'index'])->name('allProducts');








//show all products
Route::get('/products', [ProductsController::class, 'index'])->name('allProducts');







//search
Route::get('/search', [ProductsController::class, 'search'])->name('searchProducts');