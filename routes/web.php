<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/people', [PersonController::class, 'index']);
Route::get('/people/show/{id}',[PersonController::class, 'show']);
Route::get('/people/show',[PersonController::class, 'create']);
Route::get('/people/edit/{id}',[PersonController::class, 'edit']);
Route::get('/people/create',[PersonController::class, 'create']);
