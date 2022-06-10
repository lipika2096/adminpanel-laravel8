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

Route::get('admin/cat',[CategoryController::class, 'index']);
Route::post('admin/store',[CategoryController::class, 'store'])->name('category.insert');
Route::get('admin/show',[CategoryController::class, 'show']);
Route::get('admin/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

Route::get('admin/subcategory',[SubcategoryController::class, 'index']);
Route::post('admin/store',[SubcategoryController::class, 'create'])->name('subcategory.insert');
Route::get('admin/show',[SubcategoryController::class, 'show']);
Route::get('admin/destroy/{id}',[SubcategoryController::class,'destroy'])->name('subcategory.destroy');

// Route::get('/admin/add_products',[ProductController::class, 'index'])->name('addproduct');

// Route::get('/admin/addblog',[BlogController::class, 'index'])->name('addblog');

// Route::get('/admin/mng_products',[ProductController::class, 'show'])->name('manageproduct');

// Route::get('/admin/mng_blog',[BlogController::class, 'show'])->name('manageblog');

// Route::get('/admin/subcategory/edit/1',[SubcategoryController::class, 'edit'])->name('edit_subcategory');

// Route::get('/admin/category/edit/1',[CategoryController::class, 'edit'])->name('edit_category');

// Route::get('/admin/edit_products/edit/1',[ProductController::class, 'edit'])->name('edit_product');

// Route::get('/admin/edit_blog/1',[BlogController::class, 'edit'])->name('edit_blog');