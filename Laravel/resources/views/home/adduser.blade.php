@extends('layouts.home')

@section('header')
    <h1 class="page-header">
        添加用户 <small>一个新写手YOOOO~</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">添加用户</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">添加用户</div>
                    </div>
                </div>
                <form action="/home/user/add" method="post">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="sub-title">用户邮箱</div>
                        <div>
                            <input name="email" type="text" class="form-control" placeholder="email" value="{{old('email')}}">
                        </div>
                        <div class="sub-title">用户名称</div>
                        <div>
                            <input name="name" type="text" class="form-control" placeholder="name" value="{{old('name')}}">
                        </div>
                        <div class="sub-title">用户密码</div>
                        <div>
                            <input name="password" type="password" class="form-control" placeholder="password" value="{{old('password')}}">
                        </div>
                        <div class="sub-title"> @include('layouts.msg')</div>
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection