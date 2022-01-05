<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

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

Route::get('/', [bookController::class , 'index']);
Route::get('/create', [bookController::class , 'create']);
Route::post('/store', [bookController::class , 'store']);
Route::get('/show/{id}', [bookController::class , 'show']);
Route::post('/update/{id}', [bookController::class , 'update']);
Route::get('/destroy/{id}', [bookController::class , 'destroy']);
