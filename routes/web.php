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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('kategori_artikel/trash', 'KategoriArtikelController@trash')->name('kategori_artikel.trash');
Route::resource('kategori_artikel', 'KategoriArtikelController');


Route::get('kategori_berita/trash', 'KategoriBeritaController@trash')->name('kategori_berita.trash');
Route::resource('kategori_berita', 'KategoriBeritaController');


Route::get('kategori_galeri/trash', 'KategoriGaleriController@trash')->name('kategori_galeri.trash');
Route::resource('kategori_galeri', 'KategoriGaleriController');


Route::get('kategori_pengumuman/trash', 'KategoriPengumumanController@trash')->name('kategori_pengumuman.trash');
Route::resource('kategori_pengumuman', 'KategoriPengumumanController');


Route::get('artikel/trash', 'ArtikelController@trash')->name('artikel.trash');
Route::resource('artikel', 'ArtikelController');


Route::get('berita/trash', 'BeritaController@trash')->name('berita.trash');
Route::resource('berita', 'BeritaController');


Route::get('galeri/trash', 'GaleriController@trash')->name('galeri.trash');
Route::resource('galeri', 'GaleriController');


Route::get('pengumuman/trash', 'PengumumanController@trash')->name('pengumuman.trash');
Route::resource('pengumuman', 'PengumumanController');


Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');