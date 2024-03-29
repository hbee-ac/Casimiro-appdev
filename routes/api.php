<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get method
Route::get('/greeting', function (){
    return 'hello azhelle';
});

Route::get('/user', function (Request $request) {
    return $request->name . '-' . $request->email;
});

//post method
Route::post('/post', function (){
    return 'this is a post method';
});

Route::put('/put/{id}', function (){
    return 'this is a put method';
});

Route::patch('/patch/{id}', function (){
    return 'this is a patch method';
});

Route::delete('/delete/{id}', function (){
    return 'this si a delete method';
});