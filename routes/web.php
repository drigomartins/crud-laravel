<?php

Route::get('/', 'CrudController@index');
Route::get('/cadastro', 'CrudController@cadastro');
Route::post('/cadastrar', 'CrudController@cadastrar');
Route::get('/deletar/{id}', 'CrudController@deletar');
Route::get('/alterar/{id}', 'CrudController@alterar');

