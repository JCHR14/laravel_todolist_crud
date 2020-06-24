@extends('layout')
@section('title')
    TodoList
@endsection
@section('main')

    <div class="middle">
        @foreach ($todolist as $item)
            <div class="card-todo">
                <h3 class="title" > {{$item->title}}</h3>
                <div class="description">
                    <p>
                        {{$item->content}}
                    </p>
                </div>
                <footer>
                    <ul>
                    <li>
                        <a href="{{ route('todolist.update', ['todo'=> $item->id ] ) }}">Update</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('todolist.delete', ['todo'=> $item->id ] ) }}"
                        class="form-delete-todolist" id="form-delete-todolist-{{$item->id}}">
                            @csrf
                            @method('DELETE')
                            <a href="#!" onclick="clickSubmit({{$item->id}})" >Delete</a>
                        </form>
                    </li>
                    </ul>

                </footer>
            </div>
        @endforeach
    </div>

@endsection

@section('js')
    <script>
        function clickSubmit(id){
            let unique = 'form-delete-todolist-'+id;
            document.getElementById(unique).submit();
        }
    </script>
@endsection
