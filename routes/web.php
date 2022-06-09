<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\bannersController;
use App\Http\Controllers\subCategoriesController;
use App\Http\Controllers\brandsController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\ordersController;

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
//categories
Route::resource('/categories', categoriesController::class);
//subcategories
Route::resource('/sub-categories', subCategoriesController::class);
//brands
Route::resource('/brands', brandsController::class);
//banners
Route::resource('/banners', bannersController::class);
//orders
Route::resource('/orders', ordersController::class);
//coustomers

Route::get('/customers',[customerController::class,'index']);