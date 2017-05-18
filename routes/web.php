<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('/tasks', 'TaskController');
// Route::get('/tasks/create', 'TaskController@create');
// Route::get('/tasks', 'TaskController@index');
// Route::get('/tasks/{id}', 'TaskController@show');
// Route::post('/tasks', 'TaskController@store');


//Route::resource('/tasks', 'TaskController');
//Route::resource('/students', 'StudentController');
