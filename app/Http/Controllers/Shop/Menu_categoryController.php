<?php

namespace App\Http\Controllers\Shop;

use App\Models\Menu_category;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Menu_categoryController extends Controller
{
    //显示首页
    public  function  index(){
    //显示首页
     $menus =  Menu_category::all();
     //显示视图
        return view('shop/user.menu',compact('menus'));

    }
    //添加分类
    public function add(Request $request){
         //判断是否是post提交
        if ($request->isMethod('post')) {
            $data = $request->post();
            Menu_category::create($data);
            return redirect()->route('menu_category.index');


        }
        return view('shop/user/menu_add');
    }

    //编辑分类
         public  function  edit(Request $request,$id){
               $menus = Menu_category::findorfail($id);
               if ($request->isMethod('post')){
                   $data = $request->post();
                   $menus->update($data);
                   return redirect()->route('menu_category.index');


               }
               //显示视图
               return view('shop/user/menu_edit',compact('menus'));

         }



    //删除分类
         public  function  del(Request $request,$id){
                 //找到id的当前数据
             $menus = Menu_category::findorfail($id);
             $menus->delete();
             //跳转
             return redirect()->route('menu_category.index');

         }

}
