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

Route::get('/', 'HomesController@show');
Route::get('/admin','HomesController@admin'); 
Route::get('/profile','HomesController@companyProfile');
Route::get('login', 'LoginController@index');
Route::post('logout', 'LoginController@logout');
Route::resource('login','LoginController');
Route::get('about-us', 'HomesController@aboutUs');
Route::get('contact-us/', 'HomesController@contactUs');
Route::get('contact/email', 'HomesController@receiveEmail');
Route::get('quotation/email', 'HomesController@receiveQuotation');
Route::get('products/{product}', 'HomesController@products');
Route::get('feedback-form', 'HomesController@softwareQuoteForm');
Route::post('subscribe', 'HomesController@subscribe');
Route::get('property','HomesController@property');
