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

Route::get('/admin','ReportController@index');

Route::resource('report', 'ReportController');

Route::resource('region', 'RegionController');

Route::resource('country', 'CountryController');

Route::resource('grade', 'GradeController');

Route::resource('major', 'MajorController');

Route::resource('scholar', 'ScholarController');

Route::resource('university', 'UniversityController');

Route::post('getregion', 'CountryController@getregions')->name('getregion');

//frontend

Route::get('/', 'FrontendController@index');

Route::get('about','AboutController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact','ContactController@index');

Route::resource('courses','CourseController');

Route::resource('enrollment','EnrollmentController');

Auth::routes();

Route::resource('mail', 'MailController');

Route::get('send/email', 'MailController@sendemail');

Route::post('/getforms','ScholarController@getforms');