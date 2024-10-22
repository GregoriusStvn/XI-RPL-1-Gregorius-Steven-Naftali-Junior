<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\KegiatanController;

Route::get('/', function () {
    return redirect('/kegiatan');
});

Route::resource('kegiatan', KegiatanController::class);
