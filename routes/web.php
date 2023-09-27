<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminUserController;

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

// home controller
Route::get('/', [HomeController::class , 'index'])->name("home.index");
Route::get('/about', [HomeController::class , 'about'])->name("home.about");
Route::get('/contact', [HomeController::class , 'contact'])->name("home.contact");
Route::get('/orders', [HomeController::class , 'orders'])->name("home.orders");

// user route
Route::get('/profile', [UserController::class , 'index'])->name("user.index");
// product route
Route::get('/menu', [ProductController::class , 'index'])->name("product.index");
Route::get('/show/{id}', [ProductController::class , 'show'])->name("product.show");

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
Route::get('/cart/delete/{id}', 'App\Http\Controllers\CartController@delete')->name("cart.delete");
Route::patch('/cart/update/{id}', 'App\Http\Controllers\CartController@update')->name("cart.update");
Route::middleware('auth')->group(function () {
    Route::post('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");
    Route::get('/cart/checkout', 'App\Http\Controllers\CartController@checkout')->name("cart.checkout");
    Route::get('/myorders/orders', 'App\Http\Controllers\MyAccountController@orders')->name("myorders.orders");
});


Route::middleware('admin')->group(function () {
    // admin
    // admin category
    Route::get('/admin', [AdminHomeController::class , 'index'])->name("admin.home.index");
    Route::get('/admin/category', [AdminCategoryController::class , 'index'])->name("admin.category.index");
    Route::post('/admin/category/store', [AdminCategoryController::class , 'store'])->name("admin.category.store");
    Route::delete('/admin/category/delete/{id}', [AdminCategoryController::class , 'delete'])
    ->name("admin.category.delete");
    Route::get('/admin/category/{id}/edit', [AdminCategoryController::class , 'edit'])->name("admin.category.edit");
    Route::put('/admin/category/{id}/update', [AdminCategoryController::class , 'update'])
    ->name("admin.category.update");



    // admin product

    Route::get('/admin/product', [AdminProductController::class , 'index'])->name("admin.product.index");
    Route::post('/admin/products/store', 'App\Http\Controllers\admin\AdminProductController@store')
    ->name("admin.product.store");
    Route::delete('/products/delete/{id}', 'App\Http\Controllers\admin\AdminProductController@delete')
    ->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\admin\AdminProductController@edit')
    ->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')
    ->name("admin.product.update");


    Route::get('/admin/order', [AdminOrderController::class , 'index'])->name("admin.order.index");
    Route::put('/admin/order/{id}/editStatus', [AdminOrderController::class , 'editStatus'])
    ->name("admin.order.editStatus");


    Route::get('/admin/user', [AdminUserController::class , 'index'])->name("admin.user.index");
    Route::delete('/admin/user/delete/{id}', [AdminUserController::class , 'delete'])->name("admin.user.delete");
    Route::put('/admin/user/{id}/editRole', [AdminUserController::class , 'editRole'])
    ->name("admin.order.editRole");
    // end admin
});
Auth::routes();
