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
//Category Routes
Route::get('/view_category', [AdminController::class, 'view_category']);
Route::post('/add_category', [AdminController::class, 'add_category']);
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);
//Product Routes
Route::get('/view_product', [AdminController::class, 'view_product']);
Route::post('/add_product', [AdminController::class, 'add_product']);
//MenProduct Routes
Route::get('/products_men/{category_id}', [ProductController::class, 'products_men']);
Route::get('/men_delete/{id}', [ProductController::class, 'men_delete']);
//WomenProduct Routes
Route::get('/products_women/{category_id}', [ProductController::class, 'products_women']);
Route::get('/women_delete/{id}', [ProductController::class, 'women_delete']);
//ChildrenProduct Routes
Route::get('/products_children/{category_id}', [ProductController::class, 'products_children']);
Route::get('/child_delete/{id}', [ProductController::class, 'child_delete']);
//SportsProduct Routes
Route::get('/products_sport/{category_id}', [ProductController::class, 'products_sport']);
Route::get('/sport_delete/{id}', [ProductController::class, 'sport_delete']);
//SpecialProduct Routes
Route::get('/products_special/{category_id}', [ProductController::class, 'products_special']);
Route::get('/special_delete/{id}', [ProductController::class, 'special_delete']);