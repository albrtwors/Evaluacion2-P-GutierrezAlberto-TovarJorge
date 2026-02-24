@extends('layout/layout')
@section('content')
    <div class="grid grid-cols-6 p-5 gap-3">
        @forelse($albums as $album)
            <div class="border-2 p-3 bg-sky-400 text-black">
                <strong class="font-bold">Nombre:</strong>
                <p>{{ $album->album_name }}</p>
                <strong class="font-bold">Año de lanzamiento:</strong>
                <p>{{ $album->release_year }}</p>
                <strong class="font-bold">Discográfica:</strong>
                <p>{{ $album->discographic }}</p>

            </div>
        @empty
            <h1 class="p-5 font-bold text-3xl">No hay albumes añadidos</h1>
        @endforelse
        <div>
        @endsection
