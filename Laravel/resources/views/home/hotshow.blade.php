@extends('layouts.home')
@section('link')
    <!-- TABLE STYLES-->
    <link href="/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
@endsection
@section('header')
    <h1 class="page-header">
        置顶文章列表 <small>Posts</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">置顶文章</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!--    Striped Rows Table  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    文章列表
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr class="text-center">
                                <th class="text-center">ID</th>
                                <th class="text-center">文章ID|文章名字</th>
                                <th class="text-center">用户ID|用户名</th>
                                <th class="text-center">创建时间|浏览次数</th>
                                <th class="text-center">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hot as $val)
                                <tr class="text-center">
                                    <td >{{$val -> id}}</td>
                                    <td>{{$val->posts_id}}|{{$val->posts->title}}</td>
                                    <td>{{$val -> user_id}}|{{$val->user->name}}</td>
                                    <td>{{$val -> created_at}}｜{{$val->posts->view}}</td>
                                    <td><a href="/home/{{$val->id}}/del" onclick="del()">删除</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="card-title">
                                <div class="title">添加置顶文章</div>
                            </div>
                        </div>
                        <form action="/home/hot" method="post">
                            {{csrf_field()}}
                            <div class="panel-body">
                                <div class="sub-title">文章ID</div>
                                <div>
                                    <input name="title" type="text" class="form-control" placeholder="文章ID" value="{{old('title')}}">
                                </div>
                                <div class="sub-title"> @include('layouts.msg')</div>
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--  End  Striped Rows Table  -->
        </div>
    </div>


@endsection
@section('script')
    <!-- DATA TABLE SCRIPTS -->
    <script src="/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="/assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });

        function del() {
            var msg = "您真的确定要删除吗？\n\n请确认！";
            if (confirm(msg)==true){
                return true;
            }else{
                return false;
            }
        }
    </script>

@endsection
