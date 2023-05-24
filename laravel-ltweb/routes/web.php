<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");


Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name("cart.delete");
Route::get('/cart/deleteItem/{id}', 'App\Http\Controllers\CartController@deleteItem')->name("cart.deleteItem");

Route::delete(
    'cart/deleteItem/{id}',
    'App\Http\Controllers\CartController@deleteItem'
)
    ->name("cart.index.deleteItem");

Route::post('/cart/add{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");

Route::get('/contact', [ContactController::class, 'show'])->name('contacts.show');
Route::post('/storemessage', [ContactController::class, 'storemessage'])->name('storemessage');


Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");
    Route::get('/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");
});

Route::middleware('admin')->group(function () {
    Route::get('/user', 'App\Http\Controllers\UserController@index')->name("user.index");
    Route::get('/user/{id}', 'App\Http\Controllers\UserController@show')->name("user.show");

    Route::get(
        '/admin',
        'App\Http\Controllers\Admin\AdminHomeController@index'
    )
        ->name("admin.home.index");


    Route::get(
        '/admin/products',
        'App\Http\Controllers\Admin\AdminProductController@index'
    )
        ->name("admin.product.index");

    Route::post(
        "/admin/products/store",
        "App\Http\Controllers\Admin\AdminProductController@store"
    )
        ->name("admin.product.store");

    Route::delete(
        '/admin/products/{id}/delete',
        'App\Http\Controllers\Admin\AdminProductController@delete'
    )
        ->name("admin.product.delete");


    Route::get(
        '/admin/products/{id}/edit',
        'App\Http\Controllers\Admin\AdminProductController@edit'
    )
        ->name("admin.product.edit");
    Route::put(
        '/admin/products/{id}/update',
        'App\Http\Controllers\Admin\AdminProductController@update'
    )
        ->name("admin.product.update");

    //message
    Route::get(
        '/admin/message',
        'App\Http\Controllers\Admin\MessageController@index'
    )
        ->name("admin.message.index");
    Route::post(
        "/admin/message/store",
        "App\Http\Controllers\Admin\MessageController@store"
    )
        ->name("admin.message.store");

    Route::delete(
        '/admin/message/{id}/delete',
        'App\Http\Controllers\Admin\MessageController@delete'
    )
        ->name("admin.message.delete");


    Route::put(
        '/admin/message/{id}/update',
        'App\Http\Controllers\Admin\MessageController@update'
    )
        ->name("admin.message.update");
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
