<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //可以修改的字段
    public $fillable=['goods_name','rating','shop_id','category_id','goods_price','description','month_sales','rating_count','tips','satisfy_count','satisfy_rate','goods_img','status'





    ];

//    //设置一个方法
    public function shop()
    {
        return $this->belongsTo(Shop::class,'shop_id');
    }


    public function menu_category()
    {
        return $this->belongsTo(Menu_category::class,'category_id');
    }




}
