<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comicsdb.comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/comics', function () {
    $comics = config('comicsdb.comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/characters', function () {
    $comics = config('comicsdb.comics');
    return view('characters', compact('comics'));
})->name('characters');
