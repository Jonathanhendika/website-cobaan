<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbudemenController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/regis', [AuthController::class, 'showRegistrationForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('abudemen', [AbudemenController::class, 'index']);
Route::post('/abudemen/add', [AbudemenController::class, 'store']);
Route::get('/abudemen/add', [AbudemenController::class, 'create']);
Route::get('/abudemen/edit/{id}', [AbudemenController::class, 'edit']);
Route::post('/abudemen/update/{id}', [AbudemenController::class, 'update']);
Route::delete('/abudemen/delete/{id}', [AbudemenController::class, 'destroy']);





