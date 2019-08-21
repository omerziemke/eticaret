<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Urun extends Model
{
     use SoftDeletes;
    protected $table='products';
    protected $guarded=[];
    


     public function product_translations()
    {  
    	return $this->hasOne('App\Models\ProductTranslation', 'product_id', 'id');
    }

}
