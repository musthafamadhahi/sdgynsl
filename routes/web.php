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
Route::get('/members_view', 'MembersViewController@index');
Route::post('members_view/fetch', 'MembersViewController@fetch')->name('membersview.fetch');


Route::post('/message', 'MsgController@store');
Route::get('/admin/view_messages', 'MsgController@index');