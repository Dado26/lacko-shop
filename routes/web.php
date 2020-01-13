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

Route::group(['middleware' => 'guest'], function () {
    Route::get('lackoadmin', 'AuthController@loginForm')->name('admin.login');
    Route::post('login', 'AuthController@loginAttempt')->name('admin.login_attempt');
});

Route::group(['middleware' => 'auth'], function () {

Route::get('logout', 'AuthController@logOut')->name('logout');

Route::get('/gallery', 'GalleryController@index')->name('index.gallery');
Route::post('/gallery', 'GalleryController@store')->name('gallery.store');
Route::delete('/gallery/{gallery}', 'GalleryController@destroy')->name('gallery.delete');
Route::put('/gallery/update/{gallery}', 'GalleryController@update')->name('gallery.update');

Route::get('/create-picture', 'PictureController@create')->name('picture.create');
Route::post('/picture', 'PictureController@store')->name('picture.store');
Route::get('/pictures/{gallery}', 'PictureController@index')->name('pictures.index');
Route::put('/picture/{picture}', 'PictureController@update')->name('picture.update');
Route::get('/picture/{picture}', 'PictureController@destroy')->name('picture.delete');
Route::get('/picture/{gallery}/{picture}', 'PictureController@edit')->name('picture.edit');

Route::get('/news', 'NewsController@index')->name('news.index');
Route::post('/news', 'NewsController@store')->name('news.store');
Route::get('/news-edit/{new}', 'NewsController@edit')->name('news.edit');
Route::put('/news-edit/{new}', 'NewsController@update')->name('news.update');
Route::delete('/news-delete/{new}', 'NewsController@destroy')->name('news.delete');

});








