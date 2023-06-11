<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RendezVousController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PrestationController;

Route::view('/', 'home')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/apropos', [PageController::class, 'apropos'])->name('apropos');



Route::get('/rendezvous', [PageController::class, 'rendezvous'])->name('rendezvous');

Route::get('/mentions', [PageController::class, 'mentions'])->name('mentions');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/politique', [PageController::class, 'politique'])->name('politique');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');



Route::get('/prestations', [PrestationController::class, 'index'])->name('admin.prestation.index');


Route::get('/prestations/create', [PrestationController::class, 'create'])->name('admin.prestation.create');
Route::post('/prestations/create', [PrestationController::class, 'store'])->name('admin.prestation.store');

Route::get('/prestations/edit/{id}', [PrestationController::class, 'edit'])->name('admin.prestation.edit');
Route::put('/prestations/edit/{id}', [PrestationController::class, 'update'])->name('admin.prestation.update');

Route::delete('/prestations/delete/{id}', [PrestationController::class, 'destroy'])->name('admin.prestation.destroy');


Route::get('/prestation', [PageController::class, 'prestation'])->name('prestation');

Route::get('/beaute-main', [PageController::class, 'mains'])->name('prestation-mains');
Route::get('/beaute-pied', [PageController::class, 'pieds'])->name('prestation-pieds');







Route::get('/reservation', [RendezVousController::class ,'create'])->name('reservation.create');
Route::post('/prendre-rendez-vous', [RendezVousController::class ,'store'])->name('reservation.store');


require __DIR__.'/auth.php';
