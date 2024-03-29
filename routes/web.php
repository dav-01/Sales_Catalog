<?php

use App\Http\Controllers\OrderController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

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
    if (Auth::user()) {
        return view('products.index');
    } else {
        return view('auth/login');
    }
});

Auth::routes();

// Route::group(['middleware' => 'admin'], function () {
   // Route::get('/product/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin');
// });

//Route::get('/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

//Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product');


Route::resource('product', ProductController::class);


Route::resource('order', OrderController::class);