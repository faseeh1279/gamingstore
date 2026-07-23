<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController; 

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
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index'); 

    // Game Routes 
    Route::get('/games', [App\Http\Controllers\Admin\GameController::class, 'index'])->name('admin.games.index');

    Route::get('/games/create', [App\Http\Controllers\Admin\GameController::class, 'create'])->name('admin.games.create'); 

    Route::get('/games/edit/{game}', [App\Http\Controllers\Admin\GameController::class, 'edit'])->name('admin.games.edit'); 

    Route::put('/games/update', [App\Http\Controllers\Admin\GameController::class, 'viupdateew'])->name('admin.games.update'); 

    Route::post('/games/store', [App\Http\Controllers\Admin\GameController::class, 'store'])->name('admin.games.store'); 

    Route::get('/games/view/{game}', [App\Http\Controllers\Admin\GameController::class, 'view'])->name('admin.games.view'); 

    Route::delete('/games/delete/{game}', [App\Http\Controllers\Admin\GameController::class, 'destroy'])->name('admin.games.delete'); 

    // Tag Routes 
    Route::get('/tags', [App\Http\Controllers\Admin\TagController::class, 'index'])->name('admin.tags.index');
    Route::get('/tags/create', [App\Http\Controllers\Admin\TagController::class, 'create'])->name('admin.tags.create');
    Route::get('/tags/edit/{tag}', [App\Http\Controllers\Admin\TagController::class, 'edit'])->name('admin.tags.edit');
    Route::put('/tags/update', [App\Http\Controllers\Admin\TagController::class, 'update'])->name('admin.tags.update');
    Route::post('/tags/store', [App\Http\Controllers\Admin\TagController::class, 'store'])->name('admin.tags.store');
    Route::get('/tags/view/{tag}', [App\Http\Controllers\Admin\TagController::class, 'show'])->name('admin.tags.view');
    Route::delete('/tags/delete/{tag}', [App\Http\Controllers\Admin\TagController::class, 'index'])->name('admin.tags.delete');

    // Requirement Routes
    Route::get('/requirements', [App\Http\Controllers\Admin\RequirementController::class, 'index'])->name('admin.requirements.index'); 

    Route::get('/requirements/create', [App\Http\Controllers\Admin\RequirementController::class, 'create'])->name('admin.requirements.create'); 

    Route::get('/requirements/view', [App\Http\Controllers\Admin\RequirementController::class, 'view'])->name('admin.requirements.view'); 


    // Hardware Routes 
    Route::get('/hardware', [App\Http\Controllers\Admin\Hardware\HardwareController::class, 'index'])->name('admin.hardware.index'); 

    // Hardware Cpu Routes 
    Route::get('/hardware/cpu', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'index'])->name('admin.hardware.cpu.index'); 

    Route::get('/hardware/cpu/create', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'create'])->name('admin.hardware.cpu.create');

    // Route::get('/hardware/cpu/view', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'view'])->name('admin.hardware.cpu.view'); 

    // Hardware Gpu Routes 
    Route::get('/hardware/gpu', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'index'])->name('admin.hardware.gpu.index'); 

    Route::get('/hardware/gpu/create', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'create'])->name('admin.hardware.gpu.create'); 

    Route::get('/hardware/gpu/view/{gpu}', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'show'])->name('admin.hardware.gpu.view'); 

    Route::get('/hardware/gpu/edit/{gpu}', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'edit'])->name('admin.hardware.gpu.edit'); 


    Route::post('/hardware/cpu/store', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'store'])->name('admin.hardware.cpu.store'); 

    Route::delete('/hardware/cpu/destroy/{cpu}',[App\Http\Controllers\Admin\Hardware\CpuController::class, 'destroy'])->name('admin.hardware.cpu.destroy'); 

    Route::get('/hardware/cpu/edit/{cpu}', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'edit'])->name('admin.hardware.cpu.edit'); 

    Route::get('/hardware/cpu/view/{cpu}', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'show'])->name('admin.hardware.cpu.view'); 

    Route::put('/hardware/cpu/update/{cpu}', [App\Http\Controllers\Admin\Hardware\CpuController::class, 'update'])->name('admin.hardware.cpu.update'); 

    Route::post('/hardware/gpu/store', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'store'])->name('admin.hardware.gpu.store'); 

    Route::put('/hardware/gpu/update/{gpu}', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'update'])->name('admin.hardware.gpu.update'); 

    Route::delete('/hardware/gpu/destroy/{gpu}', [App\Http\Controllers\Admin\Hardware\GpuController::class, 'destroy'])->name('admin.hardware.gpu.destroy'); 

    


    // Developer Routes 
    Route::get('/developers', 
    [App\Http\Controllers\Admin\DeveloperController::class, 'index'])
    ->name('admin.developer.index');

    Route::get('/developers/create', 
    [App\Http\Controllers\Admin\DeveloperController::class, 'create'])
    ->name('admin.developer.create');

    Route::get('/developers/view/{developer}', 
    [App\Http\Controllers\Admin\DeveloperController::class, 'view'])
    ->name('admin.developer.view');

    Route::post('/developers/store', 
    [App\Http\Controllers\Admin\DeveloperController::class, 'store'])
    ->name('admin.developer.store');

    Route::get('/developers/edit/{developer}', 
    [App\Http\Controllers\Admin\DeveloperController::class, 'edit'])
    ->name('admin.developer.edit');

    Route::put('/developers/update/{developer}', 
    [App\Http\Controllers\Admin\DeveloperController::class, 'update'])
    ->name('admin.developer.update');

    Route::delete('/developers/delete/{developer}', 
    [App\Http\Controllers\Admin\DeveloperController::class, 'destroy'])
    ->name('admin.developer.delete');

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

    Route::get('/publisher/edit/{publisher}', 
    [App\Http\Controllers\Admin\PublisherController::class, 'edit'])
    ->name('admin.publisher.edit');

    Route::post('/publisher/store', 
    [App\Http\Controllers\Admin\PublisherController::class, 'store'])
    ->name('admin.publisher.store');

    Route::put('/publisher/update/{publisher}', 
    [App\Http\Controllers\Admin\PublisherController::class, 'update'])
    ->name('admin.publisher.update');

    Route::delete('/publisher/delete/{publisher}', 
    [App\Http\Controllers\Admin\PublisherController::class, 'destroy'])
    ->name('admin.publisher.delete');

    // Category Routes
    Route::get('/category', 
    [App\Http\Controllers\Admin\CategoryController::class, 'index'])
    ->name('admin.categories.index');

    Route::get('/category/create', 
    [App\Http\Controllers\Admin\CategoryController::class, 'create'])
    ->name('admin.categories.create');

    Route::post('/category/store', 
    [App\Http\Controllers\Admin\CategoryController::class, 'store'])
    ->name('admin.categories.store');

    Route::get('/category/view/{category}', 
    [App\Http\Controllers\Admin\CategoryController::class, 'view'])
    ->name('admin.categories.view');

    Route::get('/category/edit/{category}', 
        [App\Http\Controllers\Admin\CategoryController::class, 'edit'])
        ->name('admin.categories.edit');

    Route::delete('/category/delete/{category}', 
        [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])
        ->name('admin.categories.delete');

    Route::put('/category/update/{category}', 
    [App\Http\Controllers\Admin\CategoryController::class, 'update'])
    ->name('admin.categories.update');


}); 




// Route::get('/gate-test', function () {
//     return [
//         'authenticated' => auth()->check(),
//         'role' => auth()->user()?->role,
//         'can' => auth()->user()?->can('is-admin'),
//         'allows' => Illuminate\Support\Facades\Gate::allows('is-admin'),
//     ];
// })->middleware('auth');

Route::resource('documents', DocumentController::class);
    // ->except(['create', 'show']); 

// Route::get('/documents', [DocumentController::class, 'index'])->name('documents.index');

// Route::post('/documents', [DocumentController::class, 'store'])->name('documents.store');

// Route::get('/documents/{document}/edit', [DocumentController::class, 'edit'])->name('documents.edit');

// Route::put('/documents/{document}', [DocumentController::class, 'update'])->name('documents.update');

// Route::delete('/documents/{document}', [DocumentController::class, 'destroy'])->name('documents.destroy');