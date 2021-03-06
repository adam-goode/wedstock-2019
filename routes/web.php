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
Route::post('enquiry/submit', 'EnquiryController@store');

Route::get('/', 'PageController@index');
Route::get('/{slug}', 'PageController@view');