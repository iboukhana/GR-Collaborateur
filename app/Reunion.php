<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Collaborateur;


class Reunion extends Model
{   

protected $fillable=(['libelle','date_prevue','date_planifiee','date_replanification','raison_replanification','collaborateur_id']);
public $timestamps = false;
protected $dates = ['date_prevue','date_planifiee','date_replanification'];
 public function Collaborateur(){
    return $this->belongsTo('App\Collaborateur');

 }
}
