<?php

namespace App\Http\Controllers\Shop;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
     public  function  index(){
         $shops = Shop::paginate(4);


         //显示视图
        return view('shop/user/shop',compact('shops'));
     }
     public  function  change(Request $request,$id){
         $shops =  Shop::find($id);
         $shops->status=1;
         $shops->save();
          return redirect()->route('shop.index');
     }
     public function  danger(Request $request,$id){
         $shops = Shop::findorfail($id);
         $shops->status=0;
         $shops->save();
         return redirect()->route('shop.index');

     }
     public  function  del(Request $request,$id){
         $shops = Shop::findorfail($id);
         $shops->delete();
         return redirect()->route('shop.index');

     }
}
