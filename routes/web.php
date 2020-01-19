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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/regis', function () {
    return view('regis');
});
Route::get('/userdb', function () {
    return view('user-db');
});
Route::get('/timeline', function () {
    return view('timeline');
});
Route::get('/admindb', function () {
    return view('admindb');
});
Route::get('/group/create', 'GroupController@create');
Route::post('/group', 'GroupController@store');
Route::resource('groups', 'GroupController');
Route::get('/group', 'GroupController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/payment', 'HomeController@payment')->name('payment');
Route::put('/edit/{user}', 'HomeController@update');
Route::put('/payment/{user}', 'HomeController@paymentUpdate');
Route::get('/edit', 'HomeController@edit');
Route::delete('/home/{user}','HomeController@destroy')->name('user.delete');
Route::get('/view/{user}', 'HomeController@show')->name('view');
Route::get('/storage/scores/{id}/{filename}', function(){})->name('score');
Route::get('/storage/ktps/{id}/{filename}', function(){})->name('ktp');
Route::get('/storage/cvs/{id}/{filename}', function(){})->name('cv');
Route::get('/storage/payments/{id}/{filename}', function(){})->name('payment.image');
