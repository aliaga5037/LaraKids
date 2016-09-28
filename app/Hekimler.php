<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hekimler extends Model
{
    public function suallarHekim(){
        return $this->hasMany('App\Suallar');
    }

    public function meqaleHekim(){
        return $this->hasMany('App\Meqale');
    }
}
