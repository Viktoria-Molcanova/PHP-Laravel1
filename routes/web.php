<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FormProcessor;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmployeeController::class, 'index']);
Route::post('/store-form', [EmployeeController::class, 'store']);
Route::put('/update-employee/{id}', [EmployeeController::class, 'update']);
