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

Route::get('/', 'PagesController@getIndex');
Auth::routes();

Route::get('factions','PagesController@getFactions');
Route::get('factions/view/{id}','PagesController@viewFaction');
Route::get('minis/view/{id}','PagesController@viewMini');

//Admin Section
Route::get('admin/factions', 'FactionsController@index');
Route::get('admin/add_faction', 'FactionsController@create');
Route::post('admin/add_faction','FactionsController@store');
Route::get('admin/edit_faction/{id}','FactionsController@edit');
Route::patch('admin/edit_faction/{id}','FactionsController@update');
Route::get('admin/stations', 'StationsController@index');
Route::get('admin/add_station', 'StationsController@create');
Route::post('admin/add_station','StationsController@store');
Route::get('admin/edit_station/{id}','StationsController@edit');
Route::patch('admin/edit_station/{id}','StationsController@update');
Route::get('admin/characteristics', 'CharacteristicsController@index');
Route::get('admin/add_characteristic', 'CharacteristicsController@create');
Route::post('admin/add_characteristic','CharacteristicsController@store');
Route::get('admin/edit_characteristic/{id}','CharacteristicsController@edit');
Route::patch('admin/edit_characteristic/{id}','CharacteristicsController@update');
Route::get('admin/keywords', 'KeywordsController@index');
Route::get('admin/add_keyword', 'KeywordsController@create');
Route::post('admin/add_keyword','KeywordsController@store');
Route::get('admin/edit_keyword/{id}','KeywordsController@edit');
Route::patch('admin/edit_keyword/{id}','KeywordsController@update');
Route::get('admin/minis', 'MinisController@index');
Route::get('admin/add_mini', 'MinisController@create');
Route::post('admin/add_mini','MinisController@store');
Route::get('admin/edit_mini/{id}','MinisController@edit');
Route::patch('admin/edit_mini/{id}','MinisController@update');
Route::get('admin/abilities', 'AbilitiesController@index');
Route::get('admin/add_abilitie', 'AbilitiesController@create');
Route::post('admin/add_abilitie','AbilitiesController@store');
Route::get('admin/edit_abilitie/{id}','AbilitiesController@edit');
Route::patch('admin/edit_abilitie/{id}','AbilitiesController@update');