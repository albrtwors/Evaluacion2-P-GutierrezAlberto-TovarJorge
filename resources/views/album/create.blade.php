@extends('layout/layout')
@section('content')
    <form class="flex flex-col gap-2 p-5 items-center" method="POST" action="/albums">
        @method('POST')
        @csrf


        @if (session()->has('success'))
            <div class="p-3 border-green-500 bg-green-200 text-green-800">{{ session('success') }}</div>
        @endif
        <div class="flex flex-col gap-1">
            <label>Nombre</label>
            <input name='album_name' value='{{ old('name') }}'
                class="p-2 font-bold border-2 border-black bg-sky-400 hover:bg-sky-200 transition">
            @error('album_name')
                <div class="p-3 border-red-400 bg-red-200 text-red-900 font-bold">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="flex flex-col gap-1">
            <label>Año de Lanzamiento</label>
            <input name="release_year" type="number"
                class="p-2 font-bold border-2 border-black bg-sky-400 hover:bg-sky-200 transition">
            @error('release_year')
                <div class="p-3 border-red-400 bg-red-200 text-red-900 font-bold">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="flex flex-col gap-1">
            <label>Discográfica</label>
            <input name="discographic" type="text"
                class="p-2 font-bold border-2 border-black bg-sky-400 hover:bg-sky-200 transition">
            @error('discographic')
                <div class="p-3 border-red-400 bg-red-200 text-red-900 font-bold">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="flex flex-col gap-1">
            <label>Genero</label>
            <select class="border-black border-2 p-3 bg-sky-400" name="genre_id" id="">
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>

            @error('genre_id')
                <div class="p-3 border-red-400 bg-red-200 text-red-900 font-bold">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button
            class="border-2 border-black text-white font-bold bg-sky-400 p-3 hover:opacity-20 cursor-pointer">Subir</button>
    </form>
@endsection
