@extends("layouts.shop.login")
@section('form')

    <form method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">店铺名称：</label>
            <input type="text" name="shop_name" class="form-control" value="{{ old('shop_name') }}">
        </div>
        <div class="form-group">
            <label >店铺分类：</label>
            <select name="shop_cate_id" class="form-control">



            </select>
        </div>
        <div class="form-group">
            <label for="shop_img">店铺图片：</label>
            <input type="file" name="shop_img">
        </div>
        <div class="form-group">
            <label for="start_send">起送金额：</label>
            <input type="number" name="start_send" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="send_cost">配送费：</label>
            <input type="number" name="send_cost" class="form-control" value="">
        </div>

        <div class="form-group">
            <label for="notice">店铺公告：</label>
            <textarea name="notice" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="discount">优惠信息：</label>
            <textarea name="discount" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="brand" > 品牌连锁店
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="on_time" > 准时送达
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="fengniao" > 蜂鸟配送
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="bao" > 保
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="piao" > 票
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="zhun" > 准
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="email">邮箱(账号)：</label>
            <input type="email" name="email" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" >
        </div>
        <div class="form-group">
            <label for="password_confirmation">确认密码：</label>
            <input type="password" name="password_confirmation" class="form-control" >
        </div>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">提交</button>
    </form>
@endsection