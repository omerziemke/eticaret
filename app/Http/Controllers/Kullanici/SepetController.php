<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Models\Urun;
use App\Models\Sepet_Urun;
use App\Models\Sepet;
use App\Models\ProductTranslation;
class SepetController extends Controller
{
     public function index(){
    	return view("kullanici.sepet");
    }

     public function ekle($id){
        
        $urun=Urun::find($id);
        $bul=ProductTranslation::where('pruduct_id',$id);
        dd($bul);
        $cartItem=Cart::add($urun->id,$bul->name,1,$urun->price);
          
        
    	return redirect()->route('kullanici.sepet')
			->with('mesaj_tur','success')
			->with('mesaj','Ürün Sepete Eklendi...');
    }


    public function guncelle($rowid)
	{
       
         
         Cart::update($rowid,request('adet'));

         session()->flash('mesaj_tur','success');
         session()->flash('mesaj','Adet bigisi güncellendi...');
        return response()->json(['success'=>'true']);
	}


	public function kaldir($rowid){
		 Cart::remove($rowid);
		  session()->flash('mesaj_tur','success');
         session()->flash('mesaj','Ürün kaldırıldı...');
        return response()->json(['success'=>'true']);
	}

}
