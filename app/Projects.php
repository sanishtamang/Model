<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
    protected $fillable = [
        'company_id','description','user_id','days','name'
    ];
}
