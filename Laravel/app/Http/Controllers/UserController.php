<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //个人信息
    public function user(){
        return view('home.user');

    }
    //更新信息
    public function update(Request $request){
        $id = Auth::id();
        //验证
        //判断是否上传图片
        if (!empty($request->image)) {
            $this->validate($request, [
                'image'=>'image'
            ]);
        }
        //判断是否更改用户名
        if (!empty($request->name)){
            $this->validate($request,[
                'name' => 'string|min:3|max:100',
            ]);
            $user = User::find($id);
            $user->name = $request->name;
            $user->save();
        }
        //判断是否更改密码
        if (!empty($request->password)){
            $this->validate($request,[
                'name' => 'string|min:6|max:100',
            ]);
            $pass = Hash::make($request->password);

            $password = User::find($id);
            $password->name =  $pass;
            $password->save();
        }
        return redirect('/home');
    }
    //用户列表
    public function show(){
        return
    }
    //添加用户
    public function add(){

    }
    public function new(){

    }
}

