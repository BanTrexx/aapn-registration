<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'authenticate']);
Route::get('/registration/{agent_code}', [HomeController::class, 'registration']);
Route::put('/registration/{agent_code}', [HomeController::class, 'update']);
