<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [TodoController::class, 'ShowTodo'])->middleware('auth');
Route::get('/inlog', [LoginController::class, 'ShowLogin'])->name ('login');
Route::get('/register', [RegisterController::class, 'ShowRegister']);

Route::get('/delete{id}', [TodoController::class, 'DeleteTodo'])->name ('deleteTodo')->middleware('auth');
Route::post('/add', [TodoController::class, 'PostTodo'])->name ('PostTodo')->middleware('auth');
Route::get('/checklogin', [LoginController::class, 'CheckLogin'])->name ('CheckLogin');
Route::get('/goregister', [RegisterController::class, 'Register'])->name ('Register');
