<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlePessoa;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curso', [ControlePessoa::class, 'index']);

Route::post('/eventos', [ControlePessoa::class, 'store']);

Route::delete('/eventos/{id}', [ControlePessoa::class, 'destroy']);

Route::get('/edit/{id}', [ControlePessoa::class, 'edit']);

Route::put('/edit/update/{id}', [ControlePessoa::class, 'update']);