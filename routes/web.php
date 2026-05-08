<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasseioController;

Route::get('/', [PasseioController::class, 'index']);

Route::get('/passeio', [PasseioController::class, 'index']);
Route::post('/salvar', [PasseioController::class, 'salvar']);


?>