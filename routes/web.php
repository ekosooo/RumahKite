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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');
Route::resource('admin', 'AdminController');
Route::get('add/admin', 'AdminController@add')->name('admin.add');
Route::resource('company', 'CompanyController');
Route::get('add/company', 'CompanyController@add')->name('company.add');
Route::resource('user', 'UserController');
Route::resource('tanah', 'TanahController');
Route::get('add/tanah', 'TanahController@add')->name('tanah.add');
Route::get('add/gambar', 'TanahController@gambar')->name('gambar.add');
Route::post('tanah/gambar', 'TanahController@addgambar')->name('gambar.store');
Route::resource('kategori', 'KategoriController');
Route::resource('area', 'AreaController');
Route::get('add-area', 'AreaController@add')->name('area.add');