@extends("layouts.admin.default")

@section("title","列表")

@section("content")

<<<<<<< HEAD
    <a href="{{route('shop_category.add')}}" class="btn btn-info">添加</a>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>分类名称</th>
=======
    <a href="" class="btn btn-info">添加</a>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>名称</th>
>>>>>>> f0c73c801c19898524ac697b5dc1b72e93188d95
            <th>状态</th>
            <th>LOGO</th>
            <th>操作</th>
        </tr>

        @foreach($cates as $cate)
            <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
<<<<<<< HEAD
                <td>{{$cate->status ? "正常" : "未通过"}}</td>
                <td>

                    <img src="/{{$cate->logo}}" width="80">

                </td>
                <td>
                    <a href="{{route('shop_category.edit',$cate)}}" class="btn btn-info">编辑</a>
                    <a href="{{route('shop_category.del',$cate)}}" class="btn btn-danger">删除</a>
=======
                <td>{{$cate->status}}</td>
                <td>
                    @if($cate['logo'])
                    <img src="/{{$cate->logo}}" width="100">
                    @endif
                </td>
                <td>
                    <a href="" class="btn btn-info">编辑</a>
                    <a href="/" class="btn btn-danger">删除</a>
>>>>>>> f0c73c801c19898524ac697b5dc1b72e93188d95

                </td>
            </tr>
        @endforeach
    </table>
<<<<<<< HEAD
    {{ $cates->links()}}
=======
>>>>>>> f0c73c801c19898524ac697b5dc1b72e93188d95
@endsection