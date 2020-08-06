<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GameController@index');


Route::get('/show', function(){
	return view('show');
});
