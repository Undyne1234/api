<?php

use App\Http\Controllers\OverfastGamemodeController;
use App\Http\Controllers\OverfastMapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OverfastHeroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/heroes', [OverfastHeroController::class ,'index'])->name('overfast.heroes');
Route::get('/maps', [OverfastMapController::class ,'index'])->name('overfast.maps');
Route::get('/gamemodes', [OverfastGamemodeController::class ,'index'])->name('overfast.gamemodes');
