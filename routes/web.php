<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Models\User;
use \App\Models\Post;

Route::get('/', function () {

    $user = User::find(1);
    dd($user->profile);


    return view('welcome');
});

Route::get('admin/users', [UserController::class, 'index']);
Route::get('admin/users/{user}', [UserController::class, 'show']);
