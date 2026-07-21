<?php

use App\Http\Controllers\Api\DocumentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebHookController; 
use App\Http\Controllers\Settings\EmailController; 

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/webhook', [WebHookController::class, 'receive']); 

Route::post('/test-email', [
    EmailController::class, 
    'sendRuntimeEmail'
]); 


Route::post('/documents/bulk', [DocumentController::class, 'bulkStore']);
Route::delete('/documents/bulk', [DocumentController::class, 'bulkDestroy']);
Route::put('/documents/bulk', [DocumentController::class, 'bulkUpdate']);

Route::apiResource('documents', DocumentController::class);