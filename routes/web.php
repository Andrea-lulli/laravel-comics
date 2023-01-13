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


    return view('home');
})->name('home');

Route::get('/component-menu/characters', function () {


    return view('component-menu.characters');
})->name('characters');

Route::get('/component-menu/comics', function () {

    $comics = config('comics');

    //dd($comics);

    return view('component-menu/comics.comics', compact('comics'));
})->name('index.comics');



Route::get('/component-menu/comics/{id}', function ($id) {

    $comics = config('comics');

    if( is_numeric($id) && $id >= 0 && $id < count($comics) ){
        $comics_singolo = $comics[$id];
    } else {
        abort(404);
    }

    //dd($comics_singolo);

    return view('component-menu/comics.show', compact('comics_singolo'));
})->name('show.comics');
