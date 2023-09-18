<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class , 'index'])->name("home.index");
// phpcs:ignore error
Route::get('/about', [HomeController::class , 'about'])->name("home.about");
Route::get('/contact', [HomeController::class , 'contact'])->name("home.contact");
Route::get('/menu', [HomeController::class , 'menu'])->name("home.menu");
Route::get('/orders', [HomeController::class , 'orders'])->name("home.orders");
Route::get('/login', [HomeController::class , 'login'])->name("home.login");
Route::get('/register', [HomeController::class , 'register'])->name("home.register");

Route::get('/admin', [AdminHomeController::class , 'index'])->name("admin.home.index");

Route::get('/admin/product', [AdminHomeController::class , 'index'])->name("admin.product.index");




Route::get('/admin/category', [AdminCategoryController::class , 'index'])->name("admin.category.index");
Route::post('/admin/category/store', [AdminCategoryController::class , 'store'])->name("admin.category.store");
Route::delete('/admin/category/delete/{id}', [AdminCategoryController::class , 'delete'])
->name("admin.category.delete");
Route::get('/admin/category/{id}/edit', [AdminCategoryController::class , 'edit'])->name("admin.category.edit");
Route::put('/admin/category/{id}/update', [AdminCategoryController::class , 'update'])->name("admin.category.update");


Route::get('/admin', 'App\Http\Controllers\admin\AdminHomeController@index')
->name("admin.home.index");
Route::get('/admin/products', 'App\Http\Controllers\admin\AdminProductController@index')
->name("admin.product.index");
Route::post('/admin/products/store', 'App\Http\Controllers\admin\AdminProductController@store')
->name("admin.product.store");
Route::delete('/products/delete/{id}', 'App\Http\Controllers\admin\AdminProductController@delete')
->name("admin.product.delete");
Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\admin\AdminProductController@edit')
->name("admin.product.edit");
Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')
->name("admin.product.update");

