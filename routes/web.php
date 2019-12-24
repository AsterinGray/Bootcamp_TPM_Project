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

Route::get('/member/create', 'MemberController@create');
Route::post('/member', 'MemberController@store');
Route::resource('members', 'MemberController');
Route::get('/member/index', 'MemberController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/group', 'GroupController@index');
Route::get('/group/{id}/edit', 'GroupController@edit')->name('group.edit');
Route::get('/group/{id}/show', 'GroupController@show')->name('group.show');
Route::get('/group/create', 'GroupController@create')->name('group.create');
Route::post('group/store', 'GroupController@store')->name('group.store');