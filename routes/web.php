<?php

use App\Http\Controllers\AdminController;
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



Route::get('/' , [AdminController::class, 'home']);

Route::get('/home' , [AdminController::class, 'index'])->name('home');
Route::get('/create_room' , [AdminController::class, 'create_room']);
Route::post('/add_room' , [AdminController::class, 'add_room']);
Route::get('/view_room' , [AdminController::class, 'view_room']);

Route::get('room_delete/{id}' , [AdminController::class, 'room_delete'])->name('room_delete');
Route::get('room_update/{id}' , [AdminController::class, 'room_update'])->name('room_update');

Route::post('edit_room/{id}' , [AdminController::class, 'edit_room']);
Route::get('room_details/{id}' , [HomeController::class, 'room_details'])->name('room_details');
Route::post('add_booking/{id}' , [HomeController::class, 'add_booking']);

Route::get('bookings' , [AdminController::class, 'bookings']);
Route::get('delete_booking/{id}' , [AdminController::class, 'delete_booking']);
Route::get('view_gallary' , [AdminController::class, 'view_gallary']);

Route::post('upload_gallary' , [AdminController::class, 'upload_gallary']);
Route::get('delete_gallary/{id}' , [AdminController::class, 'delete_gallary'])->name('delete_gallary');

Route::post('contact' , [HomeController::class, 'contact']);



