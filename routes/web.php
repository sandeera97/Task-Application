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

Route::get('/tasks',function(){
    $data=App\Task::all();

        return view('task')->with('tasks',$data);
});

Route::post('/savetask','taskcontroller@store');

Route::get('/markascompleted/{id}','taskcontroller@updateTask');

Route::get('/notcompleted/{id}','taskcontroller@updateasnotcompleted');

Route::get('/delete/{id}','taskcontroller@deletetask');

Route::get('/update/{id}','taskcontroller@updatetaskview');

Route::post('/updatetaskdata','taskcontroller@updatedata');