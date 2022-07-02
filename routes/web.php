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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/cat',[CategoryController::class, 'index']);
Route::post('/create',[CategoryController::class, 'store'])->name('category.insert');
Route::get('/show',[CategoryController::class, 'show']);
Route::get('/cat/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');
Route::get('/editcat/{id}',[CategoryController::class,'edit']);
Route::post('/update_cat',[CategoryController::class,'update'])->name('category.update');

Route::get('/createsub',[SubcategoryController::class, 'index']);
Route::post('/subcategory',[SubcategoryController::class, 'create'])->name('subcategory.insert');
Route::get('/show',[SubcategoryController::class, 'show']);
Route::get('/createsub/destroy/{id}',[SubcategoryController::class,'destroy'])->name('subcategory.destroy');
Route::get('/editsubcat/{id}',[SubcategoryController::class,'edit']);
Route::post('/update_subcat',[SubcategoryController::class,'update'])->name('subcategory.update');

Route::get('/add_products',[ProductController::class, 'index']);
Route::post('/products_view',[ProductController::class, 'store'])->name('product.insert');
Route::get('/mng_products',[ProductController::class, 'show']);
Route::get('/mng_products/destroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/editproduct/{id}',[ProductController::class,'edit']);
Route::post('/update_product',[ProductController::class,'update'])->name('product.update');


// Route::get('/admin/addblog',[BlogController::class, 'index'])->name('addblog');

// Route::get('/admin/mng_blog',[BlogController::class, 'show'])->name('manageblog');

// Route::get('/admin/subcategory/edit/1',[SubcategoryController::class, 'edit'])->name('edit_subcategory');

// Route::get('/admin/category/edit/1',[CategoryController::class, 'edit'])->name('edit_category');

// Route::get('/admin/edit_products/edit/1',[ProductController::class, 'edit'])->name('edit_product');

// Route::get('/admin/edit_blog/1',[BlogController::class, 'edit'])->name('edit_blog');