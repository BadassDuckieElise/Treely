<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotCommandController;

Route::get('/', function () {
    return view('index');
});

Route::get('commands', function () {
    return view('commands-index');
});

Route::get('privacy', function () {
    return view('privacy');
});


Route::get('/commands', [BotCommandController::class, 'index']);
