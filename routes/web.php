<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Kita tambahkan route baru di bawahnya 
Route::get('coba',function(){
    return view('coba');
});