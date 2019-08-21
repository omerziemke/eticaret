<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Urun;
use App\Models\ProductTranslation;
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
       $urunler=ProductTranslation::where('name','like',"%$aranan%")
       ->orWhere('description','like','%$aranan%') ->paginate(8);
       
       request()->flash();
       return view('kullanici.arama',compact('urunler'));
     }


     public function benzer_urunler(){

      return view('kullanici.benzer_urunler');
     }


     
}
