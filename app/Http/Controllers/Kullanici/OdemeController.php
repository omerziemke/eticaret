<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OdemeController extends Controller
{
     public function index(){

    	return view('kullanici.odeme');
    }
}
