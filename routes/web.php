<?php

use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\CommentAdminController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Client\CartClientController;
use App\Http\Controllers\Client\HomeClientController;
use App\Http\Controllers\Client\ProductClientController;
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
// Client
route::get('/', [HomeClientController::class, 'index'])->name('home');
route::get('/detailPrd', [ProductClientController::class, 'index'])->name('detailPrd');
route::get('/cartPrd', [CartClientController::class, 'index'])->name('cartPrd');
route::get('/statusOrder', [CartClientController::class, 'indexStatusOrders'])->name('indexStatusOrders');



// Admin
route::get('/homeAdmin', [HomeAdminController::class, 'index'])->name('homeAdmin');

route::get('/productAdmin', [ProductAdminController::class, 'index'])->name('productAdmin');
route::get('/AddProductAdmin', [ProductAdminController::class, 'create'])->name('AddProductAdmin');
route::get('/EditProductAdmin', [ProductAdminController::class, 'edit'])->name('EditProductAdmin');

route::get('/categoryAdmin', [CategoryAdminController::class, 'index'])->name('categoryAdmin');
route::get('/EditCategoryAdmin', [CategoryAdminController::class, 'edit'])->name('EditCategoryAdmin');

route::get('/commentAdmin', [CommentAdminController::class, 'index'])->name('commentAdmin');
route::get('/editCommentAdmin', [CommentAdminController::class, 'edit'])->name('editCommentAdmin');

route::get('/cartAdmin', [CartAdminController::class, 'index'])->name('cartAdmin');
route::get('/editCartAdmin', [CartAdminController::class, 'edit'])->name('editCartAdmin');
