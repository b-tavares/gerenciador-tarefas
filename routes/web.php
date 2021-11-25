<?php

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

use App\Http\Controllers\EventController;

/*
Route::get('/', function () {
    return view('welcome'); 
})->name('home');
*/

Route::get('/', 'App\Http\Controllers\TaskController@index')->name('home');
Route::get('/tarefas/criar', 'App\Http\Controllers\TaskController@create');
Route::post('/tarefas/criar', 'App\Http\Controllers\TaskController@store')->name('create_task');// nomear as rotas permite invocá-las pelo nome, e não apenas caminho.
Route::get('/tarefas/ver/{id}', 'App\Http\Controllers\TaskController@show')->name('view_task');
Route::get('/tarefas/editar/{id}', 'App\Http\Controllers\TaskController@edit');
Route::put('/tarefas/editar/{id}', 'App\Http\Controllers\TaskController@update')->name('update_task'); //patch não deu certo. pq? vish. agora nem o put mais.
Route::get('/tarefas/excluir/{id}', 'App\Http\Controllers\TaskController@delete');
Route::post('/tarefas/excluir/{id}', 'App\Http\Controllers\TaskController@destroy')->name('delete_task'); //método delete