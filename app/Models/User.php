<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','shop_id'
    ];
<<<<<<< HEAD
    //设置一个方法
    public function shop()
        {

        return $this->belongsTo(Shop::class,'shop_id');
    }
=======
>>>>>>> f0c73c801c19898524ac697b5dc1b72e93188d95

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
