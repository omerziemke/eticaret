<?php

namespace App\Http\Controllers\Kullanici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SepetController extends Controller
{
     public function index(){

    	return view('kullanici.sepet');
    }
}
