<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $guarded = ['id','cretad_at','updated_at'];//
}
