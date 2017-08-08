<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hot extends Model
{
    //设置数据表并制定列
    public $table='hot';
    protected $fillable=[
        'user_id','posts_id'
    ];
    //绑定模型
    //获取文章
    public function posts(){
        return $this->belongsTo('App\Posts');
    }
    //获取发布用户
    public function  user(){
        return $this->belongsTo('App\User');
    }

}
