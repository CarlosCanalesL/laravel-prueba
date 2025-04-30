<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\NotaController;

// Ruta de inicio
Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

// Rutas del recurso notas (solo index, create, store, edit, update)
Route::resource('notas', NotaController::class)->only([
    'index', 'create', 'store', 'edit', 'update'
]);

// Ruta protegida para dashboard
Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Otros archivos de rutas
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
