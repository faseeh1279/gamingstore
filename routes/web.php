<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\WebHookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/game', [GameController::class, 'index'])->name('games.index'); 

Route::post('/game', [GameController::class, 'store'])->name('games.store');

Route::get('/game/create', [GameController::class, 'createGame'])->name('games.create'); 

