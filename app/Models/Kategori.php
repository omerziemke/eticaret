<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
     use SoftDeletes;																																																																						

    protected $table='kategori';
    protected $fillable=['kategori_adi','slug'];
    const CREATED_AT = 'olusturulma_tarihi';
    const UPDATED_AT ='güncelleme_tarihi';
    const DELETED_AT ='silinme_tarihi';

    

    public function urunler()
    {
    	return $this->belongsToMany('App\Models\Urun','kategori_urun');//istersek ikinci paremetre olarak tablo adı belirtile bilir
    }


     public function ust_kategori()
    {
        return $this->belongsTo('App\Models\Kategori','ust_id')->withDefault([
           'kategori_adi'=>'Ana Kategori'
        ]);
    }

}
