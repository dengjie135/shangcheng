@extends("layouts.admin.default")

@section("title","列表")

@section("content")

    <a href="" class="btn btn-info">添加</a>
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
                <td>{{$cate->status}}</td>
                <td>
                    @if($cate['logo'])
                    <img src="/{{$cate->logo}}" width="100">
                    @endif
                </td>
                <td>
                    <a href="" class="btn btn-info">编辑</a>
                    <a href="/" class="btn btn-danger">删除</a>

                </td>
            </tr>
        @endforeach
    </table>
@endsection