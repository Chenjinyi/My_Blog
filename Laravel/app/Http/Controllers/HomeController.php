<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Update;
use Illuminate\Http\Request;
use YuanChao\Editor\EndaEditor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $version = Update::all()->max();
        $posts = Posts::all();
        $view = 0;
        foreach ($posts as $val){
           $view += $val->view;
        }
        return view('home',compact('posts','view','version'));
    }
    public function update(){
        $update = Update::all();
        return view('home.update',compact('update'));
    }
}

