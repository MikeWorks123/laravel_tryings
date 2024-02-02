<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [HomeController::class, 'index']);
Route::get('/inventory', [InventoryController::class, 'index']);
Route::get('/inventory/create', [InventoryController::class, 'create']);
Route::post('/inventory', [InventoryController::class, 'store']);
Route::get('/inventory/{id}', [InventoryController::class, 'show']);
Route::get('/inventory/{id}/edit', [InventoryController::class, 'edit']);
Route::put('/inventory/{id}', [InventoryController::class, 'update']);
Route::delete('/inventory/{id}', [InventoryController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
