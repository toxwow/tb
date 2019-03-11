<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function phone()
    {
        return $this->hasMany(Prices::class);

    }

    public function test()
    {
        return $this->hasMany(SubService::class);
//        return $this->hasManyThrough('App\Service', 'App\SubService');

    }

    public $timestamps = false;

}
