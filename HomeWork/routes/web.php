<?php

use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personalform', function(){
    return view('personalform');
});

Route::post('/personalform', [PersonalController::class, 'display']);
