<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Sepet_Urun extends Model
{
        use SoftDeletes;


    protected $table='sepet_uruns';
    protected $guarded=[];


    const CREATED_AT = 'olusturulma_tarihi';
    const UPDATED_AT ='güncelleme_tarihi';
    const DELETED_AT ='silinme_tarihi';

     


     public function urun()
     {
     	return $this->belongsTo('App\Models\Urun');
     }
    
}
