<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CagegoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Blog\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProductControllerFrontend;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\WishlistController;

Auth::routes();
// +++++++++++++++++++++++++++++++++++++++++ frontend routes start ++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('/',[HomeController::class, 'index']);
Route::get('/product-details',[HomeController::class, 'productDetails'])->name('productDetails');
Route::get('/shopping',[HomeController::class, 'shopping'])->name('shopping');
Route::get('/location',[HomeController::class, 'location'])->name('location');
Route::get('/show-{cat_slug}', [HomeController::class, 'catWiseProduct']);
Route::get('/_{product_slug}', [HomeController::class, 'productShow']);
// product view ajax
Route::post('product-view', [CartController::class, 'productView']);
// product add to cart ajax
Route::post('add-to-cart', [CartController::class, 'addToCart']);
// product mini cart ajax
Route::get('product-minicart', [CartController::class, 'productMinicart']);
// product remove from cart ajax
Route::get('remove-cart', [CartController::class, 'productRemove']);
//cart view ||cart index
Route::get('cart', [CartController::class, 'cartIndex']);
// cart page ajax 
Route::get('cart-page', [CartController::class, 'cartPage']);
// incrase cart quantity 
Route::get('increase-cart-qty', [CartController::class, 'increaseCartQty']);
// +++++++++++++++++++++++++++++++++++++++++ frontend routes start ++++++++++++++++++++++++++++++++++++++++++++++++



// +++++++++++++++++++++++++++++++++++++++++ frontend routes start ++++++++++++++++++++++++++++++++++++++++++++++++

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
    Route::get('blogs-list', [BlogController::class, 'indexBlog'])->name('blogs-list');
    Route::get('add-blog', [BlogController::class, 'addBlog'])->name('addBlog');
    Route::post('/store-blog', [BlogController::class, 'storeBlog'])->name('storeBlog');


    // ************************************frontend**************************************
    Route::post('add-to-wishlist', [WishlistController::class, 'addToWishlist']); 
    
});
// +++++++++++++++++++++++++++++++++++++++++ frontend routes start ++++++++++++++++++++++++++++++++++++++++++++++++

