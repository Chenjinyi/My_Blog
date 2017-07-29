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
                            <h3>44,023</h3>
                            <small>Daily Visits</small>
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
                            <h3>32,850</h3>
                            <small>Sales</small>
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
                            <h3>56,150</h3>
                            <small>Comments</small>
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
                            <h3>89,645</h3>
                            <small>Daily Profits</small>
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
