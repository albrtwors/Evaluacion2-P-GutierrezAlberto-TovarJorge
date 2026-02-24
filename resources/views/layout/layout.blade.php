<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AlbumLister</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
    <nav class="flex gap-2 font-bold text-white p-5 bg-sky-600">
        <a class="{{ request()->is('albums') ? '' : 'opacity-50' }}" href="/albums">Ver Albúmes</a>|
        <a class="{{ request()->is('albums/create') ? '' : 'opacity-50' }}" href="/albums/create">Crear Albúmes</a>|

    </nav>
    @yield('content')
</body>

</html>
