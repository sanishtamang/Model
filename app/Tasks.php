<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    //
    
      protected $fillable = [
        'name', 'project_id', 'user_id','days','hours',
    ];
}
