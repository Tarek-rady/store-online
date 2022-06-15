<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatigoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeCatigoryController;












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


Route::get('admin', function () {
    return view('admin.dashboard');
});


Route::prefix('admin')->middleware(['auth'])->group(function () {

    // admin
    Route::get('/', function () {
            return view('admin.dashboard');
    });
    // Catigories
    Route::resource('catigories', CatigoryController::class);

    // products
    Route::resource('products', ProductController::class);

    // slider
    Route::resource('sliders', HomeSliderController::class);

    // orders
    Route::resource('orders', OrdersController::class);
    Route::get('orderDetails/{id}' , [OrdersController::class , 'getorderDetails']);

    // contact
    Route::resource('contact-us', ContactController::class);

    // setting
    Route::resource('setting', SettingController::class);

    // homecatigory
    Route::resource('home-catigories', HomeCatigoryController::class);






});








