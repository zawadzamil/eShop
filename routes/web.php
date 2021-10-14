<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('userDashboard');
});
Route::get('/shop', 'App\Http\Controllers\DashboardController@shop');

/* ----Product Routes---- */
Route::get('/add_product', 'App\Http\Controllers\DashboardController@addProduct');
Route::post('/add_product_to_database', 'App\Http\Controllers\ProductController@store');
Route::get('/all_products', 'App\Http\Controllers\DashboardController@allProducts');
Route::get('delete/{id}', 'App\Http\Controllers\ProductController@destroy');
Route::post('updateProduct/{id}', 'App\Http\Controllers\ProductController@update');
Route::get('admin/editProduct/{id}', 'App\Http\Controllers\DashboardController@find')->name('editProduct');
Route::get('show_single_product/{id}', 'App\Http\Controllers\ProductController@show')->name('showProduct');
Route::get('admin/orders', 'App\Http\Controllers\DashboardController@showOrders')->name('orders');


Route::get('admin/catagorywiseProduct/{id}', 'App\Http\Controllers\ProductController@findCatagorywise')->name('catagorywiseProduct');


/* ----Brand Routes---- */
Route::get('brand/create', 'App\Http\Controllers\DashboardController@createBrand')->name('create_brand');
Route::post('brand/add_brand_to_db', 'App\Http\Controllers\BrandController@store')->name('add_brand_to_db');
Route::get('brand/show', 'App\Http\Controllers\DashboardController@showBrand')->name('showBrands');


Route::get('users/users', 'App\Http\Controllers\DashboardController@showUser')->name('showUser');


Route::post('addToCart', 'App\Http\Controllers\CartController@store')->name('addToCart');
Route::get('viewCart', 'App\Http\Controllers\CartController@show')->name('viewCart');
Route::post('updateCart/{id}', 'App\Http\Controllers\CartController@update');
Route::get('delete_cart_item/{id}', 'App\Http\Controllers\CartController@destroy')->name('delete_cart_item');


Route::get('checkout/{total}', 'App\Http\Controllers\CheckoutController@checkout');
Route::get('checkoutCash', 'App\Http\Controllers\CheckoutController@cashonDelivery');
Route::post('checkout', 'App\Http\Controllers\CheckoutController@afterpayment')->name('checkout.credit-card');
Route::post('cashOrder', 'App\Http\Controllers\CheckoutController@cashOrederAdd');


//auth route for both
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

require __DIR__ . '/auth.php';
