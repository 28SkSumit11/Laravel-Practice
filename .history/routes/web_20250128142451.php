<?php

use Illuminate\Support\Facades\Route;

class Service
{
    // ...
}
 
Route::get('/', function (Service $service) {
    var_dump($service);
});
