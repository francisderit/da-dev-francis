<?php

use App\Constants\TodoConstants;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(TodoController::class)->group(function() {
    Route::get(TodoConstants::ENTITY, 'getTodo');
    Route::post(TodoConstants::ENTITY, 'saveTodo');
    Route::put(TodoConstants::ENTITY . '/{iTodoNo}', 'editTodo');
    Route::delete(TodoConstants::ENTITY . '/{iTodoNo}', 'removeTodo');
});