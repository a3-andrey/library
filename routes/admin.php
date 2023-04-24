<?php
use Illuminate\Support\Facades\Route;

Route::get('/',\App\Http\Controllers\Admin\DashboardController::class);

Route::resource('books',\App\Http\Controllers\Admin\BookController::class);
