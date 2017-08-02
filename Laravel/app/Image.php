<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //指定数据表
    protected $table="image";
    protected $fillable = [
        'user_id', 'posts_id', 'link_id', 'status'
    ];
//关联模型User
    public function user(){
        return $this->belongsTo('App\User');
    }
//关联模型Posts
    public function posts(){
        return$this->belongsToMany('App\Posts');
    }

}
