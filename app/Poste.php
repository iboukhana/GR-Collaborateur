<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Collaborateur;

class Poste extends Model
{
    protected $fillable=(['nom_poste','description']);
    public $timestamps = false;
    public function collaborateurs() {

        return $this->hasMany('App\Collaborateur');

    }
}
