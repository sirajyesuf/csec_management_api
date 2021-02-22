<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Bot\UserController;

Route::prefix('bot/12345')->group(function(){

    Route::prefix('/users')->group(function(){

    	Route::post('/store',[UserController::class,'store']);
        Route::get('/{telegram_user_id}',[UserController::class,'show']);
        Route::post('/punishe',[UserController::class,'punishe']);
        Route::get('/search/user',[UserController::class,'search']);
        

    });














});
