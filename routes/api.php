<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/data')->group(function(){
    Route::get('/buku',[BookController::class,'index']);
    Route::get('/buku/get/{id}',[BookController::class,'get_buku']);
    Route::get('/buku/available',[BookController::class,'available']);
    Route::get('/buku/rak/',[BookController::class,'get_rak']);
    Route::get('/buku/rak/{id}',[BookController::class,'rak']);
    Route::get('/buku/rak/{id}/available',[BookController::class,'get_rak_available']);
});

Route::prefix('/books')->middleware('auth:api')->group(function(){
    Route::post('/store',[BookController::class,'store']);
    Route::post('/update',[BookController::class,'update']);
});

Route::prefix('/auth')->group(function(){
    Route::post('/register',[AuthController::class,'register']);
    Route::post('/login',[AuthController::class,'login']);
    Route::post('/presensi',[AuthController::class,'callback']);
});
