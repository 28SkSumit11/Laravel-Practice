<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::view('/', 'welcome');

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/user/{id}', function (String $id) {
    echo $id;
})

Route::post('/testing', function () {});
Route::redirect('/testing', '/');
