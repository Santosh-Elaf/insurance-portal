<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\UserController;

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

Route::get('', [WebController::class,'index']);
Route::get('home', [WebController::class,'index']);
Route::get('signin', [AuthController::class, 'signin']);
Route::get('signup', [AuthController::class, 'signup']);
Route::post('register_user', [AuthController::class,'register_user']);
Route::post('login_user', [AuthController::class,'login_user']);
Route::get('currunt_page',[AuthController::class,'currunt_page']);
Route::get('logout',[AuthController::class,'logout']);
Route::get('user_profile',[UserController::class,'user_profile']);
Route::get('forgot_user_pass',[AuthController::class,'forgot_user_pass']);
Route::post('forgot_user_password',[AuthController::class,'forgot_user_password']);
Route::get('send-email', [SendEmailController::class, 'index']);
Route::get('apply_insurance',[UserController::class,'apply_insurance']);