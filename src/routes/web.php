<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfirmationTestController;

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

Route::get('/', [ConfirmationTestController::class,'index']);
Route::post('/confirm', [ConfirmationTestController::class,'confirm']);
Route::post('/thanks', [ConfirmationTestController::class,'thanks']);
Route::post('/', [ConfirmationTestController::class,'index']);
Route::get('/admin', [ConfirmationTestController::class,'admin']);
Route::post('/register', [ConfirmationTestController::class,'register']);
Route::post('/login', [ConfirmationTestController::class,'login']);
