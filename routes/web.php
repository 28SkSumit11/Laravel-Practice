<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::get('/user/{name}', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'users']);
Route::get('/users/{user_id}', [UserController::class, 'profileByUser']);
Route::get('/profiles/{profile_id}', [UserController::class, 'userByProfile']);
Route::get('/posts/users/{user_id}', [UserController::class, 'postByUser']);
Route::get('/posts/{profile_id}', [UserController::class, 'userByPost']);
Route::get('/registration', function(){
    return view('registration');
});
Route::post('/register', [UserController::class, 'register']);