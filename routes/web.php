<?php

use App\Http\Controllers\AdminActus;
use App\Http\Controllers\AdminPhotosAmbiances;
use App\Http\Controllers\AdminReservationController;
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

Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');

Route::get('/aproposdenous', [MainController::class, 'aproposdenous'])->name('main.aproposdenous');

Route::get('/admin/reservation', [AdminReservationController::class, 'index'])->middleware('auth')->name('admin.reservation.index');

Route::get('/admin/reservation/create', [AdminReservationController::class, 'create'])->middleware('auth')->name('admin.reservation.create');

Route::post('/admin/reservation', [AdminReservationController::class, 'store'])->middleware('auth')->name('admin.reservation.store');

Route::get('/admin/reservation/{id}', [AdminReservationController::class, 'show'])->middleware('auth')->name('admin.reservation.show');

Route::get('/admin/reservation/{id}/edit', [AdminReservationController::class, 'edit'])->middleware('auth')->name('admin.reservation.edit');

Route::put('/admin/reservation/{id}', [AdminReservationController::class, 'update'])->middleware('auth')->name('admin.reservation.update');

Route::delete('/admin/reservation/{id}', [AdminReservationController::class, 'delete'])->middleware('auth')->name('admin.reservation.delete');

Route::get('/admin/actus', [AdminActus::class, 'index'])->middleware('auth')->name('admin.actus.index');

Route::get('/admin/actus/create', [AdminActus::class, 'create'])->middleware('auth')->name('admin.actus.create');

Route::post('/admin/actus', [AdminActus::class, 'store'])->middleware('auth')->name('admin.actus.store');

Route::get('/admin/actus/{id}', [AdminActus::class, 'show'])->middleware('auth')->name('admin.actus.show');

Route::get('/admin/actus/{id}/edit', [AdminActus::class, 'edit'])->middleware('auth')->name('admin.actus.edit');

Route::put('/admin/actus/{id}', [AdminActus::class, 'update'])->middleware('auth')->name('admin.actus.update');

Route::delete('/admin/actus/{id}', [AdminActus::class, 'delete'])->middleware('auth')->name('admin.actus.delete');


Route::get('/admin/photos_ambiances', [AdminPhotosAmbiances::class, 'index'])->middleware('auth')->name('admin.photos_ambiances.index');

Route::get('/admin/photos_ambiances/create', [AdminPhotosAmbiances::class, 'create'])->middleware('auth')->name('admin.photos_ambiances.create');

Route::post('/admin/photos_ambiances', [AdminPhotosAmbiances::class, 'store'])->middleware('auth')->name('admin.photos_ambiances.store');

Route::get('/admin/photos_ambiances/{id}', [AdminPhotosAmbiances::class, 'show'])->middleware('auth')->name('admin.photos_ambiances.show');

Route::get('/admin/photos_ambiances/{id}/edit', [AdminPhotosAmbiances::class, 'edit'])->middleware('auth')->name('admin.photos_ambiances.edit');

Route::put('/admin/photos_ambiances/{id}', [AdminPhotosAmbiances::class, 'update'])->middleware('auth')->name('admin.photos_ambiances.update');

Route::delete('/admin/photos_ambiances/{id}', [AdminPhotosAmbiances::class, 'delete'])->middleware('auth')->name('admin.photos_ambiances.delete');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


