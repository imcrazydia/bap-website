<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- @ is the syntax used in blade(laravel) -->

    @section('styles')
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    @show
</head>

<body>

    <header>
        <!-- Puts text in the layout so each view that uses this layout gets this text -->
        @section('header')
        TITEL
        @show
    </header>

    <nav>
        @section('navigation')
        @include('partials.menu')
        @show
    </nav>

    <main>
        <!-- Tells laravel that the view has it's own text in this tag -->
        @yield('content')
    </main>

    <footer></footer>

</body>

</html>
