<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/wel', function () {
    return view('welcome');
});

Route::get('/', function (Request $request) {
    var_dump($request);
});

Route::get('/user', [UserController::class, 'index']);
