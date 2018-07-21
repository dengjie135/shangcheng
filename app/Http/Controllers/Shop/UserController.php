<?php

namespace App\Http\Controllers\Shop;



use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
     //显示首页
    public  function  index(){

     $users =  User::all();

      //显示视图
        return view('shop/user/index',compact('users'));
    }
    //注册
    public  function  reg(){
        //显示视图
        return view('shop/user/reg');
    }
}
