<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\TaskController;
 
Route::resource('tasks', TaskController::class);

Route::get('/list', [TodoListController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
