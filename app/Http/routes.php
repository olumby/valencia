<?php

Route::get('/', [
	'uses' => 'HomeController@index',
	'as'   => 'home',
]);

Route::get('api/{name}', [
	'uses' => 'ApiController@process',
	'as'   => 'api'
]);

Route::get('{folder}/{title}', [
	'uses' => 'PageController@process',
	'as'   => 'page'
]);