<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskApiController; // para usar o ::class na rota

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

/*
Route::get('/tarefas', 'App\Http\Controllers\TaskAPIController@index');
Route::get('/tarefas/{id}', 'App\Http\Controllers\TaskAPIController@show');
Route::post('/tarefas', 'App\Http\Controllers\TaskAPIController@store');
Route::put('/tarefas/{id}', 'App\Http\Controllers\TaskAPIController@update');
Route::delete('/tarefas/{id}', 'App\Http\Controllers\TaskAPIController@destroy');

OU:
*/

Route::resource('tarefas', TaskApiController::class);