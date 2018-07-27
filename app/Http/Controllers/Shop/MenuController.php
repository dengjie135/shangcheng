<?php

namespace App\Http\Controllers\Shop;

use App\Models\Menu;
use App\Models\Menu_category;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    //首页
    public  function index(){
      $menus  =  Menu::all();

      //显示视图
    return  view('shop/user/m_index',compact('menus'));
    }
    //添加分类
    public  function add(Request $request){
       $shops = Shop::all('shop_name','id');


        $cas = Menu_category::all('name','id');


        //判断是否是post提交
        if ($request->isMethod('post')){
            $data = $request->post();


            Menu::create($data);
            //跳转
            return redirect()->route('menu.index');


        }
     return view('shop/user/m_add',compact('cas','shops'));
}
}
