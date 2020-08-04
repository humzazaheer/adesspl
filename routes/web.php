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
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/sendMail', 'PageController@sendMail');
Route::get('/solutionservice', 'PageController@solutionservice');
Route::get('/workshop', 'PageController@workshop');
Route::get('/gallery', 'PageController@gallery');
Route::get('/project_gallery/{gallery}', 'PageController@project_gallery');
Route::get('/experience', 'PageController@experience');
Route::get('/career', 'PageController@career');
Route::get('/qhse', 'PageController@qhse');
//solution & services pages
Route::get('/turnkey_epc_project', 'PageController@turnkey_epc_project');
Route::get('/fabrication_and_plant_eraction', 'PageController@fabrication_and_plant_eraction');
Route::get('/installation_and_commissioning_of_plant_machinery', 'PageController@installation_and_commissioning_of_plant_machinery');
Route::get('/o_m_services', 'PageController@o_m_services');
Route::get('/manufacturing_of_machine_element', 'PageController@manufacturing_of_machine_element');
Route::get('/overhauling_of_diesel_engine_and_parts', 'PageController@overhauling_of_diesel_engine_and_parts');
Route::get('/design_engineering', 'PageController@design_engineering');
Route::get('/project_management_consultancy', 'PageController@project_management_consultancy');
Route::get('/plant_maintenance_and_turnaround', 'PageController@plant_maintenance_and_turnaround');
Route::get('/infrastructure_and_mep', 'PageController@infrastructure_and_mep');
Route::get('/manpower_supply', 'PageController@manpower_supply');
Route::get('/equipment_on_rent', 'PageController@equipment_on_rent');


//admin controller

Route::get('/admin', 'AdminPageController@dashboard')->name('admin.dashboard');
Route::get('/admin/clients', 'AdminPageController@clients')->name('admin.clients');
Route::get('/admin/work_experience', 'AdminPageController@experience')->name('admin.experience');
Route::get('/admin/gallery', 'AdminPageController@gallery')->name('admin.gallery');
Route::get('/admin/profile', 'AdminPageController@profile')->name('profile');
Route::put('/admin/profile/{profile}', 'AdminPageController@update_password')->name('updatePassword');
Route::put('/admin/profile', 'AdminPageController@update_profile')->name('updateProfile');

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

//gallery controller

Route::get('/admin/gallery', 'GalleryController@index')->name('galleryData.admin');
Route::post('/admin/gallery/store', 'GalleryController@store')->name('galleryStore');
Route::get('/admin/edit_gallery/{gallery}', 'GalleryController@edit')->name('galleryEdit');
Route::put('/admin/edit_gallery/{gallery}', 'GalleryController@update')->name('galleryUpdate');
Route::put('/admin/gallery/{gallery}', 'GalleryController@destroy')->name('galleryDelete');

Auth::routes();
