<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
     use SoftDeletes;																																																																						

    protected $table='categories';
    protected $fillable=['category_name','slug'];


    

   

}
