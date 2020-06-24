<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="grid-container">
            <header class="header">
                <h1> <a href="{{ url('/') }} ">Todo List</a>  </h1>
                <ul>
                    <li class="{{ url()->current() == route('todolist') ? 'active-item-menu ':'' }} "><a  href="{{ route('todolist') }}">List</a></li>
                    <li class="{{ url()->current() == route('todolist.create') ? 'active-item-menu ':'' }}" ><a href="{{ route('todolist.create') }}">Crear</a></li>
                </ul>
            </header>
            @yield('main')
            <footer class="footer">
                <p>
                    With love and so much coffee jchr14
                </p>
            </footer>
        </div>
        @yield('js')
    </body>
</html>
