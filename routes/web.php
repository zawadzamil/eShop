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


Route::get('admin/catagorywiseProduct/{id}', 'App\Http\Controllers\ProductController@findCatagorywise')->name('catagorywiseProduct');


/* ----Brand Routes---- */
Route::get('brand/create', 'App\Http\Controllers\DashboardController@createBrand')->name('create_brand');
Route::post('brand/add_brand_to_db', 'App\Http\Controllers\BrandController@store')->name('add_brand_to_db');
Route::get('brand/show', 'App\Http\Controllers\DashboardController@showBrand')->name('showBrands');


Route::get('users/users', 'App\Http\Controllers\DashboardController@showUser')->name('showUser');


//auth route for both
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

require __DIR__ . '/auth.php';
