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



Auth::routes();

Route::get('/',['as'=>'landingPage','uses'=>'indexController@index']);

Route::group(['prefix'=>'/admin'],function (){
/*********************news crud begin************/
Route::get('/',['as'=>'admin.home','uses'=>'adminController@index']);
Route::post('/addNews',['uses'=>'adminController@create','as'=>'news.add']);
Route::get('/news',['uses'=>'adminController@fetch_data']);
Route::post('/news/edit/{id}',['uses'=>'adminController@edit','as'=>'news.edit']);
Route::post('/news/update/{id}',['uses'=>'adminController@update','as'=>'news.update']);
Route::post('/news/{id}/delete',['uses'=>'adminController@delete']);
/*********************news crud end************/
});



