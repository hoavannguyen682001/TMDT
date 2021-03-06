<?php

use App\Http\Controllers\Front;
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

Route::get('/',[Front\HomeController::class,'index']);

Route::prefix('shop')->group(function(){
    Route::get('/product/{id}',[Front\ShopController::class,'show']);

    Route::get('/',[Front\ShopController::class,'index']);
    Route::get('/{categoryName}',[Front\ShopController::class, 'category']);
});

Route::get('/blog',[Front\BlogController::class,'index']);
Route::get('/blog/blogdetail/{id}',[Front\BlogController::class,'blogdetail']);
Route::get('/contact',[Front\ContactController::class,'contact']);
Route::get('/login',[Front\LoginController::class,'login']);
Route::get('/checkout/index',[Front\CheckOutController::class,'index']);


Route::prefix('cart')->group(function(){
    Route::get('add/{id}', [Front\CartController::class, 'add']);
});
