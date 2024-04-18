<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;


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

Route::get('/login',function(){
    return view("login");
});

Route::post("/login",[userController::class,'index']);
Route::get("/home",[productController::class,'home']);
Route::get("/details/{id}",[productController::class,'details']);
Route::get("/search",[productController::class,'search']);
Route::post("/add_to_cart",[productController::class,'cart']);