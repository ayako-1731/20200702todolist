<?php

Route::get('/', function () {
  return view('welcome');
});

// 下記1行を追加
Route::resource('tasks', 'TasksController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');