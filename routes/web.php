<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 Route::post('/generate-token', [App\Http\Controllers\TokenController::class, 'generate'])->name('generate-token');

Route::get('/generate-token', function () {
    return view('generate-tokens');
})->name('generate-token');

Route::get('subscribe',[App\Http\Controllers\SubscriptionController::class,'index'])->name('subscribe');
Route::post('add/purchases', [App\Http\Controllers\PurchasesController::class,'add'])->name('add.purchases');

use App\Http\Controllers\SubscriptionController;

Route::get('/apply', [SubscriptionController::class, 'showSubscriptionForm'])->name('subscribe.form');
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

require __DIR__.'/auth.php';
