<?php

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
use \Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
use App\todolist;

Route::get('/', 'TodoListController@index')->name('todolist');

Route::get('todolist/create', 'TodoListController@createget')->name('todolist.create');

Route::post('todolist/create', 'TodoListController@createpost')->name('todolist.create');

Route::get('todolist/update/{id}', 'TodoListController@updateget' )->where('id', '\d+')->name('todolist.update');
Route::put('todolist/update/{todo}', 'TodoListController@updateput' )->where('todo', '\d+')->name('todolist.update');

Route::delete('todolist/delete/{todo}', 'TodoListController@delete' )->where('todo', '\d+')->name('todolist.delete');
