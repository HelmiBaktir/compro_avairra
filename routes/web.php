<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SosialMediaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'home'])->name('landing.home');
Route::get('/product', [LandingPageController::class, 'product'])->name('landing.product');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('landing.contact');
Route::get('/about-us', [LandingPageController::class, 'aboutUs'])->name('landing.aboutUs');

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Category
    Route::resource('categories', CategoryController::class);
    Route::get('categories-table', [CategoryController::class, 'tableDataAdmin'])->name('categories.table.admin');

    // Product
    Route::resource('products', ProductController::class);
    Route::get('products-table', [ProductController::class, 'tableDataAdmin'])->name('products.table.admin');

    // Sosial Media
    Route::resource('sosial-media', SosialMediaController::class);
    Route::get('sosial-media-table', [SosialMediaController::class, 'tableDataAdmin'])->name('sosial.media.table.admin');
    
    // Company
    Route::resource('company', CompanyController::class);
    Route::get('company-table', [CompanyController::class, 'tableDataAdmin'])->name('company.table.admin');

});
