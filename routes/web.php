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





Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

Route::get('/', function () {
    return view('localization');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

});


Route::namespace('BackEnd')->prefix('admin')->group(function(){

  Route::get('/home','Home@index');
  Route::resource('users','Users')->except(['show' , 'delete']);
  
});


