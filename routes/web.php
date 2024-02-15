<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [AdminController::class, 'home']);
Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/create_room', [AdminController::class, 'create_room'])->middleware(['auth','admin']);
Route::post('/add_room', [AdminController::class, 'add_room'])->middleware(['auth','admin']);
Route::get('/view_room', [AdminController::class, 'view_room'])->middleware(['auth','admin']);
Route::get('/room_delete/{id}', [AdminController::class, 'room_delete'])->middleware(['auth','admin']);
Route::get('/room_update/{id}', [AdminController::class, 'room_update'])->middleware(['auth','admin']);
Route::post('/edit_room/{id}', [AdminController::class, 'edit_room'])->middleware(['auth','admin']);

Route::get('/room_details/{id}', [HomeController::class, 'room_details']);
Route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);

Route::get('/bookings', [AdminController::class, 'bookings'])->middleware(['auth','admin']);

Route::get('/delete_booking/{id}', [AdminController::class, 'delete_booking'])->middleware(['auth','admin']);
Route::get('/approve_book/{id}', [AdminController::class, 'approve_book'])->middleware(['auth','admin']);
Route::get('/reject_book/{id}', [AdminController::class, 'reject_book'])->middleware(['auth','admin']);

Route::get('/view_gallery', [AdminController::class, 'view_gallery'])->middleware(['auth','admin']);
Route::post('/upload_gallery', [AdminController::class, 'upload_gallery'])->middleware(['auth','admin']);
Route::get('/delete_image/{id}', [AdminController::class, 'delete_image'])->middleware(['auth','admin']);

Route::post('/contact', [HomeController::class, 'contact']);

Route::get('/all_messages', [AdminController::class, 'all_messages'])->middleware(['auth','admin']);
Route::get('/send_mail/{id}', [AdminController::class, 'send_mail'])->middleware(['auth','admin']);
Route::post('/mail/{id}', [AdminController::class, 'mail'])->middleware(['auth','admin']);

Route::get('/our_rooms', [HomeController::class, 'our_rooms']);
Route::get('/hotel_gallery', [HomeController::class, 'hotel_gallery']);
Route::get('/contact_us', [HomeController::class, 'contact_us']);

Route::get('/view_slider', [AdminController::class, 'view_slider'])->middleware(['auth','admin']);
Route::post('/upload_slider', [AdminController::class, 'upload_slider'])->middleware(['auth','admin']);
Route::get('/delete_slider_image/{id}', [AdminController::class, 'delete_slider_image'])->middleware(['auth','admin']);