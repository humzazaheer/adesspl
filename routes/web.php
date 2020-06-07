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
Route::get('/admin/work_experience', 'AdminPageController@experience')->name('admin.experience');
Route::get('/admin/gallery', 'AdminPageController@gallery')->name('admin.gallery');

//client controller

Route::get('/admin/clients', 'ClientController@index')->name('clientData.admin');
Route::post('/admin/clients/store', 'ClientController@store')->name('clientStore');
Route::get('/admin/edit_client/{client}', 'ClientController@edit')->name('clientEdit');
Route::put('/admin/edit_client/{client}', 'ClientController@update')->name('clientUpdate');
Route::put('/admin/clients/{client}', 'ClientController@destroy')->name('clientDelete');

//experience controller

Route::get('/admin/experience', 'ExperienceController@index')->name('expData.admin');
Route::post('/admin/experience/store', 'ExperienceController@store')->name('expStore');
Route::get('/admin/edit_experience/{exp}', 'ExperienceController@edit')->name('expEdit');
Route::put('/admin/edit_experience/{exp}', 'ExperienceController@update')->name('expUpdate');
Route::put('/admin/experience/{exp}', 'ExperienceController@destroy')->name('expDelete');

