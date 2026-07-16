<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController; 
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
Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index'); 

// Game Routes 
Route::get('/admin/games', [App\Http\Controllers\Admin\GameController::class, 'index'])->name('admin.games.index');
Route::get('/admin/games/create', [App\Http\Controllers\Admin\GameController::class, 'create'])->name('admin.games.create'); 
Route::get('/admin/games/view', [App\Http\Controllers\Admin\GameController::class, 'view'])->name('admin.games.view'); 

// Requirement Routes
Route::get('/admin/requirements', [App\Http\Controllers\Admin\RequirementController::class, 'index'])->name('admin.requirements.index'); 

Route::get('/admin/requirements/create', [App\Http\Controllers\Admin\RequirementController::class, 'create'])->name('admin.requirements.create'); 

Route::get('/admin/requirements/view', [App\Http\Controllers\Admin\RequirementController::class, 'view'])->name('admin.requirements.view'); 


// Hardware Routes 
Route::get('/admin/hardware', [App\Http\Controllers\Admin\Hardware\HardwareController::class, 'index'])->name('admin.hardware.index'); 

// Hardware Cpu Routes 
Route::get('/admin/hardware/cpu', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'index'])->name('admin.hardware.cpu.index'); 

Route::get('/admin/hardware/cpu/create', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'create'])->name('admin.hardware.cpu.create');

Route::get('/admin/hardware/cpu/view', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'view'])->name('admin.hardware.cpu.view'); 

// Hardware Gpu Routes 
Route::get('/admin/hardware/gpu', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'index'])->name('admin.hardware.gpu.index'); 

Route::get('/admin/hardware/gpu/create', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'create'])->name('admin.hardware.gpu.create'); 

Route::get('/admin/hardware/gpu/create', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'view'])->name('admin.hardware.gpu.view'); 

// Developer Routes 
Route::get('/admin/developers', 
[App\Http\Controllers\Admin\DeveloperController::class, 'index'])
->name('admin.developer.index');

Route::get('/admin/developers/create', 
[App\Http\Controllers\Admin\DeveloperController::class, 'create'])
->name('admin.developer.create');

Route::get('/admin/developers/view', 
[App\Http\Controllers\Admin\DeveloperController::class, 'view'])
->name('admin.developer.view');

// Publisher Routes 
Route::get('/admin/publisher', 
[App\Http\Controllers\Admin\PublisherController::class, 'index'])
->name('admin.publisher.index');

Route::get('/admin/publisher/create', 
[App\Http\Controllers\Admin\PublisherController::class, 'create'])
->name('admin.publisher.create');

Route::get('/admin/publisher/view', 
[App\Http\Controllers\Admin\PublisherController::class, 'view'])
->name('admin.publisher.view');




// Category Routes
Route::get('/admin/category', 
[App\Http\Controllers\Admin\CategoryController::class, 'index'])
->name('admin.categories.index');

Route::get('/admin/category/create', 
[App\Http\Controllers\Admin\CategoryController::class, 'create'])
->name('admin.categories.create');

Route::get('/admin/category/view', 
[App\Http\Controllers\Admin\CategoryController::class, 'view'])
->name('admin.categories.view');