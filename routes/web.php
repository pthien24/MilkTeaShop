<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\AdminCategoryController;
=======
>>>>>>> 6c106f6d7bc73b163005cafb3b6cc7299d3ec430

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


Route::get('/admin', [AdminHomeController::class , 'index'])->name("admin.home.index");
<<<<<<< HEAD
Route::get('/admin/product', [AdminHomeController::class , 'index'])->name("admin.product.index");



Route::get('/admin/category', [AdminCategoryController::class , 'index'])->name("admin.category.index");



Route::post('/admin/category/store', [AdminCategoryController::class , 'store'])->name("admin.category.store");
Route::delete('/admin/category/delete/{id}', [AdminCategoryController::class , 'delete'])
->name("admin.category.delete");
Route::get('/admin/category/{id}/edit', [AdminCategoryController::class , 'edit'])->name("admin.category.edit");
=======
>>>>>>> 6c106f6d7bc73b163005cafb3b6cc7299d3ec430
