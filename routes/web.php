<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceItemController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\WorkDescriptionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\TimeController;

Route::get('/api/reviews', [ReviewController::class, 'index']);
Route::post('/api/reviews', [ReviewController::class, 'store'])
    ->withoutMiddleware([VerifyCsrfToken::class]);
Route::get('/api/dates', [DateController::class, 'index']);
Route::get('/api/times', [TimeController::class, 'index']);
Route::get('/api/chosenDates', [DateController::class, 'getChosenDates']);
Route::get('/api/chosenTimes', [TimeController::class, 'getChosenTimes']);
Route::post('/api/chooseDate', [DateController::class, 'choose'])
    ->withoutMiddleware([VerifyCsrfToken::class]);;
Route::post('/api/chooseTime', [TimeController::class, 'choose'])
    ->withoutMiddleware([VerifyCsrfToken::class]);;
Route::get('/api/works', [WorkController::class, 'index']);
Route::get('/api/workDescriptions', [WorkDescriptionController::class, 'index']);
Route::get('/api/services', [ServiceController::class, 'index']);
Route::get('/api/serviceItems', [ServiceItemController::class, 'index']);