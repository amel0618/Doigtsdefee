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

Route::get('/', function () {
    return view('home');
});
Route::get('/prestation', [PageController::class, 'prestation'])->name('prestation');
Route::get('/horaire', [PageController::class, 'horaire'])->name('horaire');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
