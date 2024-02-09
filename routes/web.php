<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

Route::get('/aproposdenous', [MainController::class, 'aproposdenous'])->name('main.aproposdenous');


Route::get('/admin/reservation', [MainController::class, 'adminReservationIndex'])->middleware('auth')->name('main.adminReservation.Index');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


