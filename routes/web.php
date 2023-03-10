<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/', 'AuthController@loginForm')->name('admin.login');
        Route::post('/login', 'AuthController@loginAttempt')->name('admin.login_attempt');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', 'AuthController@logOut')->name('logout');

        Route::get('/gallery', 'GalleryController@index')->name('index.gallery');
        Route::post('/gallery', 'GalleryController@store')->name('gallery.store');
        Route::delete('/gallery/{gallery}', 'GalleryController@destroy')->name('gallery.delete');
        Route::put('/gallery/update/{gallery}', 'GalleryController@update')->name('gallery.update');

        Route::post('/gallery/picture', 'PictureController@store')->name('picture.store');
        Route::get('/gallery/{gallery}/pictures', 'PictureController@index')->name('pictures.index');
        Route::get('/pictures/{picture}', 'PictureController@destroy')->name('picture.delete');

        Route::get('/news', 'NewsController@index')->name('news.index');
        Route::post('/news', 'NewsController@store')->name('news.store');
        Route::get('/news/{news}/edit', 'NewsController@edit')->name('news.edit');
        Route::put('/news/{news}/edit', 'NewsController@update')->name('news.update');
        Route::delete('/news/{news}/delete', 'NewsController@destroy')->name('news.delete');

        Route::get('/admins', 'AdminController@index')->name('admins.index');
        Route::get('/create', 'AdminController@create')->name('admin.create');
        Route::post('/admin', 'AdminController@store')->name('admin.store'); 
        Route::get('/admin/{admin}/edit', 'AdminController@edit')->name('admin.edit');
        Route::put('/admin/{admin}/edit', 'AdminController@update')->name('admin.update');
        Route::delete('/admin/{admin}/delete', 'AdminController@destroy')->name('admin.delete');
    });
});

Route::get('/o-nama', 'Front\FrontController@getAbout')->name('about');
Route::get('/kontakt', 'Front\FrontController@getContact')->name('contact');
Route::get('/aktuelnosti', 'Front\FrontController@getNews')->name('news');
Route::get('/vrste-radova', 'Front\FrontController@getType')->name('type');
Route::get('/galerija/{gallery?}', 'Front\FrontController@getGallery')->name('gallery');
Route::get('/', 'Front\FrontController@getIndex')->name('index');

Route::post('/kontakt', 'Front\ContactController@sendEmail')->name('email');






