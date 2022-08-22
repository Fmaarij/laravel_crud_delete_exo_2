<?php

use App\Http\Controllers\DisplayController;
use App\Http\Controllers\FormController;
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

Route::get('/',[DisplayController::class,'ShowDb'] )->name('index');
Route::get('/form',[FormController::class,'ShowForm'] )->name('form');
Route::post('/create',[FormController::class,'AddCar']);

Route::delete('/crud/{id}/delete',[DisplayController::class,'destroy']);
