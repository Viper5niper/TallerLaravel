<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

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

Route::get('/', [TareaController::class, 'index']);
Route::get('create', [TareaController::class, 'create']);
Route::post('store', [TareaController::class, 'store']);
Route::get('show/{tarea}', [TareaController::class, 'show']);
Route::get('edit/{tarea}', [TareaController::class, 'edit']);
Route::post('update/{tarea}', [TareaController::class, 'update']);
Route::get('delete/{tarea}', [TareaController::class, 'delete']);
