@extends('layouts.home')

@section('header')
        <h1 class="page-header">
           仪表盘 <small>Welcome  {{Auth::user()->name}}  !</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">仪表盘</li>
        </ol>
    @endsection

@section('content')
    <!-- /. ROW  -->
    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="board">
                <div class="panel panel-primary">
                    <div class="number">
                        <h3>
                            <h3>{{$view}}</h3>
                            <small>浏览次数</small>
                        </h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-eye fa-5x red"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="board">
                <div class="panel panel-primary">
                    <div class="number">
                        <h3>
                            <h3>{{$posts->count()}}</h3>
                            <small>文章数</small>
                        </h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-cart fa-5x blue"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="board">
                <div class="panel panel-primary">
                    <div class="number">
                        <h3>
                            <h3>Bate 0.1</h3>
                            <small>版本号</small>
                        </h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-comments fa-5x green"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="board">
                <div class="panel panel-primary">
                    <div class="number">
                        <h3>
                            <h3>{{Auth::user()->name}}</h3>
                            <small>登录账户</small>
                        </h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user fa-5x yellow"></i>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
