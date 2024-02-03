<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home'])->name ('main.home');

Route::get('/menu', [MainController::class, 'menu'])->name('main.menu');

Route::get('/plat/{id}', [MainController::class, 'plat'])->name('main.plat');

Route::get('/reservation/create', [MainController::class, 'reservation'])->name('main.reservation');

Route::post('/reservation/create', [MainController::class, 'reservationStore'])->name('main.reservation.store');

Route::get('/reservationIndex',[ MainController::class, 'reservationIndex'])->name('main.reservationIndex');

Route::get('/reservationShow{id}', [MainController::class, 'reservationShow'])->name('main.reservationShow');

Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');

