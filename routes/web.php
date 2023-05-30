<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/prestation', [PageController::class, 'prestation'])->name('prestation');
Route::get('/prestations/mains', function () {
    return view('beaute-mains');
});

Route::get('/prestations/pieds', function () {
    return view('beaute-pieds');
});

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

require __DIR__.'/auth.php';
