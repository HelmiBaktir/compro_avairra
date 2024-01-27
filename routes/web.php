<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SosialMediaController;
use App\Http\Controllers\DailyTaskController;
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
Route::get('/', [LandingPageController::class, 'home'])->name('landing.home');
Route::get('/products', [LandingPageController::class, 'product'])->name('landing.product');
Route::get('/products-detail/{product}', [LandingPageController::class, 'productDetail'])->name('landing.product.detail');

Route::get('/products-data/{category}', [LandingPageController::class, 'dataProduct'])->name('landing.product.data');
Route::post('/products-search', [LandingPageController::class, 'searchProduct'])->name('landing.product.search');

Route::get('/contact', [LandingPageController::class, 'contact'])->name('landing.contact');
Route::get('/about-us', [LandingPageController::class, 'aboutUs'])->name('landing.aboutUs');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('dailytasks-table-staff', [HomeController::class, 'tableDataStaff'])->name('dailytasks.table.staff');


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
    
        // Banner 
        Route::resource('banner-slider', BannerController::class);
        Route::get('banner-table', [BannerController::class, 'tableDataAdmin'])->name('banner.table.admin');

        // Daily Task
        Route::get('dailytasks-table-staff', [DailyTaskController::class, 'tableDataStaff'])->name('dailytasks.table.staff');
        Route::get('dailytasks-table', [DailyTaskController::class, 'tableDataAdmin'])->name('dailytasks.table.admin');
        Route::get('/dailytasks/create', [DailyTaskController::class, 'create'])->name('dailytask.create');
        Route::get('/dailytasks/store', [DailyTaskController::class, 'store'])->name('dailytask.store');
        Route::get('/dailytasks/index', [DailyTaskController::class, 'index'])->name('dailytask.index');
        // Route::resource('dailytasks', DailyTaskController::class);


});

