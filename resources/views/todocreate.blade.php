@extends('layout')
@section('title')
     Create
@endsection
@section('main')

    <div class="middle">

        <form action="{{ route('todolist.create') }}" method="post" class="form-create-update">
            <h1>Create task</h1>
            @csrf

            <div class="input-container">
                <input type="text" name="title" id="title" class="input-form" placeholder="Ingrese el titulo de la tarea">
            </div>

            <div class="input-container">
                <textarea name="content" id="content" cols="3" style="resize: none;" class="input-form" placeholder="Ingresar descripción de la tarea"></textarea>
            </div>

            <div class="input-submit">
                <input type="submit" value="Guardar" class="btn-submit">
            </div>
        </form>
    </div>
@endsection
