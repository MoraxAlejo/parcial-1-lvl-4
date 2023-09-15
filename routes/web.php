<?php

use Illuminate\Support\Facades\Route;

// routes/web.php

use App\Http\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
Route::get('/', [UsuarioController::class, 'hola']);
