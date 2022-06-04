<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CagegoryController;
use App\Http\Controllers\Backend\OrderController_;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Coupon\CouponController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProductControllerFrontend;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Location\LocationController;
use App\Http\Controllers\frontend\SearchController;

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
Route::get('/division-by-district', [CheckoutController::class, 'divisionByDistrict']);
Route::get('/district-by-thana', [CheckoutController::class, 'districtByThana']);
//order now
Route::post('/order', [OrderController::class, 'orderStore'])->name('order');
//live serarch
Route::post('/live-search', [SearchController::class, 'liveSearch']);


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
    Route::get('/add-product-content/{product_id}', [ProductController::class, 'addProductContent']);
    Route::post('/store-product-content', [ProductController::class, 'storeProductContent'])->name('storeProductContent');

    //banner
    Route::get('/banner', [BannerController::class, 'bannerIndex'])->name('banner');
    Route::get('/add-banner', [BannerController::class, 'addBanner'])->name('addBanner');
    Route::post('/store-banner', [BannerController::class, 'storeBanner'])->name('storeBanner');
    Route::get('/edit-banner/{banner_id}', [BannerController::class, 'editBanner']);
    Route::post('/update-banner', [BannerController::class, 'updateBanner'])->name('updateBanner');
    Route::get('/delete-banner/{banner_id}', [BannerController::class, 'deleteBanner']);

    //blog
    Route::get('/blogs-list', [BlogController::class, 'indexBlog'])->name('blogs-list');
    Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('addBlog');
    Route::post('/store-blog', [BlogController::class, 'storeBlog'])->name('storeBlog');
    Route::get('/blog-edit/{blog_id}', [BlogController::class, 'editBlog']);
    Route::post('/update-blog', [BlogController::class, 'updateBlog'])->name('updateBlog');

    //testimonial
    Route::get('/testimonial-list', [TestimonialController::class, 'indexTestimonial'])->name('indexTestimonial');
    Route::post('/store-testimonial', [TestimonialController::class, 'testimonialStore'])->name('testimonialStore');
    Route::post('/update-testimonial', [TestimonialController::class, 'updateTestimonial'])->name('updateTestimonial');
    Route::get('/testimonial-delete/{id}', [TestimonialController::class, 'deleteTestimonial']);

    //coupon 
    Route::get('/coupon-list', [CouponController::class, 'indexCoupon'])->name('coupon-list');
    Route::post('/store-coupon', [CouponController::class, 'couponStore'])->name('storeCoupon');
    Route::post('/update-coupon', [CouponController::class, 'updateCoupon'])->name('update-coupon');
    Route::get('/delete-coupon/{coupon_id}', [CouponController::class, 'deleteCoupon']);

    //division 
    Route::get('/division-list', [LocationController::class, 'indexDivision'])->name('division-list');
    Route::post('/store-division', [LocationController::class, 'storeDivision'])->name('storeDivision');
    Route::post('/division-update', [LocationController::class, 'updateDivision'])->name('division-update');
    Route::get('/division-delete/{division_id}', [LocationController::class, 'deleteDivision']);


    //district
    Route::get('/district-list', [LocationController::class, 'districtIndex'])->name('district-list');
    Route::post('/store-district',  [LocationController::class, 'storeDistrict'])->name('storeDistrict');
    Route::get('/district-delete/{district_id}', [LocationController::class, 'deleteDistrict']);


    //thana 
    Route::get('/thana-list', [LocationController::class, 'thanaIndex'])->name('thana-list');
    Route::post('/division-by-district',  [LocationController::class, 'divisionByDistrict']);
    Route::post('/store-thana',  [LocationController::class, 'storeThana'])->name('storeThana');
    Route::post('/thana-update',  [LocationController::class, 'updateThana'])->name('thana-update');

    //order pending
    Route::get('/pending-order', [OrderController_::class, 'index'])->name('pending-order');
    Route::get('/order-items/{order_id}', [OrderController_::class, 'orderItems']);
    //order cancel
    Route::get('/cencel-order', [OrderController_::class, 'cancelOrderlist'])->name('cancelOrderlist');
    Route::get('/cancel-order/{order_id}', [OrderController_::class, 'cancelOrder']);
    //order confirm
    Route::get('/confirm-order/{order_id}', [OrderController_::class, 'confirmOrder']);
    Route::get('/confirm-order', [OrderController_::class, 'confirmOrderList'])->name('confirm-order');
    //order processing
    Route::get('/process-order/{order_id}', [OrderController_::class, 'processingOrder']);
    Route::get('/processing-order', [OrderController_::class, 'processingOrderList'])->name('processing-order');
    //order picked
    Route::get('/picked-order/{order_id}', [OrderController_::class, 'pickedOrder']);
    Route::get('/picked-order', [OrderController_::class, 'pickedOrderList'])->name('picked-order');
    //order shipped
    Route::get('/shipped-order/{order_id}', [OrderController_::class, 'shippedOrder']);
    Route::get('/shipped-order', [OrderController_::class, 'shippedOrderList'])->name('shipped-order');
    //order delivery
    Route::get('/delivered-order/{order_id}', [OrderController_::class, 'deliveredOrder']);
    Route::get('/delivered-order', [OrderController_::class, 'deliveredOrderList'])->name('deliverd-order');

    //delete order
    // Route::get('delete', [OrderController_::class, 'delete']);
    Route::get('d', [OrderController_::class, 'd']);

    // ************************************frontend auth guard**************************************
    Route::post('/add-to-wishlist', [WishlistController::class, 'addToWishlist']); 
    Route::get('/wishlist',  [WishlistController::class, 'indexWishlist']);
    // wishlist data ajax 
    Route::get('/wishlist-data',  [WishlistController::class, 'wishlistData']);
    // remove wishlist ajax 
    Route::post('/remove-wishlist',  [WishlistController::class, 'removeWishlist']);
});


// +++++++++++++++++++++++++++++++++++++++++ backend routes start ++++++++++++++++++++++++++++++++++++++++++++++++