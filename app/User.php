<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;

    protected $table="users";
    


    const CREATED_AT = 'olusturulma_tarihi';
    const UPDATED_AT ='güncelleme_tarihi';
    const DELETED_AT ='silinme_tarihi';


    protected $fillable = [
        'adsoyad', 'email', 'sifre','aktivasyon_anahtari','aktif_mi'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'sifre', 'aktivasyon_anahtari',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
   
}
