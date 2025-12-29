<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Kita tambahkan route baru di bawahnya 
Route::get('coba',function(){
    return view('coba');
});

// route yang dipakai dalam testing Controller dan Passing Data
Route::get('/user/{id}',[UserController::class, 'show']);
// route yang dipakai dalam testing Controller
Route::get('/user/',[UserController::class, 'test']);