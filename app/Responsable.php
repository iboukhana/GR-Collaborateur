<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\projet;

class Responsable extends Model
{ 




    public $timestamps = false;
    protected $fillable=['nom_responsable','prenom_responsable'];

    public function projets(){
        
        return $this->hasMany('App\Projet');
    }
}
