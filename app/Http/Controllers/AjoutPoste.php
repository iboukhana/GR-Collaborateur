<?php

namespace App\Http\Controllers;
use App\Poste;
use App\Collaborateur;

use Illuminate\Http\Request;

use DB;

class AjoutPoste extends Controller
{
    public function __construct()
    {  
        $this->middleware('auth');
        $this->middleware('revalidate');
       
    }
    
    public function create(){
        return view('Collaborateurs.AjoutPoste');
        }
 

    public function store(Request $request)
    {      

        $poste = new Poste();
        $poste->nom_poste= $request->input('nom_poste');
        $poste->description= $request->input('description');
        $poste->save();
        return redirect()->back();

    }

  
}
