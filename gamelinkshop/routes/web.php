<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
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

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/', [AuthController::class, 'authenticate'])->name('login.post');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::post('register', [RegisterController::class, 'registration'])->name('register.post');

Route::get('register-confirmation', function() {
    return view('register-confirmation');
})->name('register-confirmation');


Route::get('store', [GameController::class, 'getGames'])->name('store');


Route::get('game/{id}', [GameController::class, 'gamePage'])->name('game');
Route::post('game/1', [GameController::class, 'saveCart'])->name('game.post');

Route::get('workshop', function () {
    return view('workshop');
})->name('workshop');


Route::get('library', [GameController::class, 'getLibraryGames'])->name('library');

Route::get('cart', [GameController::class, 'getCartGames'])->name('cart');
Route::post('cart', [GameController::class, 'postCartGames'])->name('cart.post');

Route::get('confirmation', function() {
    return view('confirmation');
})->name('confirmation');
