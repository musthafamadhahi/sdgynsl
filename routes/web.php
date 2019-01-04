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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/allmembers', 'MemberController@showall')->name('home');

Route::post('/allmembers/update', 'MemberController@update')->name('home');

Route::get('/members_view', 'MembersViewController@index');
Route::post('members_view/fetch', 'MembersViewController@fetch')->name('membersview.fetch');


Route::get('/uploadevents', 'EventController@uploadevents');
Route::post('/upload', 'EventController@upload');
Route::get('/updateevents', 'EventController@updateevents');
Route::post('/update', 'EventController@update');

