<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function countries()
    {
        return $this->hasMany('App\Country');
    }
}
