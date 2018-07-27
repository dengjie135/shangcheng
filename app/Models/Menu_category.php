<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu_category extends Model
{
    //可以修改的字段
    public $fillable=[
       'name','description','is_selected'


    ];
    //设置一个方法
    public function shop()
    {

        return $this->belongsTo(Shop::class,'shop_id');
    }
    public function menu()
    {

        return $this->belongsTo(Menu::class,'type_accumulation');
    }
}
