<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;

Route::get('/', function(){
    return view('landing_page');
});
Route::get('/product', [HomeController::class, 'home']);

Route::get('/product-detail/{id}', [ProductController::class, 'detail_show']);

Route::get('/product-search/{product?}', [ProductController::class, 'search']);


Route::get('/about', function () {
    return view('product/about');
});

Route::get('/service', function () {
    return view('product/service');
});


Route::get('/contact', function () {
    return view('product/contact');
});


Route::get('/partner', function () {
    return view('product/partner');
});







// Admin
Route::get('/admin/login', function(){
    return view("auth/admin_login");
});

Route::get('/admin/register', function(){
    return view("auth/admin_register");
});
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/register', [AdminController::class, 'register']);


//Logout Route
Route::get('/admin/logout', [AdminController::class, 'logout']);


//admin

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    
    // admin user route
    Route::get('/admin-user', [AdminController::class, 'user']);

    // admin cart route

    Route::get('/admin/category', [CategoryController::class, 'index']);
    Route::post('/admin/category', [CategoryController::class, 'create']);
    Route::get('/delete-category/{id}', [CategoryController::class, 'destroy']);

    // admin product route
    Route::get('/admin/product', [ProductController::class, 'index']);
    Route::post('/admin/product', [ProductController::class, 'create']);
    Route::get('/delete-product/{id}', [ProductController::class, 'destroy']);

    // admin order route
    Route::get('/admin/order', [OrderController::class, 'index']);
    Route::get('/admin/order-detail/{id}', [OrderController::class, 'detail']);

    Route::get('/completion/{id}', [OrderController::class, 'complete']);
    Route::get('/completionP/{id}', [OrderController::class, 'completeP']);

    // admin category route
    Route::get('/admin/cart', [CartController::class, 'index']);

    Route::get('/admin/product-detail', [ProductController::class, 'detail']);

    Route::get('/admin/banner', [BannerController::class, 'create']);

    Route::post('/admin/banner', [BannerController::class, 'load_banner']);
    
});



