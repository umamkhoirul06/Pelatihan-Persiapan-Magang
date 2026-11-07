<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchMapController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peta', [BranchMapController::class, 'index']);

Route::get('/profil', function () {
    return view('welcome');
});

Route::get('/profil/{nama}', function ($nama) {
    return 'Halo, nama saya khoirul Umam ' . $nama;
});

