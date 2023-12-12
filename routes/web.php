<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyProfileController;



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
    return view('welcome');
});

Route::resource('/category', CategoryController::class);
Route::resource('/product', ProductController::class);
Route::resource('/profilecompany', CompanyProfileController::class);

Route::get('/Dashboard', function () {
    return view('frontend.index');
});
Route::get('/about_us', function () {
    return view('frontend.aboutus');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/product_us', function () {
    return view('frontend.product');
});
Route::get('/product_detail', function () {
    return view('frontend.productdetail');
});
Route::get('/tambah_product', function () {
    return view('product.tambah');
});

