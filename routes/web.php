<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// LoginController
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

// UserController
Route::get('/dashboard', [UserController::class, 'index'])->middleware('auth');
Route::get('/data-siswa', [UserController::class, 'data_siswa']);
Route::post('/data-siswa', [UserController::class, 'import_excel']);
Route::get('/data-siswa/delete/', [UserController::class, 'delete_siswa']);
