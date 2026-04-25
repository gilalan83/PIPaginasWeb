<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('iglesia');
});

Route::get('/iglesia', function () {
    return view('iglesia');
});

Route::get('/reuniones', function () {
    return view('reuniones');
});

Route::get('/ministerios', function () {
    return view('ministerios');
});

Route::get('/recursos', function () {
    return view('recursos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');