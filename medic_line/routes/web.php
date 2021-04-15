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

Route::get('/', 'PagesController@index')->name('home');


Route::get('/features', 'PagesController@features')->name('features');
Route::get('/testimonials', 'PagesController@testimony')->name('testimonials');
Route::get('/subscriptions', 'PagesController@sub')->name('sub');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');


Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@services')->name('services');
Route::get('/staff', 'PagesController@staff')->name('staff');

Route::get('/make-appointment', 'AppointmentController@create')->name('appointment.create');
Route::post('/make-appointment', 'AppointmentController@store')->name('appointment.store');

Route::get('/contact-us', 'ContactsController@create')->name('contacts.create');
Route::post('/contact-us', 'ContactsController@store')->name('contacts.store');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin')->name('admin');

Route::get('/appointments', 'AppointmentController@index')->name('appointments.index');
Route::get('/appointments/{appointment}', 'AppointmentController@show')->name('showappointment');
Route::get('/appointments/{appointment}/delete', 'AppointmentController@destroy')->name('delete');


Route::get('/contacts', 'ContactsController@index')->name('contacts.index');
Route::get('/contacts/{contact}', 'ContactsController@show')->name('showcontact');
Route::get('/contacts/{contact}/delete', 'ContactsController@destroy')->name('delete');
