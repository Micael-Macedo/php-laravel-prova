<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('/realty', \App\Http\Controllers\RealtyController::class);
Route::resource('/amenity', \App\Http\Controllers\AmenityController::class);
Route::resource('/realtyType', \App\Http\Controllers\RealtyTypeController::class);
Route::resource('/city', \App\Http\Controllers\CityController::class);
Route::resource('/state', \App\Http\Controllers\StateController::class);
Route::resource('/neighborhood', \App\Http\Controllers\NeighborhoodController::class);
Route::get("/login", [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get("/cadastro", [\App\Http\Controllers\AuthController::class, 'cadastro'])->name('cadastro');
Route::post("/auth/login", [\App\Http\Controllers\AuthController::class, 'check']);
Route::post("/auth/register", [\App\Http\Controllers\AuthController::class, 'store']);
Route::get('/', function () {
    return view('index');
});
