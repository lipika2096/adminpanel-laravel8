<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/admin', function () {
    return view('login');
});

Route::get('/admin/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin/dashboard/addcategory',[AdminController::class, 'addcategory'])->name('addcategory');
