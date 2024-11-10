<?php

// Define routes here if needed. For example:
//Route::get('/', 'HomeController@index');
//Route::get('/hello', 'HomeController@index');
//Route::get('/user/{id}', 'UserController@show');

use Core\Route;

Route::get('/', 'HomeController@home');
Route::get('/category/{slug}', 'HomeController@category');
Route::get('/article/{slug}', 'HomeController@article');
Route::get('/admin', 'AdminController@login');
