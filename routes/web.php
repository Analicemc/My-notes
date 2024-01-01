<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NotesController::class, 'index']);

Route::get('/notes/all', [NotesController::class, 'index'])->name('notes.index');

Route::get('/notes/create', [NotesController::class, 'create']);

Route::post('/notes/store', [NotesController::class, 'store'])->name('store');

Route::get('/notes/edit/{id}', [NotesController::class, 'edit']);

Route::post('/notes/update', [NotesController::class, 'update']);
