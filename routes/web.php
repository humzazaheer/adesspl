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




Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::get('/solutionservice', 'PageController@solutionservice');
Route::get('/workshop', 'PageController@workshop');
Route::get('/gallery', 'PageController@gallery');
Route::get('/experience', 'PageController@experience');
Route::get('/admin', 'AdminPageController@dashboard');
Route::get('/admin/clients', 'AdminPageController@clients')->name('clients');
Route::get('/admin/clients', 'ClientController@index')->name('clientData');
Route::post('/admin/clients', 'ClientController@store')->name('clientStore');


