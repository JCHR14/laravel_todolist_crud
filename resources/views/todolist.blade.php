<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="grid-container">
            <header class="header">
                <h1> <a href="#">Todo List</a> </h1>
            </header>
            <div class="middle">
                @foreach ($todolist as $item)
                    <div class="card-todo">
                    <h3 class="title" > {{$item}}</h3>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Repellat molestiae omnis rerum? Excepturi alias nihil labore eius
                            assumenda rerum cum minima atque quo provident rem impedit,
                            aliquam recusandae asperiores corrupti?
                        </p>
                    </div>
                @endforeach
            </div>
            <footer class="footer">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur cum id libero.
                    Numquam, atque vel, perspiciatis totam, ex eaque rem placeat magnam corrupti tempore necessitatibus?
                    Expedita hic excepturi officia cumque?
                </p>
            </footer>
        </div>
    </body>
</html>
