<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefs extends Model
{
    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];

    public function customers()
    {
        return $this->hasMany('App\Customers');
    }
}


