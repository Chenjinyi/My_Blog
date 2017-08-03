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
                'name' => 'string|min:2|max:100',
            ]);
            $user = User::find($id);
            $user->name = $request->name;
            $user->save();
        }
        //判断是否更改密码
        if (!empty($request->password)){
            $this->validate($request,[
                'password' => 'string|min:6|max:100',
            ]);
            $pass = Hash::make($request->password);

            $password = User::find($id);
            $password->password=  $pass;
            $password->save();
        }
        return redirect('/home');
    }
    //用户列表
    public function show(){
        $user = User::all();
        return view('home.usershow',compact('user'));
    }
    //添加用户
    public function add(){
        return view('home.adduser');
    }
    public function adduser(Request $request){
        //验证
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        //逻辑
        $pasword = Hash::make($request->password);
        $user= new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = $pasword;
        $user->save();
        //渲染
        return redirect('/home/user/show');

    }
}

