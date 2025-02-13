<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsensiContoller;
use App\Http\Controllers\TraningController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);

Route::resource('absensis', AbsensiContoller::class);

Route::resource('traning', TraningController::class);