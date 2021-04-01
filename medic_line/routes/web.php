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

Route::get('/contact-us', 'ContactsController@create')->name('contacts.create');
Route::post('/contact-us', 'ContactsController@store')->name('contacts.store');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/contacts', 'ContactsController@index')->name('contacts');
