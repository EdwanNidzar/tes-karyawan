<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsensiContoller;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);

Route::resource('absensis', AbsensiContoller::class);