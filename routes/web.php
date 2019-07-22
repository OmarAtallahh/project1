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

app()->setlocale('ar');

Route::get('/', function () {
	return view('main.index');
});

Route::group(['middleware' => 'notauth'], function () {

	Route::get('/login', 'UserAuth@getLogin')->name('login');
	Route::post('/login', 'UserAuth@login')->name('login');

	Route::get('/register', 'UserAuth@getRegister')->name('register');
	Route::post('/register', 'UserAuth@register')->name('register');

	Route::get('/doctor/register', 'UserAuth@getDoctorRegister')->name('doctor_register');
	Route::post('/doctor/register', 'UserAuth@doctor_register')->name('doctor_register');

});

Route::group(['middleware' => 'user'], function () {

	Route::get('/logout', 'UserAuth@logout')->name('logout');

	
// Route::get('/main','MainController@index');
Route::get('/main/about', 'MainController@tow');
Route::get('/main/TestData', 'MainController@four');

// Route::get('/main/index','MainController@interface');
/*-------------------------------------------------------------------------*/

/*-------------------------------------------------------------------------*/
Route::resource('/main/createReport', 'ReportController');
/*-------------------------------------------------------------------------*/
Route::resource('/main/statistics', 'StatisticsController');
/*-------------------------------------------------------------------------*/

Route::get('/doctor/{id}/delete', 'DoctorController@destroy');
Route::resource('/doctor', 'DoctorController');
Route::get('/doctor', 'DoctorController@search');




});

Route::resource('posts', 'PostsController');

Route::resource('articles', 'ArticlesController');

Route::get('/post-comments', 'PostCommentsController@index')->name('post-comments.index');
Route::post('/post-comments/{post}', 'PostCommentsController@store')->name('post-comments.store');
Route::delete('/post-comments/{comment}', 'PostCommentsController@destroy')->name('post-comments.destroy');
	
Route::get('/article-comments', 'ArticleCommentsController@index')->name('article-comments.index');
Route::post('/article-comments/{article}', 'ArticleCommentsController@store')->name('article-comments.store');
Route::delete('/article-comments/{comment}', 'ArticleCommentsController@destroy')->name('article-comments.destroy');