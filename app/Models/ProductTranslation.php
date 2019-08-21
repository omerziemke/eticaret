<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductTranslation extends Model
{
      use SoftDeletes;																																																																						

    protected $table='product_translations';
    protected $guarded=[];


public function urun()
    {  
    	return $this->belongsTo(Urun::class,'product_id', 'id');
    }

}
