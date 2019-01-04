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
Route::get('/contact_us', function () {
    return view('/contact_us');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/allmembers', 'MemberController@showall')->name('home');
Route::post('/allmembers/update', 'MemberController@update')->name('home');

Route::get('/members_view', 'MembersViewController@index');
Route::post('members_view/fetch', 'MembersViewController@fetch')->name('membersview.fetch');



Route::get('/uploadevents', 'EventController@uploadevents');
Route::post('/upload', 'EventController@upload');
Route::get('/updateevents', 'EventController@updateevents');
Route::post('/update', 'EventController@update');

Route::get('/events', 'EventController@showall');


Route::post('/contact_us', 'MessageController@store');
Route::get('/admin/view_messages', 'MessageController@index');

