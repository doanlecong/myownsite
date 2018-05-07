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
Route::get('/404.html   ', function (){
    return view('layouts.admin.404');
})->name('404');
Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/lien-he.html', function () {
    return view('lienhe');
})->name('lienhe');

Route::get('/my-blog.html', function () {
    return view('myblog');
})->name('myblog');

Route::get('/serie-baiviet.html', function() {
    return view('serie');
})->name('serie-bv');

Route::get('/dich-vu.html', function () {
    return view('dichvu');
})->name('dichvu');

Route::get('/chuyen-de.html', function() {
    return view('chuyende');
})->name('chuyende');

Route::get('/gioi-thieu.html', function() {
    return view('gioithieu');
})->name('gioithieu');
Route::get('/logout', function() {
    auth()->logout();
    return redirect('/');
})->name('logout');

Route::resource('items', 'ItemController');
Route::post('/dich-vu', 'ServiceContactController@store')->name('dichvu.store');
Route::get('getImagePublic/{filename}/{place}', 'ImagePublicController@showImage')->name('getImagePublic');

Route::post('lienhe/store','LienHeController@store')->name('lienhe.store');
//For bên front end dich vu lien he //

Route::middleware('auth')->prefix('authorized')->group(function () {
    Route::get('lienhe/', 'LienHeController@index')->name('lienhe.index');
    Route::get('lienhe/{id}/dadoc','LienHeController@doclienhe')->name('lienhe.dadoc');
    Route::get('lienhe/{id}/delete','LienHeController@delete')->name('lienhe.delete');
});

Route::prefix('authorized')->group(function() {

    Route::get('/get_dich_vu','ServiceContactController@index')->name('dichvu.index');
    Route::get('view_dich_vu/{id}','ServiceContactController@show')->name('dichvu.show');
    Route::get('mail_dich_vu/{id}','ServiceContactController@reply')->name('dichvu.reply');
    Route::post('mail_dich_vu/{id}','ServiceContactController@saveMail')->name('dichvu.saveMail');
    Route::get('delete_dich_vu/{id}','ServiceContactController@delete')->name('dichvu.delete');

    Route::resource('typepost','TypePostController');
    Route::get('typepost/{id}/delele', 'TypePostController@delete')->name('typepost.delete');

    Route::resource('tag', 'TagController');
    Route::get('tag/{id}/delele', 'TagController@delete')->name('tag.delete');

    Route::resource('topic', 'TopicController');
    Route::get('topic/{id}/delete', 'TopicController@delele')->name('topic.delete');
    Route::get('topic/{filename}/image','TopicController@getImageTopic')->name('topic.getImage');


    Route::resource('file-management', 'FileManagementController');
    Route::get('file-management/{id}/delete','FileManagementController@delete')->name('file-management.delete');

    Route::get('getFileStoragePrivate/{id}', 'FileServiceController@show')->name('getFileStoragePrivate');
    Route::get('/admin', 'HomeController@index')->name('admin');
});
Auth::routes();

