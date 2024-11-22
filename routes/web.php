<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', function () {
    return view('main');
});

Route::get('/registration', [MainController::class, 'showPage']);

Route::post('/send', [MainController::class, 'addNewUser']);

Route::get('/users', [MainController::class, 'getUsers']);