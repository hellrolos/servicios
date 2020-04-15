<?php
//login functions
Route::get('/','Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//resetPasswordsForgotten
Route::get('password-reset', 'PasswordsController@showForm')->name('passform');
Route::post('passwordreset', 'PasswordsController@sendResetLink')->name('resetlink');
Route::get('reset-password/{token}', 'PasswordsController@showResetForm')->name('resetform');
Route::post('reset-password', 'PasswordsController@resetPassword')->name('resetpass');
//Navigation of URL
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('password', 'DashboardController@password')->name('password');
Route::post('passwordnew', 'DashboardController@newpassword')->name('passwordnew');
Route::get('solicitud', 'DashboardController@solicitud')->name('solicitud');
Route::get('admin/user', 'AdminController@user')->name('user');
Route::get('admin/updateuser', 'AdminController@updateuser')->name('update');
Route::get('admin/users', 'AdminController@users')->name('users');
Route::get('computo/asignar', 'ComputoController@asignar')->name('asignar');
Route::get('computo/listado', 'ComputoController@listado')->name('listado');
Route::get('computo/aprobado', 'ComputoController@aprobado')->name('aprobado');
Route::get('computo/liberacion', 'ComputoController@liberacion')->name('liberado');
Route::get('depto/verificacion', 'DeptosController@verificacion')->name('verificado');
