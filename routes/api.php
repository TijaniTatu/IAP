<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/drugs', [App\Http\Controllers\DrugController::class, 'index'])->name('drugs.index');
    Route::get('/drugs/create', [App\Http\Controllers\DrugController::class, 'create'])->name('drugs.create');
    Route::post('/drugs', [App\Http\Controllers\DrugController::class, 'store'])->name('drugs.store');
    Route::get('/drugs/{drug}', [App\Http\Controllers\DrugController::class, 'show'])->name('drugs.show');
    Route::get('/drugs/{drug}/edit', [App\Http\Controllers\DrugController::class, 'edit'])->name('drugs.edit');
    Route::patch('/drugs/{drug}', [App\Http\Controllers\DrugController::class, 'update'])->name('drugs.update');
    Route::delete('/drugs/{drug}', [App\Http\Controllers\DrugController::class, 'destroy'])->name('drugs.destroy');

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::patch('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
});
 

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/drug-categories', [App\Http\Controllers\DrugCategoryController::class, 'index'])->name('drug-categories.index');
    Route::get('/drug-categories/create', [App\Http\Controllers\DrugCategoryController::class, 'create'])->name('drug-categories.create');
    Route::post('/drug-categories', [App\Http\Controllers\DrugCategoryController::class, 'store'])->name('drug-categories.store');
    Route::get('/drug-categories/{drugCategory}', [App\Http\Controllers\DrugCategoryController::class, 'show'])->name('drug-categories.show');
    Route::get('/drug-categories/{drugCategory}/edit', [App\Http\Controllers\DrugCategoryController::class, 'edit'])->name('drug-categories.edit');
    Route::patch('/drug-categories/{drugCategory}', [App\Http\Controllers\DrugCategoryController::class, 'update'])->name('drug-categories.update');
    Route:: delete('/drug-categories/{drugCategory}', [App\Http\Controllers\DrugCategoryController::class, 'destroy'])->name('drug-categories.destroy');
});