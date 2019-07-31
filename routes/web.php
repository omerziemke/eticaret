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


Route::get('/','Kullanici\AnasayfaController@anasayfa')->name('kullanici.anasayfa');
Route::get('kullanici/yenisezon','Kullanici\AnasayfaController@index')->name('kullanici.yenisezon');
Route::get('kullanici/urundetay','Kullanici\UrunController@index')->name('kullanici.urundetay');
Route::get('kullanici/sepet','Kullanici\SepetController@index')->name('kullanici.sepet');
Route::get('kullanici/odeme','Kullanici\OdemeController@index')->name('kullanici.odeme');
Route::get('kullanici/hakkimizda','Kullanici\AnasayfaController@hakkimizda')->name('kullanici.hakkimizda');

Route::group(['prefix'=>'kullanici'],function(){
    Route::get('/oturumac','Kullanici\KullaniciController@giris_form')->name('kullanici.oturumac');
	Route::get('/kaydol','Kullanici\KullaniciController@kaydol_form')->name('kullanici.kaydol');
});
	