<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\machinesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[machinesController::class, 'index'] )->middleware(['auth', 'verified'])->name('dashboard');
// routes/web.php

Route::get('/machine_details/{category}',[machinesController::class, 'show'])->name('machine.details');

Route::get('/machines', [machinesController::class, 'index'])->name('machines');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/add_machines',[machinesController::class, 'show'])->name('add_machines');

require __DIR__.'/auth.php';
