<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceItemController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\WorkDescriptionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\RecordController;

Route::get('/api/reviews', [ReviewController::class, 'index']);
Route::post('/api/reviews', [ReviewController::class, 'store'])
    ->withoutMiddleware([VerifyCsrfToken::class]);
Route::get('/api/times', [TimeController::class, 'index']);
Route::get('/api/chosenTimes', [TimeController::class, 'getChosenTimes']);
Route::post('/api/times', [TimeController::class, 'store'])
    ->withoutMiddleware([VerifyCsrfToken::class]);;
Route::get('/api/works', [WorkController::class, 'index']);
Route::get('/api/workDescriptions', [WorkDescriptionController::class, 'index']);
Route::get('/api/services', [ServiceController::class, 'index']);
Route::get('/api/serviceItems', [ServiceItemController::class, 'index']);
Route::post('/api/works', [WorkController::class, 'store'])
    ->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/api/workDescriptions', [WorkDescriptionController::class, 'store'])
    ->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/api/services', [ServiceController::class, 'store'])
    ->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/api/serviceItems', [ServiceItemController::class, 'store'])
    ->withoutMiddleware([VerifyCsrfToken::class]);
Route::get('/api/servicesWithItems', [ServiceController::class, 'indexWithItems']);
Route::get('/api/worksWithDescriptions', [WorkController::class, 'indexWithDescriptions']);
Route::get('/api/records', [RecordController::class, 'index']);
Route::post('/api/records', [RecordController::class, 'store'])
    ->withoutMiddleware([VerifyCsrfToken::class]);
Route::get('/api/freeTimes', [TimeController::class, 'getFreeTimes']);