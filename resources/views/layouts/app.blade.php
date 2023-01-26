<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel-dc-comics</title>

    @vite('resources/js/app.js')
</head>

<body>

    @include('partials.header')

    <main>
        <div class="container">

            @yield('content')

        </div>
    </main>
    
</body>
</html>