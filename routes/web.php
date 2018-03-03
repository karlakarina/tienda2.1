<?php

Route::get('/', 'MainController@home'); 
Auth::routes();

Route::resource('products','ProductsController');
Route::get('/home', 'HomeController@index')->name('home');



Route::get("logout","MainController@cerrar");

