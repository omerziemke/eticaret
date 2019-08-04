<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Models\Urun;

class SepetController extends Controller
{
     public function index(){
    	return view("kullanici.sepet");
    }
     public function ekle($id){
        
        $urun=Urun::find($id);
        Cart::add($urun->id,$urun->urun_adi,1,$urun->fiyati);

    	return redirect()->route('kullanici.sepet')
			->with('mesaj_tur','success')
			->with('mesaj','Ürün Sepete Eklendi...');
    }


    public function guncelle($rowid)
	{
        $validator=Validator::make(request()->all(),[
          'adet'=>'required|numeric|between:0,5'

        ]);

        if($validator->fails()){
        session()->flash('mesaj_tur','danger');
        session()->flash('mesaj','Adet bigisi 0 ile 5 arasında giriniz...');
        return response()->json(['success'=>'false']);
        }
         
         Cart::update($rowid,request('adet'));

         session()->flash('mesaj_tur','success');
         session()->flash('mesaj','Adet bigisi güncellendi...');
        return response()->json(['success'=>'true']);
	}


	public function kaldir($rowid){
		 Cart::remove($rowid);
		 return redirect()->route('kullanici.sepet')
			->with('mesaj_tur','success')
			->with('mesaj','Ürün Sepeten Kaldırıldı...');
	}

}
