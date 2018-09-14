<?php

Route::get('/', 'CrudController@index');
Route::get('/cadastro', 'CrudController@cadastroPage');
Route::post('/cadastrar', 'CrudController@cadastrar');
Route::get('/deletar/{id}', 'CrudController@delete');
Route::get('/alterar/{id}', 'CrudController@alterarPage');
Route::any('/update/{id}', 'CrudController@update');

