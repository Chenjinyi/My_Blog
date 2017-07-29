<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //添加文章
    public function posts(){
        return view('home.add');
    }
    public function add(Request $request){
        //验证
        $user_id = Auth::id();
        $this ->validate($request,[
            'title'=>'required|unique:posts,title|max:60|min:5',
            'subhead'=>'required|max:120|min:5',
            'content'=>'required|max:999|min:10',
        ]);
        //逻辑
        $input = [
            'title'=>$request->title,
            'subhead'=>$request->subhead,
            'content'=>$request->content,
            'user_id'=>$user_id
        ];
        Posts::create($input);
        //渲染
        return redirect('/home/show');
    }
    //编辑文章
    public function edit(){
        return view('home.edit');
    }
    public function update(){

    }
    //文章列表
    public function show(){
        $id=Auth::id();
        $posts = Posts::where('user_id',$id)->get();
        return view('home.show',compact('posts'));
    }
}
