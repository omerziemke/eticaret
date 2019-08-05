<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Urun;
use App\Models\Sepet_Urun;
use App\Models\Sepet;
use Validator;

class UrunController extends Controller
{
     public function index($id){
        $urunler=Urun::all();
        $urundetay=Urun::find($id);

    	return view('kullanici.urundetay',compact('urunler','urundetay'));
    }

      public function arama(){
       
     
       $aranan=request()->input('aranan');

       $urunler=Urun::where('urun_adi','like',"%$aranan%")
       ->orWhere('aciklama','like','%$aranan%') ->paginate(8);
       
        request()->flash();
       return view('kullanici.arama',compact('urunler'));
     }


     public function benzer_urunler(){

      return view('kullanici.benzer_urunler');
     }


     public function guncelle($rowid){
       
      $a=Sepet::find($rowid);
        dd($a);
       Cart::update();
        }
}
