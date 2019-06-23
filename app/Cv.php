<?php

namespace App;
use App\Collaborateur;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable=['cv','date_soumission','collaborateur_id'];
    public $timestamps = false;


    public function collaborateur() {
        return $this->belongsTo('App\Collaborateur');
    }
}
