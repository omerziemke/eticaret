<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Models\Urun;
use App\Models\Sepet_Urun;
use App\Models\Sepet;
class SepetController extends Controller
{
     public function index(){
    	return view("kullanici.sepet");
    }

     public function ekle($id){
        
        $urun=Urun::find($id);
        $cartItem=Cart::add($urun->id,$urun->urun_adi,1,$urun->fiyati);
          
         if(auth()->check()){
        	$aktif_sepet_id=session('aktif_sepet_id');
        	if(!isset($aktif_sepet_id)){
        	$aktif_sepet=Sepet::create([
        		'kullanici_id'=>auth()->id()       		
        	]);
        	$aktif_sepet_id=$aktif_sepet->id;
        	session()->put('aktif_sepet_id',$aktif_sepet_id);
            }
          Sepet_Urun::updateOrCreate(
              ['sepet_id'=>$aktif_sepet_id,'urun_id'=>$urun->id],
              ['adet'=>$cartItem->qty, 'fiyati'=>$urun->fiyati,'durum'=>'Beklemede']
            );
            }
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
         session()->flash('mesaj','Adet bigisi güncellendi...');
        return response()->json(['success'=>'true']);
	}

}
