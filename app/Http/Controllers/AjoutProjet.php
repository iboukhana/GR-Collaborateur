<?php

namespace App\Http\Controllers;
use App\Responsable;
use App\Projet;

use Illuminate\Http\Request;
use DB;


class AjoutProjet extends Controller
{
    public function __construct()
    {  
        $this->middleware('auth');
        $this->middleware('revalidate');
       
    }
    
    public function create(){
        $responsable_id=DB::table('responsables')
        ->groupBy('id')
        ->get();
        return view('Collaborateurs.AjoutProjet')->with('responsable_id',$responsable_id);
        }

    public function store(Request $request)
    {      
        
        $projet = new Projet();
        $projet->nom_projet= $request->input('nom_projet');
        $projet->responsable_id= $request->input('responsable_id');
        $projet->save();
        return redirect()->back()->withInput($request->all);

    }

    
}
