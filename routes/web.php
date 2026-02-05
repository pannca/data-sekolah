<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;

// Public route - redirect to login
Route::get('/', function () {
    return redirect()->route('login');
});

// Protected routes
Route::middleware(['auth'])->group(function () {
    // Dashboard with role-based routing
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'admin') {
            return view('admin.dashboard');
        }
        return view('siswa.dashboard');
    })->name('dashboard');
    
    // Admin only routes
    Route::middleware('role:admin')->group(function () {
        // Siswa routes
        Route::prefix('siswa')->name('siswas.')->group(function () {
            Route::get('/', [SiswaController::class, 'index'])->name('index');
            Route::get('/create', [SiswaController::class, 'create'])->name('create');
            Route::post('/', [SiswaController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [SiswaController::class, 'edit'])->name('edit');
            Route::patch('/{id}', [SiswaController::class, 'update'])->name('update');
            Route::delete('/{id}', [SiswaController::class, 'destroy'])->name('destroy');
        });
        
        // Guru routes
        Route::prefix('guru')->name('gurus.')->group(function () {
            Route::get('/', [GuruController::class, 'index'])->name('index');
            Route::get('/create', [GuruController::class, 'create'])->name('create');
            Route::post('/', [GuruController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [GuruController::class, 'edit'])->name('edit');
            Route::patch('/{id}', [GuruController::class, 'update'])->name('update');
            Route::delete('/{id}', [GuruController::class, 'destroy'])->name('destroy');
        });
    });
});

// Auth routes (login, register, etc.)
require __DIR__.'/auth.php';
