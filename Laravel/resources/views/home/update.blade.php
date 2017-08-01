@extends('layouts.home')

@section('header')
    <h1 class="page-header">
        更新记录 <small>BLOG UPDATE</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">更新记录</li>
    </ol>
@endsection

@section('content')
    @foreach($update as $val)
        <div class="col-md-4 col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    {{$val->version}}
                </div>
                <div class="panel-body">
                    <p>{!! $val->content !!}</p>
                </div>
                <div class="panel-footer">
                    {{$val->created_at}}
                </div>
            </div>
        </div>
    @endforeach
@endsection