<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('contents.index');
});

Route::get("contact",[PageController::class,"ContactPage"])->name("contact");

Route::get("shop",[PageController::class,"ShopPage"])->name("shop");

Route::get("single",[ProductController::class,"SingleProduct"])->name("single");
