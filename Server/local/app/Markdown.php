<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markdown extends Model
{
    protected $table = "markdown";
    protected $fillable = [
        'title', 'subhead', 'content','address','view','user_id',
    ];
}
