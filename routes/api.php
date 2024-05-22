<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BirdApiController;
use App\Http\Controllers\BlogApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//blog api
Route::get('/blogs',[BlogApiController::class,'read']);
Route::get('/blog/{id}',[BlogApiController::class,'edit']);
Route::post('/blog/create',[BlogApiController::class,'create']);
Route::post('/blog/update/{id}',[BlogApiController::class,'update']);
Route::delete('/blog/delete/{id}',[BlogApiController::class,'delete']);

//birds api
/*
 |=> TO SAVE JSON DATA TO DATABASE USE THIS CODE <=|
 |=> YOU NEED TO CHANGE saveJson METHOD PRIVATE TO PUBLIC IN BirdApiController <=|
 Route::get('/birds/save',[BirdApiController::class,'saveJson']);
*/

Route::get('/birds',[BirdApiController::class,'read']);
Route::get('/bird/{id}',[BirdApiController::class,'editBird']);
Route::get('/birds/name',[BirdApiController::class,'birdsName']);


