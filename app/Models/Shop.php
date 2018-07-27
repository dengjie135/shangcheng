<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    //可以修改的字段
    public $fillable=['shop_category_id','shop_name','shop_img','shop_rating',
        'brand','on_time','fengniao','bao','piao','zhun','start_send','start_cost',
        'notice','discount','status'



    ];





}
