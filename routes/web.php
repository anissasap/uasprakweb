<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Models\Dokter;
use App\Http\Controllers\JanjiTemuController;


Route::post('/booking', [BookingController::class, 'store']);


Route::get('/', function () {
    $dokters = Dokter::all();
    return view('landing', compact('dokters'));
});


Route::post('/janji-temu', [JanjiTemuController::class, 'store'])->name('janji.store');

