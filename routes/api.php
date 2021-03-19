<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', [TodoListController::class, 'get']);
Route::post('/', [TodoListController::class, 'post']);
Route::put('/', [TodoListController::class, 'put']);
Route::delete('/', [TodoListController::class, 'delete']);
