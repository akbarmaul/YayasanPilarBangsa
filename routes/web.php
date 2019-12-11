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

// visitor's and user's view for seeing
Route::get('/', 'PilarController@index')->name('dashboard');
Route::get('/portfolio', 'PilarController@portfolio_Index')->name('portfolio');
Route::get('/about', 'PilarController@about_Index')->name('about');

Route::get('/services', 'ServiceController@index')->name('service');
Route::get('/services/konstruksi-bangunan', 'ServiceController@konstruksi_Index')->name('service.konstruksi');
Route::get('/services/mekanikal-dan-elektrikal', 'ServiceController@mekanikal_Index')->name('service.mekanikal');
Route::get('/services/tailor', 'ServiceController@tailor_Index')->name('service.tailor');
Route::get('/services/teknologi-informasi', 'ServiceController@ti_Index')->name('service.ti');
Route::get('/services/welding', 'ServiceController@welding_Index')->name('service.welding');
Route::get('/services/sektor-pendukung', 'ServiceController@support_Index')->name('service.support');

Route::get('/blog', 'PilarController@blog_Index')->name('blog');
Route::get('/contact', 'PilarController@contact_Index')->name('contact');


// login view
Route::get('/admin', 'UserController@Index')->name('admin');
Route::get('/admin/login', 'UserController@login')->name('admin.login');
Route::post('/admin/login', 'UserController@postLogin')->name('admin.postLogin');

Route::post('/admin/logout', 'UserController@postLogout')->name('admin.postLogout');

Route::group(['middleware' => 'admin'], function() {
    // Route::get('/admin/', function(){
    //     return redirect()->route('pilar.admin.dashboard');
    // });

    Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/admin/portfolio/add', 'portfolio\AlbumsController@create')->name('admin.album.create');
    Route::post('/admin/portfolio/store', 'portfolio\AlbumsController@store')->name('admin.album.store');
    Route::get('/admin/portfolio/list', 'portfolio\AlbumsController@album_List')->name('admin.album.list');
    Route::get('/admin/portfolio/list/edit/{id}', 'portfolio\AlbumsController@edit') ->name('admin.album.edit');
    Route::get('/admin/portfolio/show', 'portfolio\AlbumsController@show') ->name('admin.album.show');
    Route::put('/admin/portfolio/list/{id}', 'portfolio\AlbumsController@update') ->name('admin.album.update');
    Route::delete('/admin/portfolio/list/delete/{id}','portfolio\AlbumsController@delete')->name('admin.album.delete');

    Route::get('/admin/portfolio/list/upload/{id}', 'portfolio\PhotosController@create')->name('admin.photo.create');
    Route::post('/admin/portfolio/list/store', 'portfolio\PhotosController@store')->name('admin.photo.store');
    Route::get('/admin/portfolio/list/photo/{ad}', 'portfolio\PhotosController@photo_List')->name('admin.photo.list');
    Route::delete('/admin/portfolio/list/photo/delete/{id}','portfolio\PhotosController@delete')->name('admin.photo.delete');
    
});

