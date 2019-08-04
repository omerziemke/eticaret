<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Urun;


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
}
