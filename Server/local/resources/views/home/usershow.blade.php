@extends('layouts.home')
@section('link')
    <!-- TABLE STYLES-->
    <link href="/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
@endsection
@section('header')
    <h1 class="page-header">
       用户列表 <small>User</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">用户列表</li>
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
                                <th class="text-center">用户名</th>
                                <th class="text-center">注册时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $val)
                                <tr class="text-center">
                                    <td >{{$val -> id}}</td>
                                    <td>{{$val ->name}}</td>
                                    <td>{{$val -> created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
