<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Versement extends Model
{    
    public $table="versements";
    public $timestamps=false;

    public function compte(){
        return $this->belongsTo('App\Compte');
    }

}
