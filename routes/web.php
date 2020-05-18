<?php

use Illuminate\Support\Facades\Route;

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



//page controller
Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::get('/solutionservice', 'PageController@solutionservice');
Route::get('/workshop', 'PageController@workshop');
Route::get('/gallery', 'PageController@gallery');
Route::get('/experience', 'PageController@experience');

//admin controller

Route::get('/admin', 'AdminPageController@dashboard');
Route::get('/admin/clients', 'AdminPageController@clients')->name('admin.clients');

//client controller

Route::get('/admin/clients', 'ClientController@index')->name('clientData');
Route::post('/admin/clients/store', 'ClientController@store')->name('clientStore');
Route::post('/admin/clients', 'ClientController@destroy')->name('clientDelete');
Route::get('/admin/edit_client/{client}', 'ClientController@edit')->name('clientEdit');


