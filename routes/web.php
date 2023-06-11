<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [AuthController::class, 'page']);
Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');

    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
});
Route::group(['middleware'=>'auth'],function(){
    Route::get('redirect',[AuthController::class,'redirect'])->name('redirect');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});
Route::controller(App\Http\Controllers\AdminController::class)->group(function(){
    //Category Routes
    Route::get('/view_category', 'view_category');
    Route::post('/add_category', 'add_category');
    Route::get('/delete_category/{id}', 'delete_category');
    //Product Routes
    Route::get('/view_product', 'view_product');
    Route::post('/add_product', 'add_product');
});
Route::controller(App\Http\Controllers\ProductController::class)->group(function(){
    //MenProduct Routes
    Route::get('/products_men/{category_id}', 'products_men');
    //Route::get('/products_delete/{id}', 'products_delete');
    //Route::get('/update_product/{id}', 'update_product');
    //WomenProduct Routes
    Route::get('/products_women/{category_id}', 'products_women');
    //ChildrenProduct Routes
    Route::get('/products_children/{category_id}', 'products_children');
    //SportsProduct Routes
    Route::get('/products_sport/{category_id}', 'products_sport');
    //SpecialProduct Routes
    Route::get('/products_special/{category_id}', 'products_special');
});


