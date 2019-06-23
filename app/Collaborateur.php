<?php

namespace App;
use App\Poste;
use App\Projet;
use App\Reunion;
use App\Cv;

use Illuminate\Database\Eloquent\Model;

class Collaborateur extends Model
{
    protected $fillable=['nom_collaborateur','prenom_collaborateur','date_naissance','numero_telephone','e_mail','date_entree','date_sortie','nombre_annee_experience_hors_sqli','poste_id','projet_id'];
 

    public $timestamps = false;

    public function Poste()
    {
        return $this->belongsTo('App\Poste');
    }
    public function Projet(){
        return $this->belongsTo('App\Projet');
    }

    public function Reunions(){
        return $this->hasMany('App\Reunion');
    }

    public function Cvs(){
        return $this->hasMany('App\CV');
    }
    
}
