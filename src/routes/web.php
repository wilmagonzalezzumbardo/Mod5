<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PonenteVistaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ponentes-vista', [PonenteVistaController::class, 'index']) -> name('ponentes.vista');
