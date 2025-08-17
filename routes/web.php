<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\ReviewController;

Route::get('/api/reviews', [ReviewController::class, 'index']);
Route::post('/api/reviews', [ReviewController::class, 'store'])
    ->withoutMiddleware([VerifyCsrfToken::class]);
