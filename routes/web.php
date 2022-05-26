<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CagegoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Coupon\CouponController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProductControllerFrontend;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Location\LocationController;

Auth::routes();
// +++++++++++++++++++++++++++++++++++++++++ frontend routes start ++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('/',[HomeController::class, 'index']);
Route::get('/product-details',[HomeController::class, 'productDetails'])->name('productDetails');
Route::get('/shopping',[HomeController::class, 'shopping'])->name('shopping');
Route::get('/location',[HomeController::class, 'location'])->name('location');
Route::get('/show-{cat_slug}', [HomeController::class, 'catWiseProduct']);
Route::get('/_{product_slug}', [HomeController::class, 'productShow']);
// product view ajax
Route::post('/product-view', [CartController::class, 'productView']);
// product add to cart ajax
Route::post('/add-to-cart', [CartController::class, 'addToCart']);
// product mini cart ajax
Route::get('/product-minicart', [CartController::class, 'productMinicart']);
// product remove from cart ajax
Route::get('/remove-cart', [CartController::class, 'productRemove']);
//cart view ||cart index
Route::get('/cart', [CartController::class, 'cartIndex']);
// cart page ajax 
Route::get('/cart-page', [CartController::class, 'cartPage']);
// incrase cart quantity 
Route::get('/increase-cart-qty', [CartController::class, 'increaseCartQty']);
// have coupon
Route::post('/have-coupon', [CartController::class, 'haveCoupon']);
// checkout now
Route::get('/checkout', [CheckoutController::class, 'checkOut']);
// +++++++++++++++++++++++++++++++++++++++++ frontend routes end ++++++++++++++++++++++++++++++++++++++++++++++++



// +++++++++++++++++++++++++++++++++++++++++ backend routes start ++++++++++++++++++++++++++++++++++++++++++++++++

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function(){ // added middleware auth
    //category 
    Route::get('/category', [CagegoryController::class, 'index'])->name('category');
    Route::post('/store-category', [CagegoryController::class, 'storeCategory'])->name('storeCategory');
    Route::post('/update-category', [CagegoryController::class, 'updateCategory'])->name('updateCategory');
    Route::get('/category/{id}', [CagegoryController::class, 'deleteCategory'])->name('deleteCategory');
    //product 
    Route::get('/product-list', [ProductController::class, 'index'])->name('productList');
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('addProduct');
    Route::post('/store-product', [ProductController::class, 'storeProduct'])->name('storeProduct');
    Route::get('/product-edit/{id}', [ProductController::class, 'editProduct']);
    Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('updateProduct');
    Route::get('/product-delete/{id}', [ProductController::class, 'deleteProduct']);
    Route::get('/product-view/{id}', [ProductController::class, 'viewProduct']);
    Route::get('/product-image-delete/{img_id}', [ProductController::class, 'ImageDelete']);
    Route::post('/image-update', [ProductController::class, 'imageUpdate'])->name('image-update');

    //banner
    Route::get('/banner', [BannerController::class, 'bannerIndex'])->name('banner');
    Route::get('/add-banner', [BannerController::class, 'addBanner'])->name('addBanner');
    Route::post('/store-banner', [BannerController::class, 'storeBanner'])->name('storeBanner');
    Route::get('/edit-banner/{banner_id}', [BannerController::class, 'editBanner']);
    Route::post('/update-banner', [BannerController::class, 'updateBanner'])->name('updateBanner');
    Route::get('/delete-banner/{banner_id}', [BannerController::class, 'deleteBanner']);

    //block
    Route::get('/blogs-list', [BlogController::class, 'indexBlog'])->name('blogs-list');
    Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('addBlog');
    Route::post('/store-blog', [BlogController::class, 'storeBlog'])->name('storeBlog');

    //coupon 
    Route::get('/coupon-list', [CouponController::class, 'indexCoupon'])->name('coupon-list');
    Route::post('/store-coupon', [CouponController::class, 'couponStore'])->name('storeCoupon');
    Route::post('/update-coupon', [CouponController::class, 'updateCoupon'])->name('update-coupon');
    Route::get('/delete-coupon/{coupon_id}', [CouponController::class, 'deleteCoupon']);

    //division 
    Route::get('/division-list', [LocationController::class, 'indexDivision'])->name('division-list');
    Route::post('/store-division', [LocationController::class, 'storeDivision'])->name('storeDivision');
    Route::post('/division-update', [LocationController::class, 'updateDivision'])->name('division-update');


    //district
    Route::get('/district-list', [LocationController::class, 'districtIndex'])->name('district-list');
    Route::post('/store-district',  [LocationController::class, 'storeDistrict'])->name('storeDistrict');

    // ************************************frontend auth guard**************************************
    Route::post('/add-to-wishlist', [WishlistController::class, 'addToWishlist']); 
    Route::get('/wishlist',  [WishlistController::class, 'indexWishlist']);
    // wishlist data ajax 
    Route::get('/wishlist-data',  [WishlistController::class, 'wishlistData']);
    // remove wishlist ajax 
    Route::post('/remove-wishlist',  [WishlistController::class, 'removeWishlist']);
});


// +++++++++++++++++++++++++++++++++++++++++ backend routes start ++++++++++++++++++++++++++++++++++++++++++++++++