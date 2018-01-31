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

Route::get('/',[
    'uses'=>'SuperMarketController@index',
    'as'=>'/'
]);

Route::get('/Contact-Us',[
    'uses'=>'SuperMarketController@contact',
    'as'=>'contact'
]);

Route::get('/Groceries',[
    'uses'=>'SuperMarketController@groceries',
    'as'=>'groceries'
]);


Route::get('/offers',[
    'uses'=>'SuperMarketController@offers',
    'as'=>'offers'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('category/add',[
    'uses'=>'CategoryController@index',
    'as'=>'add-category'
]);

Route::post('category/save',[
    'uses'=>'CategoryController@saveCategoryInfo',
    'as'=>'new-category'
]);
