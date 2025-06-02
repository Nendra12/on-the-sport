<?php

use App\Models\berita;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);


// Route::domain('user.ots')->group(function () {
//     Route::get('/', function () {
//         return view('home'); // resources/views/user_home.blade.php
//     });
// });


// Route::domain('admin.ots')->group(function () {
//     // redirect ke Filament dashboard
//     Route::get('/', function () {
//         return redirect('/admin');
//     });
// });

