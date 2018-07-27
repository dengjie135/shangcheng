@extends("layouts.admin.default")

@section("title","列表")

@section("content")

    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="名称" name="goods_name" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">评分</label>
            <div class="col-sm-10">

                <input type="text" class="form-control"  placeholder="评分" name="rating" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">所属分类</label>
            <div class="col-sm-10">

                <select name="type_accumulation" id="">
                    @foreach($menus as $menu)
                    <option value=""></option>
                    @endforeach
                </select>

            </div>
        </div>



        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">

                上架：<input type="radio" value="1"  name="status" >
                下架：<input type="radio" value="0" name="status">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">价格</label>
            <div class="col-sm-10">

                <input type="text" class="form-control"  placeholder="价格" name="goods_price"  >  <br>
            </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">图片</label>
            <div class="col-sm-10">

                <input type="file" name="img">
            </div>
        </div>
        <br>


      <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">添加</button>
            </div>
        </div>
    </form>

@endsection