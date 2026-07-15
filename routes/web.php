<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\WebHookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/login', [AuthController::class, 'login'])->name('login'); 
Route::get('auth/register', [AuthController::class, 'register'])->name('register'); 
Route::post('auth/store', [AuthController::class, 'store'])->name('auth.store'); 
Route::post('auth/logout', [AuthController::class, 'logout'])->name('logout'); 
Route::post('auth/login/store', [AuthController::class, 'loginStore'])->name('auth.loginStore'); 

Route::middleware('auth')->group(function (){ 
    Route::get('/game', [GameController::class, 'index'])->name('games.index'); 
    
    Route::post('/game', [GameController::class, 'store'])->name('games.store');
    
    Route::get('/game/create', [GameController::class, 'createGame'])->name('games.create'); 
}); 



