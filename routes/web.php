<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('laravel-condition', [UserController::class, 'index'])->name('laravel-condition');


