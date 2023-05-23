<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Front\WelcomeController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\grocery\CartController;
use App\Http\Controllers\Grocery\MyDashboardController;
use App\Http\Controllers\Grocery\Order_masterController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\RazorpayPaymentController;

// i didn't migrate table on review and order in table we cannot migrate or create table or datable//

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
                            */


                            //Custom//

Route::get('/admin/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

// Route::get('admin/dashboard/layout',[WelcomeController::class,'dashboard']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('master', function () {
//     return view('layouts.master');
// });

//


// Category
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create')->middleware(['auth', 'verified']);
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store')->middleware(['auth', 'verified']);
Route::get('categories', [CategoryController::class, 'index'])->name('categories')->middleware(['auth', 'verified']);
Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit')->middleware(['auth', 'verified']);
Route::post('categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update')->middleware('auth');
Route::get('categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete')->middleware('auth');


//Product
Route::get('product/create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
Route::get('products', [ProductController::class, 'index'])->name('products')->middleware('auth');
Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit')->middleware('auth');
Route::post('product/update/{id}', [ProductController::class, 'update'])->name('product.update')->middleware('auth');
Route::get('product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete')->middleware('auth');


// CMS

Route::get('cms/create', [CmsController::class, 'create'])->name('cms.create')->middleware('auth');
Route::post('cms/store', [CmsController::class, 'store'])->name('cms.store')->middleware('auth');
Route::get('cms', [CmsController::class, 'index'])->name('cms')->middleware('auth');
Route::get('cms/edit/{id}', [CmsController::class, 'edit'])->name('cms.edit')->middleware('auth');
Route::post('cms/update/{id}', [CmsController::class, 'update'])->name('cms.update')->middleware('auth');
Route::get('cms/delete/{id}', [CmsController::class, 'delete'])->name('cms.delete')->middleware('auth');


// soft delete
//order
Route::get('order/index', [OrderController::class, 'index'])->name('order.index')->middleware('auth');

//Brand
Route::get('brands/create', [BrandController::class, 'create'])->name('brands.create')->middleware('auth');
Route::post('brands/store', [BrandController::class, 'store'])->name('brands.store')->middleware('auth');
Route::get('brands', [BrandController::class, 'index'])->name('brands')->middleware('auth');
Route::get('brands/edit/{id}', [BrandController::class, 'edit'])->name('brands.edit')->middleware('auth');
Route::post('brand/update/{id}', [BrandController::class, 'update'])->name('brand.update')->middleware('auth');
Route::get('brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete')->middleware('auth');
// soft delete


// colour
Route::get('color/create', [ColorController::class, 'create'])->name('color.create')->middleware('auth');
Route::post('color/store', [ColorController::class, 'store'])->name('color.store')->middleware('auth');
Route::get('colors', [ColorController::class, 'index'])->name('colors')->middleware('auth');
Route::get('color/edit/{id}', [ColorController::class, 'edit'])->name('color.edit')->middleware('auth');
Route::post('color/update/{id}', [ColorController::class, 'update'])->name('color.update')->middleware('auth');
Route::get('color/delete/{id}', [ColorController::class, 'delete'])->name('color.delete')->middleware('auth');


// soft delete

// review (create with database)
Route::get('review/index', [ReviewController::class, 'index'])->name('review.index')->middleware('auth');
//
// e-comerce cha front page tyachat finding your perfect shoes////blade file welcome.blade.php//
Route::get('/', [WelcomeController::class, 'index'])->name('index');
//

Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/shop', [WelcomeController::class, 'shop'])->name('shop');
Route::get('/shop-single', [WelcomeController::class, 'shopsingle'])->name('shopsingle');
Route::get('/cart', [WelcomeController::class, 'cart'])->name('cart');

//  Route::get('cart/remove/{id}',[WelcomeController::class,'remove'])->name('cart.remove');

Route::get('/checkout', [WelcomeController::class, 'checkout'])->name('checkout');

 Route::post('make_order/store', [Order_masterController::class, 'LoadMakeOrder'])->name('make_order.store');

Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');
//
Route::get('/user_profile', [WelcomeController::class, 'user_profile'])->name('user_profile');
Route::post('user_profile/store', [WelcomeController::class, 'user_profile_store'])->name('user_profile.store');
Route::get('user_profile/index', [WelcomeController::class, 'user_profile_index'])->name('user_profile.index');

//Contact//
Route::post('contact/message/store', [ContactController::class, 'contact_message_store'])->name('contact.message.store');


//grocery
Route::get('wishlist', [WelcomeController::class, 'Wishlist'])->name('wishlist');

//not working
// wishlist
//work in welcom.blade.php
Route::get('add_to_wishlist/{id}', [CartController::class, 'addToWishlist'])->name('frontend.add_to_wishlist');
// Route::get('/frontend/add_to_cart/{id}/{qty}', [App\Http\Controllers\Frontend\CartController::class, 'AddToCart'])->name('frontend.add_to_cart');
Route::get('/frontend/count_wishlist', [CartController::class, 'countWishlist'])->name('frontend.countWishlist');
 Route::get('add_to_cart/{id}', [CartController::class, 'AddToCart'])->name('frontend.add_to_cart');

//  Route::get('cart/remove/{id}',[CartController::class,'remove'])->name('cart.remove');

 Route::get('frontend/viewcart_data', [CartController::class, 'getViewCartData'])->name('frontend.getViewCartData');
 Route::get('remove_to_cart/{rowid}', [CartController::class, 'RemoveToCart'])->name('frontend.remove_to_cart');
Route::get('remove_to_wishlist/{rowid}', [WelcomeController::class, 'RemoveToWishlist'])->name('frontend.remove_to_wishlist');


 Route::get('productview/{id}', [ProductController::class, 'getProductPage'])->name('frontend.productview');


//  dashboard
 Route::get('my-dashboard', [MyDashboardController::class, 'MyDashboard'])->name('frontend.my-dashboard')->middleware('auth');

 Route::get('dashboard2', [MyDashboardController::class, 'Dashboard'])->name('dashboard2')->middleware('auth');

 Route::get('my-orders', [Order_masterController::class, 'Myorders'])->name('front.frontInterface.my-orders')->middleware('auth');


Route::get('order-view/{id}', [Order_masterController::class, 'orderview'])->name('order-view')->middleware('auth');

// payment integration
// Route::controller(StripePaymentController::class)->group(function(){
//     Route::get('stripe', 'stripe');
//     Route::post('stripe', 'stripePost')->name('stripe.post');
// });
Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index']);
Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');


Route::get('/send-email', [MailController::class, 'sendEmail']);

Route::get('/emailmsg', [Order_masterController::class, 'emailmsg'])->name('emailmsg');

