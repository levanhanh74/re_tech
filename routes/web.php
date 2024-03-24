<?php

use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\CommentAdminController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\CartClientController;
use App\Http\Controllers\Client\HomeClientController;
use App\Http\Controllers\Client\PaymentCartClientController;
use App\Http\Controllers\Client\ProductClientController;
use App\Http\Controllers\LoginController;
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
Route::get('/', [LoginController::class, 'index'])->name('home');
Route::get('/register', [LoginController::class, 'signUp'])->name('register');
Route::post('/register', [LoginController::class, 'createSignup'])->name('register');

Route::get('/login', [LoginController::class, 'createLogin'])->name('login');
Route::post('/login', [LoginController::class, 'postLogin'])->name('login');
Route::get('/logout', [LoginController::class, 'logOut'])->name('logOut');

// // Admin
Route::group(['prefix' => 'admin', ['middleware' => 'AuthAdmin']], function () {
    Route::get('/', [HomeAdminController::class, 'index'])->name('admin.home');
    Route::get('/cart', [CartAdminController::class, 'index'])->name('admin.cart');

    Route::prefix('category')->middleware('AuthAdmin')->group(function () {
        Route::get('/', [CategoryAdminController::class, 'index'])->name('admin.category.home');
        Route::get('/edit/{id?}', [CategoryAdminController::class, 'edit'])->name('admin.category.edit');
        Route::post('/update', [CategoryAdminController::class, 'update'])->name('admin.category.update');
        Route::post('/add', [CategoryAdminController::class, 'create'])->name('admin.category.create');
        Route::post('/delete/{id?}', [CategoryAdminController::class, 'destroy'])->name('admin.category.delete');
    });

    Route::prefix('product')->middleware('AuthAdmin')->group(function () {
        Route::get('/', [ProductAdminController::class, 'index'])->name('admin.product.home');
        Route::get('/add', [ProductAdminController::class, 'create'])->name('admin.product.add');
        Route::post('/add', [ProductAdminController::class, 'stores'])->name('admin.product.post');
        Route::post('/delete/{id?}', [ProductAdminController::class, 'destroy'])->name('admin.product.delete');
        Route::get('/edit/{id?}', [ProductAdminController::class, 'edit'])->name('admin.product.edit');
        Route::post('/update/{id?}', [ProductAdminController::class, 'update'])->name('admin.product.update');
    });

    Route::prefix('comment')->middleware('AuthAdmin')->group(function () {
        Route::get('/', [CommentAdminController::class, 'index'])->name('admin.comment.home');
        Route::post('/delete/{id?}', [CommentAdminController::class, 'destroy'])->name('admin.comment.delete');
        Route::get('/edit/{id?}', [CommentAdminController::class, 'edit'])->name('admin.comment.edit');
        Route::post('/update', [CommentAdminController::class, 'update'])->name('admin.comment.update');
    });
    Route::prefix('managerUser')->middleware('AuthAdmin')->group(function () {

        Route::get('/', [UserAdminController::class, 'index'])->name('admin.user.home');
        Route::post('/delete/{id?}', [UserAdminController::class, 'destroy'])->name('admin.user.delete');
        Route::get('/edit/{id?}', [UserAdminController::class, 'edit'])->name('admin.user.edit');
        Route::post('/update', [UserAdminController::class, 'update'])->name('admin.user.update');
    });
});


// Client
Route::group(['prefix' => 'client', ['middleware' => 'AuthClient']], function () {

    Route::get('/', [ProductClientController::class, 'index'])->name('client.home');
    Route::get('/product/{id?}', [ProductClientController::class, 'index'])->name('client.home');
    Route::get('/productDetail/{id?}', [ProductClientController::class, 'show'])->name('client.productDetail');

    Route::post('/comment', [ProductClientController::class, 'postComment'])->name('client.postComment');

    Route::post('/search{key?}', [ProductClientController::class, 'findProduct'])->name('client.search');

    Route::get('/category/{id?}', [ProductClientController::class, 'category'])->name('client.categoryJoin');

    // AddToCart outside home
    Route::post('cart/{id?}', [CartClientController::class, 'create'])->name('client.cartID');

    // AddToCart
    Route::get('cart', [CartClientController::class, 'index'])->name('client.cart');
    Route::post('addCart/{id?}', [CartClientController::class, 'createCart'])->name('client.addCart');
    Route::get('deleteCart/{id?}', [CartClientController::class, 'destroy'])->name('client.deleteCart');
    Route::get('deleteAll', [CartClientController::class, 'destroyAll'])->name('client.deleteAll');
    Route::post('editCart/{id?}', [CartClientController::class, 'update'])->name('client.updateCart');

    // payment 
    Route::get('profile', [PaymentCartClientController::class, 'index'])->name('client.profile');
    Route::post('checkOut', [PaymentCartClientController::class, 'paymentVnPay'])->name('client.paymentVnPay');

    Route::get('statusOrder', [CartClientController::class, 'indexStatusOrders'])->name('client.orderStatus');
});
