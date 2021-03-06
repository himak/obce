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

use Sunra\PhpSimple\HtmlDomParser;

Route::get('/', 'CityController@index')->name('city.index');
Route::post('/', 'CityController@search')->name('city.search');

Route::get('/city/{city}', 'CityController@show')->name('city.show');

Route::get('search', 'SearchController@index')->name('search');
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');
