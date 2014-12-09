<?php

Route::get('/', [
	'uses' => 'HomeController@index',
	'as' => 'home',
]);

Route::get('{folder}/{title}', [
	'uses' => 'PageController@process',
	'as' => 'page'
]);