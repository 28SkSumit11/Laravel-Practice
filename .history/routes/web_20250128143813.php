<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/wel', function () {
    return view('welcome');
});

Route::get('/', function (Request $request) {
    var_dump($request);
});
