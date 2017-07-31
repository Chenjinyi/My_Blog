@extends('layouts.home')
@section('link')
    <!-- TABLE STYLES-->
    <link href="/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
@endsection
@section('header')
    <h1 class="page-header">
        文章列表 <small>Posts</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">文章列表</li>
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
                                <th class="text-center">文章名字</th>
                                <th class="text-center">简介</th>
                                <th class="text-center">创建时间|浏览次数</th>
                                <th class="text-center">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $val)
                            <tr class="text-center">
                                <td >{{$val -> id}}</td>
                                <td>{{$val -> title}}</td>
                                <td>{{$val ->subhead}}</td>
                                <td>{{$val -> created_at}}｜{{$val->view}}</td>
                                <td><a href="/home/{{$val->id}}/edit">编辑</a>|<a href="/home/{{$val->id}}/del" onclick="del()">删除</a></td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$posts->links()}}
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
