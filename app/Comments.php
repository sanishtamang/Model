<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
     protected $fillable = [
        'name','body','user_id','url','commentable_id','commentable_type',
    ];
}
