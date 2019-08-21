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
Route::get('kullanici/urundetay/{id}','Kullanici\UrunController@index')->name('kullanici.urundetay');
Route::get('benzer/urunler','Kullanici\UrunController@benzer_urunler')->name('benzer.urunler');


Route::patch('sepet/guncelle/{rowid}','Kullanici\SepetController@guncelle');
Route::patch('sepet/kaldir/{rowid}','Kullanici\SepetController@kaldir');

Route::get('kullanici/odeme','Kullanici\OdemeController@index')->name('kullanici.odeme');
Route::get('kullanici/hakkimizda','Kullanici\AnasayfaController@hakkimizda')->name('kullanici.hakkimizda');

Route::group(['middleware'=>'auth'],function(){
Route::get('odeme/yap','Kullanici\OdemeController@odeme')->name('odeme.yap');
});

Route::group(['prefix'=>'kullanici'],function(){
    Route::get('/oturumac','Kullanici\KullaniciController@giris_form')->name('kullanici.oturumac');
    Route::post('/oturumac','Kullanici\KullaniciController@giris');
	  Route::get('/kaydol','Kullanici\KullaniciController@kaydol_form')->name('kullanici.kaydol');
    Route::post('/kaydol','Kullanici\KullaniciController@kaydol');
    Route::post('/giris','Kullanici\KullaniciController@giris')->name('kullanici.giris');
    Route::get('/cikis','Kullanici\KullaniciController@cikis')->name('kullanici.cikis');
    Route::get('/aktiflestir/{anahtar}','Kullanici\KullaniciController@aktiflestir')->name('aktiflestir');
});
	
 Route::group(['prefix'=>'sepet'],function(){
   Route::get('/','Kullanici\SepetController@index')->name('kullanici.sepet');
   Route::get('/ekle/{id}','Kullanici\SepetController@ekle')->name('sepet.ekle');
   Route::delete('/kaldir/{rowid}','Kullanici\SepetController@kaldir')->name('sepet.kaldir');

});



Route::get('/arama','Kullanici\UrunController@arama')->name('urun_arama');



Auth::routes();

Route::get('/test', function(){
	$kullanici=\App\User::find(7);
return new App\Mail\KullaniciKayitMail($kullanici);

});
