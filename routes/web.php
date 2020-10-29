<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
// Route::get('/team', 'App\Http\Controllers\TeamController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/antrian', 'AntrianController@index')->name('antrian');
Route::get('/antrian/create', 'AntrianController@create')->name('antrian.create');
Route::post('/antrian', 'AntrianController@store')->name('antrian.store');
Route::get('/antrian/{antrian}/edit', 'AntrianController@edit')->name('antrian.edit');
Route::patch('/antrian/{antrian}', 'AntrianController@update')->name('antrian.update');
Route::delete('/antrian/{antrian}', 'AntrianController@destroy')->name('antrian.destroy');

Route::get('/asuransi', 'AsuransiController@index')->name('asuransi.index');
Route::get('/asuransi/create', 'AsuransiController@create')->name('asuransi.create');
Route::get('/asuransi/cari', 'AsuransiController@cari')->name('asuransi.cari');
Route::post('/asuransi', 'AsuransiController@store')->name('asuransi.store');
Route::delete('/asuransi/{asuransi}', 'AsuransiController@destroy')->name('asuransi.destroy');
Route::get('/asuransi/{asuransi}/edit', 'AsuransiController@edit')->name('asuransi.edit');
Route::patch('/asuransi/{asuransi}', 'AsuransiController@update')->name('asuransi.update');

// Route::get('/rawatjalan', 'RawatjalanController@index')->name('rawatjalan.index');


Route::get('/about', function () {
    return view('about');
})->name('about');
