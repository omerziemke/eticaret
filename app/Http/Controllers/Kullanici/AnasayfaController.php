<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnasayfaController extends Controller
{
    public function index(){

    	return view('kullanici.yenisezon');
    }
     public function anasayfa(){

    	return view('kullanici.anasayfa');
    }

    public function hakkimizda(){

    	return view('kullanici.hakkimizda');
    }
}
