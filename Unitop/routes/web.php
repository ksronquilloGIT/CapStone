<?php

use Illuminate\Routing\RouteSignatureParameters;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'homepage']);
Route::get('/about', [UserController::class, 'aboutpage']);
Route::get('/services', [UserController::class, 'servicepage']);
Route::get('/contact', [UserController::class, 'contactpage']);

Route::get('/login', function () {
    return view('login');
});