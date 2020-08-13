<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GameController@index');
Route::get('/game/{slug}', 'GameController@show')->name('game.show');
