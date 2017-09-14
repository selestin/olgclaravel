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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'HomeController@admin');
Route::get('/calender', 'PhotoController@index');
Route::get('/events', 'EventController@index');
Route::get('/flot', 'HomeController@flot');
Route::get('/morris', 'HomeController@morris');
Route::get('/tables', 'HomeController@tables');

Route::get('/forms', 'HomeController@forms');
Route::get('/panels_wells', 'HomeController@panels_wells');
Route::get('/buttons', 'HomeController@buttons');
Route::get('/notifications', 'HomeController@notifications');
Route::get('/typography', 'HomeController@typography');
Route::get('/icons', 'HomeController@icons');
Route::get('/grid', 'HomeController@grid');
Route::get('/icons', 'HomeController@icons');
Route::get('/icons', 'HomeController@icons');
Route::get('/icons', 'HomeController@icons');
Route::get('/icons', 'HomeController@icons');

Route::get('/parishioner', 'ParishionerController@index');









