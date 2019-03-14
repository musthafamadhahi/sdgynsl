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
Route::get('/add_dc', function () {
    return view('/add_dc');
});
Route::get('/view_message', function () {
    return view('/view_message');
});
Route::get('/livestream', function () {
    return view('/livestream');
});
Route::get('/aboutUs', function () {
    return view('/aboutUs');
});
Route::get('/view_dc', function () {
    return view('/view_dc');
});
Route::get('/view_livestream', function () {
    return view('/view_livestream');
});
Route::get('/district', function () {
    return view('/district');
});
Route::get('/view_district', function () {
    return view('/view_district');
});
Route::get('/division', function () {
    return view('/division');
});
Route::get('/view_division', function () {
    return view('/view_division');
});
Route::get('/update_dc', function () {
    return view('/update_dc');
});
Route::get('/search_dc', function () {
    return view('/search_dc');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/allmembers', 'MemberController@showall')->name('home');
Route::post('/allmembers/update', 'MemberController@update')->name('home');
Route::get('/members', 'MemberController@showall')->name('home');
Route::post('/members/delete', 'MemberController@delete')->name('home');

Route::get('/members_view', 'MembersViewController@index');
Route::post('members_view/fetch', 'MembersViewController@fetch')->name('membersview.fetch');



Route::get('/uploadevents', 'EventController@uploadevents');
Route::post('/upload', 'EventController@upload');
Route::get('/updateevents', 'EventController@updateevents');
Route::post('/update', 'EventController@update');
Route::post('/view', 'EventController@view');


Route::get('/events', 'EventController@showall');
Route::post('/likeEvent', 'EventController@likeEvent')->name('like');


Route::post('/contact_us', 'MessageController@store');
Route::get('/view_messages', 'MessageController@index');
Route::post('/view_messages', 'MessageController@show');

Route::post('/add_dc', 'DcController@store');
Route::get('/view_dc', 'DcController@showall');
Route::post('/dc/delete', 'DcController@delete')->name('home');
Route::get('/update_dc', 'DcController@updatedc');
Route::post('/search', 'DcController@search');
Route::post('/dc/update', 'DcController@update');


Route::post('/livestream', 'LiveStreamController@store');
Route::get('/view_livestream', 'LiveStreamController@show')->name('home');
Route::post('/view_livestream/update', 'LiveStreamController@update')->name('home');

Route::post('/district', 'DistrictController@store');
Route::get('/view_district', 'DistrictController@show')->name('home');
Route::post('/view_district/delete', 'DistrictController@delete')->name('home');

Route::post('/division', 'DivisionController@store');
Route::get('/view_division', 'DivisionController@show')->name('home');
Route::post('/view_division/delete', 'DivisionController@delete')->name('home');
