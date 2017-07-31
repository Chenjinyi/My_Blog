<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class IndexController extends Controller
{
    //BLOG 主页
    public function index(){
        $posts = Posts::all()->sortByDesc('created_at');
        return view('index',compact('posts'));
    }
    //BLOG 文章
    public function posts(Request $request){
        //获取文章
        $id=$request->posts;
        $posts = Posts::find($id);

        return view('posts',compact('posts'));
    }
}