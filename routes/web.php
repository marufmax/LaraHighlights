<?php

Route::get('/', 'FrontpageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
