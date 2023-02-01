<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FromController;
use Illuminate\Support\Facades\Route;

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


route::get('/contact', [ContactController::class,'index']);
route::get('/user/{userId}/{userName}', [ContactController::class, 'users'])->where(['userId' => '[0-9]+', 'userName' => '[a-z]+']);

//Assignment task route
//create a route that accept only numbers
route::get('/numbercheck/{num}', [FromController::class, 'index'])->where(['num' => '[0-9]+']);

//return from controller a json data with a msg if the given number is odd or even 
route::get('/checkdata/{number}', [FromController::class, 'evenOdd'])->where(['number' => '[0-9]+']);

//create a post route and return true false if user has given email data or not
route::post('/emaildata', [FromController::class, 'emailCheck']);


