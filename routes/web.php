<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;


Route::get('/', [WebController::class, 'index']);


Route::get('/burger', [WebController::class, 'burger'])->name('burger.3d');

Route::get('/tikka', [WebController::class, 'tikka'])->name('tikka.3d');

// Route::get('/fried_chicken', [WebController::class, 'fried_chicken'])->name('fried_chicken.3d');

Route::get('/boti_roll', [WebController::class, 'boti_roll'])->name('boti_roll.3d');

Route::get('/foods', [WebController::class, 'foods'])->name('foods');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
