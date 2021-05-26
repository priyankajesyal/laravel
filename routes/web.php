<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[IndexController::class,'form']);
Route::post('formdata',[IndexController::class,'forminsert']);
Route::get('getdata',[IndexController::class,'getdata']);
Route::get('edit/{id}',[IndexController::class,'edit']);
Route::post('update/{id}',[IndexController::class,'update']);
Route::get('delete/{id}',[IndexController::class,'delete']);