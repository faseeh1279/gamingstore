<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    if (Auth::check()) {
        return redirect('/dashboard');
    }

    return redirect('/home');
});

Route::redirect('/', '/home'); 
// Authentication Routes
Route::get('auth/login', [AuthController::class, 'login'])->name('login'); 
Route::get('auth/register', [AuthController::class, 'register'])->name('register'); 
Route::post('auth/store', [AuthController::class, 'store'])->name('auth.store'); 
Route::post('auth/logout', [AuthController::class, 'logout'])->name('logout'); 
Route::post('auth/login/store', [AuthController::class, 'loginStore'])->name('auth.loginStore'); 


// Frontend Routes 
Route::get('/home', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('index'); 


Route::get('/games',
[App\Http\Controllers\Frontend\GameController::class,'index'])
->name('games.index');


Route::get('/games/{game}',
[App\Http\Controllers\Frontend\GameController::class,'show'])
->name('games.show');


Route::get('/categories',
[App\Http\Controllers\Frontend\CategoryController::class,'index'])
->name('categories.index');


Route::get('/categories/{category}',
[App\Http\Controllers\Frontend\CategoryController::class,'show'])
->name('categories.show');


Route::get('/news',
[App\Http\Controllers\Frontend\NewsController::class,'index'])
->name('news.index');


Route::get('/news/{news}',
[App\Http\Controllers\Frontend\NewsController::class,'show'])
->name('news.show');


Route::view('/about','frontend.about')
->name('about');


Route::view('/contact','frontend.contact')
->name('contact');

// Route::middleware('auth')->group(function (){ 
//     Route::get('/game', [GameController::class, 'index'])->name('games.index'); 
    
//     Route::post('/game', [GameController::class, 'store'])->name('games.store');
    
//     Route::get('/game/create', [GameController::class, 'createGame'])->name('games.create'); 
// }); 



// Admin Routes 
Route::prefix('admin')->group(function(){ 

    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index'); 

    // Game Routes 
    Route::get('/games', [App\Http\Controllers\Admin\GameController::class, 'index'])->name('admin.games.index');

    Route::get('/games/create', [App\Http\Controllers\Admin\GameController::class, 'create'])->name('admin.games.create'); 

    Route::get('/games/view', [App\Http\Controllers\Admin\GameController::class, 'view'])->name('admin.games.view'); 

    // Requirement Routes
    Route::get('/requirements', [App\Http\Controllers\Admin\RequirementController::class, 'index'])->name('admin.requirements.index'); 

    Route::get('/requirements/create', [App\Http\Controllers\Admin\RequirementController::class, 'create'])->name('admin.requirements.create'); 

    Route::get('/requirements/view', [App\Http\Controllers\Admin\RequirementController::class, 'view'])->name('admin.requirements.view'); 


    // Hardware Routes 
    Route::get('/hardware', [App\Http\Controllers\Admin\Hardware\HardwareController::class, 'index'])->name('admin.hardware.index'); 

    // Hardware Cpu Routes 
    Route::get('/hardware/cpu', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'index'])->name('admin.hardware.cpu.index'); 

    Route::get('/hardware/cpu/create', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'create'])->name('admin.hardware.cpu.create');

    Route::get('/hardware/cpu/view', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'view'])->name('admin.hardware.cpu.view'); 

    // Hardware Gpu Routes 
    Route::get('/hardware/gpu', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'index'])->name('admin.hardware.gpu.index'); 

    Route::get('/hardware/gpu/create', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'create'])->name('admin.hardware.gpu.create'); 

    Route::get('/hardware/gpu/create', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'view'])->name('admin.hardware.gpu.view'); 

    // Developer Routes 
    Route::get('/developers', 
    [App\Http\Controllers\Admin\DeveloperController::class, 'index'])
    ->name('admin.developer.index');

    Route::get('/developers/create', 
    [App\Http\Controllers\Admin\DeveloperController::class, 'create'])
    ->name('admin.developer.create');

    Route::get('/developers/view', 
    [App\Http\Controllers\Admin\DeveloperController::class, 'view'])
    ->name('admin.developer.view');

    // Publisher Routes 
    Route::get('/publisher', 
    [App\Http\Controllers\Admin\PublisherController::class, 'index'])
    ->name('admin.publisher.index');

    Route::get('/publisher/create', 
    [App\Http\Controllers\Admin\PublisherController::class, 'create'])
    ->name('admin.publisher.create');

    Route::get('/publisher/view', 
    [App\Http\Controllers\Admin\PublisherController::class, 'view'])
    ->name('admin.publisher.view');

    // Category Routes
    Route::get('/category', 
    [App\Http\Controllers\Admin\CategoryController::class, 'index'])
    ->name('admin.categories.index');

    Route::get('/category/create', 
    [App\Http\Controllers\Admin\CategoryController::class, 'create'])
    ->name('admin.categories.create');

    Route::get('/category/view', 
    [App\Http\Controllers\Admin\CategoryController::class, 'view'])
    ->name('admin.categories.view');

}); 


