<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShopComponent;;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CatigoryComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\ContactUsComponent;







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


// ->middleware(['auth'])
// home
Route::get('/' , HomeComponent::class);

// shop
Route::get('shop' , ShopComponent::class)->name('shop.show');

// cart
Route::get('cart' , CartComponent::class)->name('cart.products');

// checkout
Route::get('checkout' , CheckoutComponent::class)->name('checkout');

// details
Route::get('products-{slug}' , DetailsComponent::class)->name('details.products');

// catigory
Route::get('catigries-{slug}' , CatigoryComponent::class)->name('catigries.products');

// wishlist
Route::get('wishlist' , WishlistComponent::class)->name('wishlist.products');

// thankyou
Route::get('thankyou' , ThankyouComponent::class)->name('thankyou.show');

// contact-us
Route::get('contact-us' , ContactUsComponent::class)->name('contact-us.show');























// Route::middleware(['auth', 'verified'])->get('/', function () {
//     return view('dashboard');
// })->name('dashboard');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



