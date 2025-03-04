<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;

Route::get('/wel', function () {
    return view('welcome');
});

Route::get('/', function (Request $request) {
    var_dump($request);
});

Route::get('/user', [AuthUser::class, 'index']);
