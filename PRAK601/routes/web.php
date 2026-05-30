<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraktikumController;

Route::get('/', [PraktikumController::class, 'index']);
Route::get('/profil', [PraktikumController::class, 'profil']);
Route::get('/detail/{id}', [PraktikumController::class, 'detail']);