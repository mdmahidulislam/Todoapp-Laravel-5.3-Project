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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new',[
	'uses'=>'PagesController@new'

]);

Route::get('/todos',[
	'uses'=>'TodosController@index'

])->name('todos'); 


Route::get('/todo/delete/{id}',[

	'uses'=>'TodosController@delete'

	//'as'=> 'todo.delete'


])->name('todo.delete');


Route::get('/todo/update/{id}',[

	'uses'=>'TodosController@update'

	//'as'=> 'todo.delete'


])->name('todo.update');


Route::post('/todo/save/{id}',[

	'uses'=>'TodosController@save'

	//'as'=> 'todo.delete'


])->name('todo.save');



Route::post('/create/todo',[

	'uses'=>'TodosController@store'

]);

Route::get('/todos/completed/{id}',[

	'uses'=>'TodosController@completed'

	//'as'=> 'todo.delete'


])->name('todos.completed');
