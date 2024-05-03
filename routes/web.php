<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [BookController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/books/create', [BookController::class, 'create'])->middleware(['auth', 'verified'])->name('books.create');
Route::post('/dashboard/books/store', [BookController::class, 'store'])->name('books.store');
Route::delete('dashboard/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/dashboard/books/{book}/edit', [BookController::class,'edit'])->name('books.edit');
Route::put('/dashboard/photos/{book}', [BookController::class, 'update'])->name('books.update');
Route::get('dashboard/books/{book}', [BookController::class, 'show'])->name('books.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
