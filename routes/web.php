<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/login', [AuthController::class, 'login'])->name('login'); 
Route::get('auth/register', [AuthController::class, 'register'])->name('register'); 
Route::post('auth/store', [AuthController::class, 'store'])->name('auth.store'); 
Route::post('auth/logout', [AuthController::class, 'logout'])->name('logout'); 
Route::post('auth/login/store', [AuthController::class, 'loginStore'])->name('auth.loginStore'); 


// Route::middleware('auth')->group(function (){ 
//     Route::get('/game', [GameController::class, 'index'])->name('games.index'); 
    
//     Route::post('/game', [GameController::class, 'store'])->name('games.store');
    
//     Route::get('/game/create', [GameController::class, 'createGame'])->name('games.create'); 
// }); 



// Admin Routes 
Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index'); 
Route::get('/games', [App\Http\Controllers\Admin\GameController::class, 'index'])->name('admin.games.index');
Route::get('/games/create', [App\Http\Controllers\Admin\GameController::class, 'create'])->name('admin.games.create'); 
Route::get('/games/view', [App\Http\Controllers\Admin\GameController::class, 'view'])->name('admin.games.view'); 
Route::get('/requirements', [App\Http\Controllers\Admin\RequirementController::class, 'index'])->name('admin.requirements.index'); 


