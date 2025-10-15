<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Models\User;
use \App\Models\Post;

Route::get('/', function () {

//    $roles = Role::all();
//    dd($roles);

    $user = User::with('roles')->find(1);
//    $user->roles()->attach(1);
//    $user->roles()->attach(2);

//    $user->roles()->detach(1);
    dd($user);


    return view('welcome');
});

Route::get('admin/users', [UserController::class, 'index'])->name('users.index');
Route::get('admin/users/register', [UserController::class, 'create'])->name('users.create');
Route::post('admin/users/register', [UserController::class, 'store'])->name('users.store');
Route::get('admin/users/{user}', [UserController::class, 'show']);
