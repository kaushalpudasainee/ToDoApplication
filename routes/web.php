<?php
use App\Http\Controllers\TodolistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TodoListController::class, 'index']);
Route::post('/save-todo',[TodoListController::class,'saveTodo'])->name('saveTodo');
Route::get('/edit/{id}',[TodoListController::class,'edit']);
Route::get('/delete/{id}', [TodoListController::class,'delete']);
Route::post('/edit',[TodoListController::class,'updateTodo'])->name('updateTodo');