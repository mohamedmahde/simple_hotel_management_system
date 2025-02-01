<?php

use App\Http\Controllers\AdminController;
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



Route::get('/' , [AdminController::class, 'home']);

Route::get('/home' , [AdminController::class, 'index'])->name('home');
Route::get('/create_room' , [AdminController::class, 'create_room']);
Route::post('/add_room' , [AdminController::class, 'add_room']);
Route::get('/view_room' , [AdminController::class, 'view_room']);

Route::get('/room_delete/{id}' , [AdminController::class, 'room_delete'])->name('room_delete');
Route::get('/room_update/{id}' , [AdminController::class, 'room_update'])->name('room_update');

Route::post('/edit_room/{id}' , [AdminController::class, 'edit_room']);
