<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //BLOG 主页
    public function index(){
        return view('index');
    }
    //BLOG 文章
    public function posts(){
        return view('posts');
    }
}
