@extends('layouts.home')

@section('header')
    <h1 class="page-header">
        个人信息 <small>个人信息更改</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">个人信息</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">个人信息</div>
                    </div>
                </div>
                <form action="/home/my_user" method="post">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="exampleInputFile">更改头像</label>
                            <img src="" alt="">
                            <input type="file" id="image"  name="image">
                        </div>
                        <div class="sub-title">用户名</div>
                        <div>
                            <input name="name" type="text" class="form-control" placeholder="user" value="{{Auth::User()->name}}">
                        </div>
                        <div class="sub-title">密码</div>
                        <div>
                            <input name="password" type="password" class="form-control" placeholder="不更改则留空" value="">
                        </div>
                        <div class="sub-title"> @include('layouts.msg')</div>
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
