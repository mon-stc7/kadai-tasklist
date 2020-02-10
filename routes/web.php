<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//TopページをTasksControllerのindexアクションに設定
Route::get('/', 'TasksController@index');

//7つの基本ルーティングの省略形
Route::resource('tasks', 'TasksController');