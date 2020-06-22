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

Route::get('/', function () {
    $todo = [
        'Hacer algo!',
        'Hacer algo mas!',
        'Hacerlo despues',
        'Hacer esto en la tarde',
        'Hacer al finalizar',
    ];
    return view('todolist', ['todolist'=> $todo]);
});

Route::get('/todolist/create', function () {
    return "Here we'll create new todo item";
});

Route::get('/todolist/update/{id}', function($id){
    return "Here we are going to update todo item with id: ".$id;
})->where('id', '\d+');

Route::get('/todolist/delete/{id}', function($id){
    return "Here we are going to delete todo item with id: ". $id;
})->where('id', '\d+');
