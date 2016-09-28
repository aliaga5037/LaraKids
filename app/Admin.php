<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable =  ['name', 'surname', 'email', 'password', 'created_at', 'updated_at'];

    public function commentAdmin(){
        return $this->hasMany('App\Comment');
    }

    public function meqale(){
        return $this->hasMany('App\Meqale');
    }
}
