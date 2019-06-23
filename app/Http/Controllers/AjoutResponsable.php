<?php

namespace App\Http\Controllers;

use App\Responsable;

use Illuminate\Http\Request;

use DB;

class AjoutResponsable extends Controller
{
    public function __construct()
    {  
        $this->middleware('auth');
        $this->middleware('revalidate');
       
    }
    
    public function create(){
        return view('Collaborateurs.AjoutResponsable');
        }
 

    public function store(Request $request)
    {      

        $responsable = new Responsable();
        $responsable->nom_responsable= $request->input('nom_responsable');
        $responsable->prenom_responsable= $request->input('prenom_responsable');
        $responsable->save();
        return redirect()->back();

    }
}
