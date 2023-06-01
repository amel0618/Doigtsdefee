<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;

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

Route::view('/', 'home')->name('home');

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


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
