<?php

namespace App\Http\Controllers\Kullanici;
use Illuminate\Support\Facades\Mail;
use App\Mail\KullaniciKayitMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Str;
use App\User;
use App\Models\Sepet;
use Illuminate\Database\Eloquent\SoftDeletes;

class KullaniciController extends Controller
{
      public function giris_form(){

    	 return view('kullanici.oturumac');
    }

     public function giris(){

    	   return redirect()->route('kullanici.anasayfa');

    }

    public function kaydol_form(){

    	return view('kullanici.kaydol');
    }

    public function kaydol(){ 
        $this->validate(request(),[
               'adsoyad'=>'required|min:5|max:60',
               'email'=>'required|email|unique:users'
               
            ]);

    $users=User::create([
               'adsoyad'=>request('adsoyad'),
	           'email'=>request('email'),
	           'sifre'=>Hash::make(request('sifre')),
	           'aktivasyon_anahtari'=>Str::random(60),
	           'aktif_mi'=>0
	             ]);
    Mail::to(request('email'))->send(new KullaniciKayitMail($users)); //mailin kime gidecegi, from() ise kimin gönderecegi
    auth()->login($users);

    return redirect()->route('kullanici.anasayfa');

    }


    public function cikis(){
    	    auth()->logout();
	    	request()->session()->flush();
	    	request()->session()->regenerate();
	    	return  redirect()->route('kullanici.anasayfa');
    }

     public function aktiflestir(string $anahtar)
      { 
          $kullanici=Kullanici::where('aktivasyon_anahtari',$anahtar)->first();
          if(!is_null($kullanici))
          {   
            $kullanici->aktivasyon_anahtari=null;
            $kullanici->aktif_mi=1;
            $kullanici->save();
              return redirect()->to('/')->with('mesaj','Kullanici kaydınız aktifleştirildi...')->with('mesaj_tur','success');
          }else{
             return redirect()->to('/')->with('mesaj','Kullanici kaydınız aktifleştirilemedi...')->with('mesaj_tur','warning');
          }
      }
   
}
