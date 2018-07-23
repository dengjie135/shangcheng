<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop_category extends Model
{
    //可以修改的字段
    public $fillable=['name','logo','status'];
}
