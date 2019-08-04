<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KullaniciController extends Controller
{
      public function giris_form(){

    	return view('kullanici.oturumac');
    }

    public function kaydol_form(){

    	return view('kullanici.kaydol');
    }


   
}
