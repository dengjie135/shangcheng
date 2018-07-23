@extends("layouts.admin.default")

@section("title","列表")

@section("content")

    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="名称" name="name"  value="{{$shops->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">图片</label>
            <div class="col-sm-10">
                <img src="{{$shops->logo}}" alt="">
                <input type="file" name="img" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                是：<input type="radio" value="1"  name="status" {{$shops->status ? "checked" : ""}}>
                否：<input type="radio" value="0"  name="status" {{$shops->status ? "" : "checked"}}>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">编辑</button>
            </div>
        </div>
    </form>
@endsection