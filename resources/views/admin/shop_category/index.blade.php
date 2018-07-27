@extends("layouts.admin.default")

@section("title","列表")

@section("content")

    <a href="{{route('shop_category.add')}}" class="btn btn-info">添加</a>

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>名称</th>
            <th>状态</th>
            <th>LOGO</th>
            <th>操作</th>
        </tr>

        @foreach($cates as $cate)
            <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>

                <td>{{$cate->status ? "正常" : "未通过"}}</td>
                <td>

                    <img src="/{{$cate->logo}}" width="80">

                </td>
                <td>
                    <a href="{{route('shop_category.edit',$cate)}}" class="btn btn-info">编辑</a>
                    <a href="{{route('shop_category.del',$cate)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$cates->links()}}


@endsection