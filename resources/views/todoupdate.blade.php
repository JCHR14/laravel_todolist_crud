@extends('layout')
@section('title')
    Update {{$task->title}}
@endsection
@section('main')

    <div class="middle">

        <form action="{{ route('todolist.update', ['todo'=> $task->id ] ) }}" method="post" class="form-create-update">
            <h1>Update task: {{$task->title}}</h1>
            @csrf
            @method('PUT')

            <div class="input-container">
                <input type="text" name="title" id="title" class="input-form"
            placeholder="Ingrese el titulo de la tarea" value="{{ $task->title }}">
            </div>

            <div class="input-container">
                <textarea name="content" id="content" cols="3" style="resize: none;"
                class="input-form" placeholder="Ingresar descripción de la tarea"> {{ $task->content }}
                </textarea>
            </div>

            <div class="input-submit">
                <input type="submit" value="Guardar" class="btn-submit">
            </div>
        </form>
    </div>
@endsection
