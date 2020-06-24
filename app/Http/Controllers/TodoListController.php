<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todolist;
class TodoListController extends Controller
{
    public function index () {
        $todo = todolist::all();
        return view('todolist', ['todolist'=> $todo]);
    }
    public function createget () {
        return view('todocreate');
    }
    public function createpost (Request $request) {
        todolist::create([
            'title'=>  $request->input('title') ,
            'content' => $request->input('content'),
        ]);
        return redirect()->route('todolist');
    }
    public function updateget($id){
        $task = todolist::find($id);
        return view('todoupdate', ['task' => $task]);
    }
    public function updateput(todolist $todo, Request $request){
        $todo->update([
            'title' =>  $request->input('title'),
            'content' => $request->input('content'),
        ]);
        return redirect()->route('todolist');
    }
    public function delete(todolist $todo, Request $request){
        $todo->delete();
        return redirect()->route('todolist');
    }
}
