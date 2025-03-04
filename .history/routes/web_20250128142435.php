<?php

use Illuminate\Support\Facades\Route;

class Service
{
    // ...
}
 
Route::get('/', function (Service $service) {
    die($service);
});
