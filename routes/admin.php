<?php

Route::group(['prefix' => 'admin'], function () {

	Route::get('login', 'AdminAuth@login')->name('admin_login');
	Route::post('login', 'AdminAuth@dologin')->name('admin_login');
	Route::get('forgot/password', 'AdminAuth@forgot_password')->name('admin_forgot_password');
	Route::post('forgot/password', 'AdminAuth@forgot_password_post')->name('admin_forgot_password');
	Route::get('reset/password/{token}', 'AdminAuth@reset_password');
	Route::post('reset/password/{token}', 'AdminAuth@reset_password_post');

	Route::group(['middleware' => 'admin:admin'], function () {

		Route::any('logout', 'AdminAuth@logout');

		Route::get('/admin/{id}/delete', 'AdminController@destroy');
		Route::get('/admin/reports', 'AdminController@problems');
		Route::resource('/admin', 'AdminController');
		Route::get('/admin', 'AdminController@search')->name('admin.index');

	});

});
