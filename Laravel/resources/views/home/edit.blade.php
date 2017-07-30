@extends('layouts.home')

@section('header')
    <h1 class="page-header">
        编辑文章 <small>对文章内容进行更改</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">编辑文章</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">编辑文章</div>
                    </div>
                </div>
                <form action="/home/update" method="post">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div><input type="hidden" name="id"  value="{{$id}}"></div>
                        <div class="sub-title">文章名称</div>
                        <div>
                            <input name="title" type="text" class="form-control" placeholder="Title" value="{{$posts->title}}">
                        </div>
                        <div class="sub-title">文章简介</div>
                        <div>
                            <textarea name="subhead" class="form-control" rows="2">{{$posts->subhead }}</textarea>
                        </div>
                        <div class="sub-title">文章内容</div>
                        <div>
                            <textarea name="content" class="form-control" rows="8" >{{$posts->content }}</textarea>
                        </div>
                        <div class="sub-title"> @include('layouts.msg')</div>
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
