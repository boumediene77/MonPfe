<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    //
    public $table="comptes";
    public function versements(){
        return $this->hasMany('App\Versement');
    }
}
