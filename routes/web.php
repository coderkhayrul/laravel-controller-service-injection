<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', [TodoController::class, 'index'])->name('todo.index');
// Route::post('/', [TodoController::class, 'store'])->name('todo.store');
// Route::put('/', [TodoController::class, 'update'])->name('todo.update');
// Route::delete('/', [TodoController::class, 'destroy'])->name('todo.destroy');


Route::resource('/todo', TodoController::class);
