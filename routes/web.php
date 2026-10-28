<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Api\BukuApiController;

Route::apiResource('buku', BukuApiController::class);

Route ::get('/demo-api-eksternal', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/users');
    $data = $response->successful() ? $response->json() : [];
    return view('api-eksternal', compact('data'));
});

Route::get('/', function () {
    return redirect () -> route('login');
});

Route::get('/dashboard', function () {
    if (Auth::check()) {
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.buku.index');
        } 
        { return redirect()->route('admin.anggota.index');
        } 
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function () {

        Route::resource('buku', BukuController::class)
            ->middleware('cek.role:admin');

        Route::resource('anggota', AnggotaController::class)
            ->middleware('cek.role:user');

    });
require __DIR__.'/auth.php';