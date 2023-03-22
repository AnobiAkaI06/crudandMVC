<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use Symfony\Component\HttpFoundation\Request;

// Route::get('/', [adminController::class, 'index'])->name('employee');
Route::resource('/admin', adminController::class);