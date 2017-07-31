<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class IndexController extends Controller
{
    //BLOG 主页
    public function index(){
        $posts = Posts::orderBy('created_at','desc')->paginate(8);

        return view('index',compact('posts'));
    }
    //BLOG 文章
    public function posts(Request $request){
        //获取文章
        $id=$request->posts;
        $posts = Posts::find($id);
        //浏览次数
        $view = $posts->view+1;
        $posts->view = $view;
        $posts->save();
//        //获取文章最大值与最小值
//        $post = Posts::all();
//        $max = $post->max();
//        $min= $post->min();
//        //判断是否还可上一篇或下一篇
//        if ($id = $max){
//            $next = array([
//                "id" => $max,
//                "subhead" =>"没有更多的文章了"
//            ]);
//        }
//        if ($id = $min){
//            $last = array([
//                "id" => $min,
//                "subhead" =>"已经是第一篇文章了"
//            ]);
//        }
//        //获得上一篇下一盘文章
//        $next = Posts::find($id);
//        $last = Posts::find($id);
        return view('posts',compact('posts'));
    }
}

