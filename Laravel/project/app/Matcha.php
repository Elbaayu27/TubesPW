<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matcha extends Model
{
     use SoftDeletes;
 
    protected $fillable = [
        'title', 'content'
    ];
    protected $dates = ['deleted_at'];
}
