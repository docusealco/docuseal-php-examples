<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'showHome']);
Route::get('/builder', [PageController::class, 'showBuilder']);
Route::get('/form', [PageController::class, 'showForm']);
