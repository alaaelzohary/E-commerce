<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Admins\RolesController;
use App\Http\Controllers\Admins\UsersController;
use App\Http\Controllers\Admins\ProductsController;
use App\Http\Controllers\Admins\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/like', function () {
    return view('like');
});
Route::get('/contact', function () {
    return view('contactus');
});
Route::get('/sales', function () {
    return view('sales');
});




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        Route::middleware(['auth:sanctum', 'IsAdmin'])->prefix('admin')->group(function () {
            
            Route::get('/', [DashboardController::class, 'index']);
            Route::resource('/users', UsersController::class);
            Route::resource('/roles', RolesController::class);
            Route::resource('/products', ProductsController::class);
            Route::get('/catagory', [AdminController::class, 'index']);
            Route::post('/add_catagory', [AdminController::class, 'add_category']);
            Route::get('/delete_catagory/{id}', [AdminController::class, 'delete_category']);
              
           
           
            
        
        });
    }
);



Route::get('/product',[ProductsController::class, 'showProduct']);
Auth::routes(['verify'=>true]);
Route::get('/likeDelete',[ProductsController::class, 'likeDelete']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Make Auth with social media (facebook) 
    Route::get('/login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facbook');
    Route::get('/login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);
    Route::get('/search', [SearchController::class, 'search'])->name('web.search');
    Route::get('/viewsearch/{id}', [SearchController::class, 'viewsearch'])->name('web.search');
    Route::post('/addcart/{id}', [ProductsController::class, 'addcart'])->name('products.showProducts');

