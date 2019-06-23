<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Collaborateur;
use App\Responsable;

class Projet extends Model
{

    protected $fillable=(['nom_projet','responsable_id']);
    public $timestamps = false;

  


    public function collaborateurs() {


        return $this->hasMany('App\Collaborateur');
        
    }
    public function Responsable(){
        
        return  $this->belongsTo('App\Responsable');
    }
    
}
