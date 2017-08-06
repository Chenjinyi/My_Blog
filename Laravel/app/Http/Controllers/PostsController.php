<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Posts;
use Illuminate\Support\Facades\Auth;
use App\Hot;

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
            'content'=>'required|max:9999|min:10',
        ]);
        //逻辑
        $posts = new Posts();
        $posts->title=\request('title');
        $posts->subhead = \request('subhead');
        $posts->content = \request('content');
        $posts->user_id = $user_id;
        $posts->save();
        //渲染
        return redirect('/home/show');
    }



    //编辑文章
    public function edit(Request $request){
        $id = $request->posts;
        $posts = Posts::find($id);
        return view('home.edit',compact('id','posts'));
    }
    public function update(Request $request,Posts $post){
        //验证
        $id = $request->id;
        $this ->validate($request,[
            'title'=>'required|unique:posts,title|max:60|min:5',
            'subhead'=>'required|max:120|min:5',
            'content'=>'required|max:9999|min:10',
        ]);
        //逻辑
        $posts = Posts::find($id);
        $posts-> title = request('title');
        $posts-> subhead = request('subhead');
        $posts-> content = request('content');
        $posts->save();
        //渲染
        return redirect('home/show');
    }


    //文章列表
    public function show(){
        $id=Auth::id();
        $posts = Posts::where('user_id',$id)->orderBy('created_at','desc')->paginate(11);
        return view('home.show',compact('posts'));
    }


    //文章删除
    public function del(Request $request,Posts $post){
        //删除逻辑
        $id = $request->posts;
        Posts::find($id)->delete();
        //渲染
        return redirect('/home/show');
    }


    //热门文章
    public function hotshow(){
        $hot = Hot::all();
        return view('home.hotshow',compact('hot'));
    }

    public function hot(){

    }
}

