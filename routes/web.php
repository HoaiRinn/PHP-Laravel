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
//Frontend
use App\Http\Controllers\HomeController; 
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');

//Backend
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@showDashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');

//Category Product
Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@addCategoryProduct');

Route::get('/edit-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@editCategoryProduct');
Route::get('/delete-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@deleteCategoryProduct');

Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@allCategoryProduct');

Route::get('/unactive-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@unactiveCategoryProduct');
Route::get('/active-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@activeCategoryProduct');

Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@saveCategoryProduct');
Route::post('/update-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@updateCategoryProduct');

//Product
Route::get('/add-product','App\Http\Controllers\Product@addProduct');

Route::get('/edit-product/{product_id}','App\Http\Controllers\Product@editProduct');
Route::get('/delete-product/{product_id}','App\Http\Controllers\Product@deleteProduct');

Route::get('/all-product','App\Http\Controllers\Product@allProduct');

Route::get('/unactive-product/{product_id}','App\Http\Controllers\Product@unactiveProduct');
Route::get('/active-product/{product_id}','App\Http\Controllers\Product@activeProduct');

Route::post('/save-product','App\Http\Controllers\Product@saveProduct');
Route::post('/update-product/{product_id}','App\Http\Controllers\Product@updateProduct');
