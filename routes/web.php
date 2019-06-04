<?php

Route::get('/','Auth\LoginController@showLoginForm');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('password', 'DashboardController@password')->name('password');
Route::get('solicitud', 'DashboardController@solicitud')->name('solicitud');
Route::get('admin/user', 'AdminController@user')->name('user');
Route::get('admin/updateuser', 'AdminController@updateuser')->name('update');
Route::get('admin/users', 'AdminController@users')->name('users');
Route::get('computo/asignar', 'ComputoController@asignar')->name('asignar');
Route::get('computo/listado', 'ComputoController@listado')->name('listado');
Route::get('computo/aprobado', 'ComputoController@aprobado')->name('aprobado');
Route::get('computo/liberacion', 'ComputoController@liberacion')->name('liberado');
Route::get('depto/verificacion', 'DeptosController@verificacion')->name('verificado');
