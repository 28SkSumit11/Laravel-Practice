<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::view('/', 'welcome');

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/testing', function () {});
Route::redirect('/testing', '/');
