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

Route::get('/Forma', function () {
    return view('Forma');
})->name('Forma');

Route::get('/Users', function () {
    return view('Users');
})->name('Users');

Route::get('/', function () {
    return view('Main');
})->name('Main');

Route::get ('/Users', 'FormaController@allData')->name('users-data');
Route::get ('/Users/{id}/delete', 'FormaController@deleteOne')->name('delete-one');
Route::post('/Forma/submit', 'FormaController@submit')->name('forma-form');

Route::get ('/', 'newsController@allData')->name('news-data');
Route::get ('/Main/{id}', 'newsController@ShowOneNews')->name('News-One');
