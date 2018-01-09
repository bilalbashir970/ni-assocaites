<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blog_detail';

    protected $fillable = ['id','name','email','desc','heading','created_at','updated_at'];
}
