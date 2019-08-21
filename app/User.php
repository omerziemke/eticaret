<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
  

    protected $table="users";
    




    protected $fillable = [
        'first_name','last_name','email','permissions','password','last_login','aktif_mi','aktivasyon_anahtari'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'aktivasyon_anahtari',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    

      /*public function detay()
     {
        return $this->hasOne('App\Models\KullaniciDetay')->withDefault();
     }*/
}
