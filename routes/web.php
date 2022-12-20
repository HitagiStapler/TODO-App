<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HistoryController;
 
Route::resource('tasks', TaskController::class);

Route::resource('history', HistoryController::class);
Route::get('/history', [HistoryController::class, 'index']);

Route::get('/list', [TodoListController::class, 'index']);

Route::get('/', function () {
    return view('history.history.php');
});
