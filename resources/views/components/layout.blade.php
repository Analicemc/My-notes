<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('titulo')</title>
</head>

<body>
    <header>
        <nav class="navbar-nav navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/notes/all">
                    <svg class="d-inline-block align-text-top" xmlns="http://www.w3.org/2000/svg" height="24"
                        width="30"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path
                            d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H288V368c0-26.5 21.5-48 48-48H448V96c0-35.3-28.7-64-64-64H64zM448 352H402.7 336c-8.8 0-16 7.2-16 16v66.7V480l32-32 64-64 32-32z" />
                    </svg>
                    My notes
                </a>

                <a class="nav-link" href="/notes/all">Home</a>
                <a class="nav-link" href="/notes/create">New Note</a>
            </div>
        </nav>
    </header>
    @yield('slot')
</body>

</html>
