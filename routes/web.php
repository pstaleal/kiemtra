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


Route::group(['namespace' => 'Backend'], function () {
Route::get('list','NewsController@index')->name('getList');
Route::get('add','NewsController@create')->name('getAdd');
Route::post('add','NewsController@store')->name('postAdd');
Route::get('edit/{id}','NewsController@edit')->name('getEdit');
Route::post('edit/{id}','NewsController@update')->name('postEdit');
Route::get('delete/{id}','NewsController@destroy')->name('getDelete');
Route::get('/','NewsController@frontend', function () {
    return view('frontend.index');
});
});
