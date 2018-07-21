<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shop_category;
use App\Tools\ImageUploadTool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Shop_categoryController extends Controller
{
     //显示首页
     public function  index(){


        $cates =  Shop_category::paginate(3);
          return view('admin/shop_category/index',compact('cates'));
     }

     //添加功能
     public function  add(Request $request){
         //判断是否是post接受
          if ($request->isMethod('post')){
              //验证是否满足条件
              $this->validate($request,[
                  'name' => "required",
                  'img' => "required",

           ]);
                   $data =  $request->all();


                   //生成文件
                   $filename = ImageUploadTool::save($request->file('img'),'','photo');
                   $data['logo'] = $filename;
                   //添加
                   Shop_category::create($data);
                   //成功提示信息
                $request->session()->flash('success','添加成功');
                   //跳转
                   return redirect('shop_category/index');


          }
          //显示视图
            return view('Admin/shop_category/add');

     }

     //删除功能
     public function  del(Request $request ,$id ){
          //找到当前id的数据
         $shop = Shop_category::find($id);
          //删除
          $shop->delete();
          //展示信息
         $request->session()->flash('success','删除成功');
         //回到首页
        return redirect('shop_category/index');


    }

    //编辑功能
    public  function  edit(Request $request ,$id){
         //找到当前id的数据
        $shops = Shop_category::findOrFail($id);
        //判断是否是post方式提交
        if ($request->isMethod('post')){
             $data = $request->all();
             //上传图片
            if (!empty($data['img'])){
                $filename = ImageUploadTool::save($request->file('img'),"","photo");
                if ($filename){
                    $data['logo'] = $filename;

                }
            }else{
                $data['logo'] = $shops['logo'];
            }
            //更改数据
            $shops->update($data);
            //显示信息
            $request->session()->flash('success','修改成功');
            //跳转
            return redirect()->route('shop_category.index');
        }
        //显示视图
        return view('admin/shop_category/edit',compact('shops'));

         }


}
