@extends("layouts.shop.default")

@section("content")

    <a href="" class="btn btn-primary">添加</a><br>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Id</th>
            <th>标题</th>
            <th>内容</th>
            <th>开始时间</th>
            <th>结束时间</th>
            <th>操作</th>
        </tr>

        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->content}}</td>
                <td>{{$article->start_time}}</td>
                <td>{{$article->end_time}}</td>
                <td><a href="" class="btn btn-info">编辑</a>
                    <a href="" class="btn btn-danger">删除</a>
                    <a href="" class="btn btn-default">重置密码</a>
                </td>

            </tr>
        @endforeach


    </table>

@endsection
