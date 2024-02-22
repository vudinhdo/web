<?php

use App\Http\Controllers\PageController;
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
Route::get('/',[PageController::class,"IndexPage"])->name("/");
Route::prefix("/")->group(function (){
    Route::get("contact",[PageController::class,"ContactPage"])->name("contact");
    Route::get("about",[PageController::class,"AboutPage"])->name("about");
});

Route::prefix("Shop")->group(function (){

});
