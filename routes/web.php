<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('/albums', AlbumController::class);