<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = "posts";
    protected $fillable = [
        'title', 'subhead', 'content','user_id',
    ];
}
