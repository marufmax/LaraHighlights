<?php

Route::get('/', 'FrontpageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//****** Admin Routes *******//
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::post('categories', 'CategoryController@store');
});
