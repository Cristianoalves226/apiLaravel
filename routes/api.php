<?php

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

//Route::get('hellow/{name}', function ($name) {
//    return "hellow world  ". $name;
//});
//
//Route::post("hello-post/{name}",[\App\Http\Controllers\HelloWorldController::class,'hello']);

Route::get("bands",[\App\Http\Controllers\BandsController::class,'getAll']);
Route::get("bands/{id}",[\App\Http\Controllers\BandsController::class,'getById']);
Route::get("bands/gender/{gender}",[\App\Http\Controllers\BandsController::class,'genderByGender']);
Route::post("bands/store",[\App\Http\Controllers\BandsController::class,'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
