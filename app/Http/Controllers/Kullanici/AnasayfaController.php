<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Urun;
class AnasayfaController extends Controller
{


    public function index(){
      
    	return view('kullanici.yenisezon');
    }


     public function anasayfa(){
       

        $urunler=Urun::all();
    	return view('kullanici.anasayfa',compact('urunler'));
    }



    public function hakkimizda(){

    	return view('kullanici.hakkimizda');
    }
}
