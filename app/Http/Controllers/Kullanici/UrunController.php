<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Urun;


class UrunController extends Controller
{
     public function index(){

     	$urun=Urun::find(1);
     	dd($urun);

    	return view('kullanici.urundetay');
    }
}
