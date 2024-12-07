<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[AuthController::class,'showLogIn']);
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'register']);

Route::post('logout',[AuthController::class,'logout']);


Route::middleware('authenticated')->group(function (){

    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/create-profile',[ProfileController::class,'showCreateProfile']);
    Route::post('/create-profile',[ProfileController::class,'createProfile']);

    Route::get('/profile',[ProfileController::class,'showProfile']);

});