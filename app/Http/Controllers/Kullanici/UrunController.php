<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UrunController extends Controller
{
     public function index(){

    	return view('kullanici.urundetay');
    }
}
