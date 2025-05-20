<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [NoteController:: class, 'index']);
Route::get('/create', [NoteController:: class, 'create']);
Route::post('/index', [NoteController:: class, 'store']);
