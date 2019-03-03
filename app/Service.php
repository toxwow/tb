<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function phone()
    {
        return $this->hasMany(Prices::class);
    }
}
