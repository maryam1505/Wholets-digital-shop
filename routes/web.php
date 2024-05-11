<?php

use App\Http\Controllers\UsersCustomersController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UsersCustomersController::class,'index'])->name('home');
