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

    
    public function kaydol_form(){

    	return view('kullanici.kaydol');
    }

    public function kaydol(){ 

        $this->validate(request(),[
               'first_name'=>'required|min:5|max:60',
               'email'=>'required|email|unique:users'
       
            ]);
            
    $users=User::create([
             'first_name'=>request('first_name'),
             'last_name'=>request('last_name'),
	           'email'=>request('email'),
	           'password'=>Hash::make(request('password')),
	           'aktivasyon_anahtari'=>Str::random(60),
	           'aktif_mi'=>0,
             'permissions'=>0
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
          $users=User::where('aktivasyon_anahtari',$anahtar)->first();
          if(!is_null($users))
          {   
            $users->aktivasyon_anahtari=null;
            $users->aktif_mi=1;
            $users->save();
              return redirect()->to('/')->with('mesaj','Kullanici kaydınız aktifleştirildi...')->with('mesaj_tur','success');
          }else{
             return redirect()->to('/')->with('mesaj','Kullanici kaydınız aktifleştirilemedi...')->with('mesaj_tur','warning');
          }
      }

      public function giris()
      {     

          $this->validate(request(),[
                'email'=>'required|email',
                'password'=>'required'
          ]);
             $credentials=[
              'email'=>request('email'),
              'password'=>request('password')
             
             ];
               
            if(auth()->attempt($credentials))
            {
                
                  return  redirect()->intended('/');//giriş yapmadan herhangi bir sayfaya gitmek isterse dogrudan oturum ac sayfasına yonlendiriyor giriş yapıncada istedigisayfaya otamatik gidiyor (intended )ile
            }else{
                
              $errors=['email'=>'hatali giriş'];
              return back()->withErrors($errors);
            }
   }
}
