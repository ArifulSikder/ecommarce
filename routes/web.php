<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CagegoryController;
use App\Http\Controllers\Backend\ContactUsCotroller;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\OrderController_;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\Role\RoleController;
use App\Http\Controllers\Backend\ShippingController;
use App\Http\Controllers\Backend\SocialController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Coupon\CouponController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProductControllerFrontend;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Location\LocationController;
use App\Http\Controllers\Frontend\SearchController;

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
//check product quantity ajax
Route::get('/check-product-qty-ajax', [CartController::class, 'checkProductQtyAjax']);
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
//live search
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
    //product shipping
    Route::get('/shipping-information', [ShippingController::class, 'shippingInformation'])->name('shippingInformation');
    Route::post('/store-shipping',  [ShippingController::class, 'storeShipping'])->name('storeShipping');
    Route::get('/shipping-info-delete/{id}', [ShippingController::class, 'shippingInfoDelete']);

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
    

    //brand
    Route::get('/brand-list', [BrandController::class, 'index'])->name('brand-list');
    Route::post('/store-brand', [BrandController::class, 'storeBrand'])->name('storeBrand');
    Route::post('/update-brand', [BrandController::class, 'updateBrand'])->name('updateBrand');
    Route::get('/delete-brand/{brand_id}', [BrandController::class, 'deleteBrand']);

    //logo
    Route::get('main-logo', [LogoController::class, 'index'])->name('main-logo');
    Route::post('store-logo', [LogoController::class, 'insertAndUpdateLogo'])->name('insertAndUpdateLogo');
    Route::get('delete-logo/{logo_id}', [LogoController::class, 'deleteLogo']);

    //contack us
    Route::get('contact-us', [ContactUsCotroller::class, 'index'])->name('contact-us');
    Route::post('update-contact', [ContactUsCotroller::class, 'updateContact'])->name('updateContact');
    
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
    //order return
    Route::get('/return-order/{order_id}', [OrderController_::class, 'returnOrder']);
    Route::get('/return-order', [OrderController_::class, 'retrunOrderList'])->name('return-order');

       //role and permission
    Route::controller(RoleController::class)->group(function () {
        //role
        Route::get('/roles', 'indexRole')->name('roles');
        Route::post('/create-role', 'createRole')->name('create_role');
        Route::post('/update-role', 'updateRole')->name('updateRole');
        Route::get('/role-permission-list/{roll_id}', 'rolePermissionList');
        //permission
        Route::get('/permissions', 'indexPermission')->name('permissions');
        Route::post('/create-permission', 'createPermission')->name('createPermission');
        Route::get('/give-permission', 'givePermission')->name('givePermission');
        Route::post('/give-permission', 'givePermissionStore')->name('givePermission');

    });
    //user controller
    Route::controller(UserController::class)->group(function () {
        //role
        Route::get('/user-list', 'indexUser')->name('userList');
        Route::get('/register-user', 'registerUser')->name('createuser');
        Route::post('/register-user', 'registerUserStore')->name('registerUser');
        Route::post('/update-user', 'updateUser')->name('updateUser');
        Route::get('/delete-user/{user_id}', 'deleteUser');

    });

    //social links
    Route::get('social-links', [SocialController::class, 'index']);
    Route::post('social-update', [SocialController::class, 'updateSocial'])->name('social-update');

    // ************************************frontend auth guard**************************************
    Route::post('/add-to-wishlist', [WishlistController::class, 'addToWishlist']); 
    Route::get('/wishlist',  [WishlistController::class, 'indexWishlist']);
    // wishlist data ajax 
    Route::get('/wishlist-data',  [WishlistController::class, 'wishlistData']);
    // remove wishlist ajax 
    Route::post('/remove-wishlist',  [WishlistController::class, 'removeWishlist']);
});


// +++++++++++++++++++++++++++++++++++++++++ backend routes start ++++++++++++++++++++++++++++++++++++++++++++++++