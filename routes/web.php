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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'types'], function () {
  Route::get('/','NoteTypeController@index')->name('types.index');
  Route::get('/create','NoteTypeController@create')->name('types.create');
  Route::post('/create','NoteTypeController@store')->name('types.store');
  Route::get('/{id}/edit','NoteTypeController@edit')->name('types.edit');
  Route::post('/{id}/edit','NoteTypeController@update')->name('types.update');
  Route::get('/{id}/destroy','NoteTypeController@destroy')->name('types.destroy');
});
Route::group(['prefix' => 'notes'], function () {
  Route::get('/','NoteController@index')->name('notes.index');
  Route::get('/create','NoteController@create')->name('notes.create');
  Route::post('/create','NoteController@store')->name('notes.store');
  Route::get('/{id}/show','NoteController@show')->name('notes.show');
  Route::get('/{id}/edit','NoteController@edit')->name('notes.edit');
  Route::post('/{id}/edit','NoteController@update')->name('notes.update');
  Route::get('/{id}/destroy','NoteController@destroy')->name('notes.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
