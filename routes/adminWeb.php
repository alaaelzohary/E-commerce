<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admins\RolesController;
use App\Http\Controllers\Admins\UsersController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Admins\DashboardController;
use App\Http\Controllers\Auth\LoginController;
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






// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
//     ],
//     function () {
//         Route::middleware(['auth:sanctum', 'IsAdmin'])->prefix('admin')->group(function () {
            
//             Route::get('/', [DashboardController::class, 'index']);
//             Route::resource('/users', UsersController::class);
//             Route::resource('/roles', RolesController::class);
//             Route::resource('/products', ProductsController::class);
//             Route::get('/view_catagory', [AdminController::class, 'view_category']);
//             Route::post('/add_catagory', [AdminController::class, 'add_category']);
//             Route::get('/delete_catagory/{id}', [AdminController::class, 'delete_category']);
              
           
           
            
        
//         });
//     }
// );
