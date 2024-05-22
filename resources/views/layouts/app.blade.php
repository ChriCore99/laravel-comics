<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- uso il comando sottostante per collegare app.scss a questo file per poterlo modificare con scss -->
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    @include('partials.header')

    <main>
        {{-- nelle view cerca una section chiamata "content" --}}
        @yield('content')
    </main>

</body>
</html>