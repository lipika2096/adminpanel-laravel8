<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;

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


Route::get('/admin', function () {
    return view('login');
});

Route::get('/admin/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin/dashboard/addcategory',[CategoryController::class, 'index'])->name('addcategory');

Route::get('/admin/dashboard/addsubcategory',[SubcategoryController::class, 'index'])->name('addsubcategory');

Route::get('/admin/dashboard/addproduct',[ProductController::class, 'index'])->name('addproduct');

Route::get('/admin/dashboard/addblog',[BlogController::class, 'index'])->name('addblog');