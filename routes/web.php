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
    return view('admin.index');
});


//Route::get('/a',function (){
//    $name = 'sanaulla';
//    return 'Hello '.$name;
//});


//Route::get('/',function(){
//    return view('admin.context');
//});


//Route::get('/','StudentController@index');

//Route::get('/',[
//    'uses'=>'StudentController@index',
//    'as'=>'/'
//]);
//Route::get('/',[
//    'uses'=>'StudentController@create',
//    'as'=>'/a'
//]);