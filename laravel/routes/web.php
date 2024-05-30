<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotCommandController;
use App\Http\Controllers\UnitConverterController;

Route::get('/', function () {
    return view('index');
});

Route::get('commands', function () {
    return view('commands-index');
});

Route::get('privacy', function () {
    return view('privacy');
});


Route::get('/', [UnitConverterController::class, 'showForm']);
Route::post('/convert', [UnitConverterController::class, 'convertUnits']);

Route::get('/commands', [BotCommandController::class, 'index']);