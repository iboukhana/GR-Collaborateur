<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Reunion;
use App\Collaborateur;
use Carbon\Carbon;


class ReunionController extends Controller
{
    public function __construct()
    {  
        $this->middleware('auth');
        $this->middleware('revalidate');
       
    }
    //
    public function afficher_calendrier_reunion(){
        $collaborateurs =Collaborateur::select('id','nom_collaborateur','prenom_collaborateur')->get();
        $reunions =Reunion::select('reunions.date_prevue','reunions.date_planifiee','reunions.date_replanification','reunions.collaborateur_id')->get();
        return view('Reunion.calendrier',['reunions'=>$reunions ,'collaborateurs'=>$collaborateurs]);      
    }
    public function create_reunion(){
        
        return view('Reunion.CreateReunion');
    }


    public function afficher_liste_reunion(){
        

        $reunions = Reunion::all();

        return view('Reunion.ListeReunion',['reunions'=>$reunions]);
    }

    public function insert_reunion(Request $request){
    
         $reunion = new Reunion();
         $reunion->libelle= $request->input('libelle');
         $r= Carbon::createFromFormat('Y/m/d H:i',$request->input('date_prevue').' '.$request->input('horaire_prevue'));
        
        $reunion->date_prevue=$r;
         $reunion->collaborateur_id= $request->input('id_colaborateur');
         $reunion->save();
        return redirect('collaborateur/reunion/create');
 
    }
    public function afficher_edit_reunion($id){
        $reunion=Reunion::findOrFail($id);
        return view('Reunion.EditReunion',['reunion'=>$reunion]);

    }


    public function edit_reunion( Request $request, $id){
    
        $reunion=Reunion::findOrFail($id);
        $r= Carbon::createFromFormat('Y/m/d H:i',$request->input('date_prevue').' '.$request->input('horaire_prevue'));
   
        $reunion->date_prevue=$r;
  
        $reunion->save();
        return redirect('collaborateur/reunion/liste');

    }


}
