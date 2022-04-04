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
Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@allCategoryProduct');
Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@saveCategoryProduct');
