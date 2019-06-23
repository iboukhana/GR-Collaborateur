<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\URL;
use DB;
use Illuminate\Http\UploadedFile;

use App\Collaborateur;
use App\Poste;
use App\Projet;
use App\Responsable;
use App\Cv;
use Carbon\Carbon;
class CollaborateurController extends Controller
{       
    public function __construct()
    {  
        $this->middleware('auth');
        $this->middleware('revalidate');
       
    }
    /********************************************* ListeCollaborateur *******************************************/
    public function index()
    {
        $collaborateurs = DB::table('collaborateurs')->get();
        return view('Collaborateurs.ListeCollaborateur')->with('collaborateurs', $collaborateurs);
    }
    /*************************************   donwload**************** */
   
    /********************************************* AjoutCollaborateur *******************************************/
    public function create()
    {   
        $poste_id=DB::table('postes')
                    ->groupBy('id')
                    ->get();
        $projet_id=DB::table('projets')
                        ->groupBy('id')
                        ->get();  
        $responsable_id=DB::table('responsables')
        ->groupBy('id')
        ->get();
        return view('Collaborateurs.AjoutCollaborateur')->with('poste_id',$poste_id)->with('projet_id',$projet_id)->with('responsable_id',$responsable_id);;  
        
    }
    /********************************************* AjoutCollaborateur *******************************************/
    public function store(Request $request)
    {
        
        $collaborateur = new collaborateur();
        $responsable = new Responsable();
        $collaborateur->nom_collaborateur= $request->input('nom_collaborateur');
        $collaborateur->prenom_collaborateur= $request->input('prenom_collaborateur');
        $collaborateur->date_naissance= $request->input('date_naissance');
        $collaborateur->numero_telephone= $request->input('numero_telephone');
        $collaborateur->e_mail= $request->input('e_mail');
        $collaborateur->date_entree= $request->input('date_entree');
        if($request->input('date_sortie')=='active'){
            $collaborateur->date_sortie= null;
        }
        else{
            $collaborateur->date_sortie= $request->input('date_sorti');
        }
        $collaborateur->nombre_annee_experience_hors_sqli= $request->input('nombre_annee_experience_hors_sqli');
        $collaborateur->poste_id= $request->input('poste_id');;
        $collaborateur->projet_id= $request->input('projet_id');
        $responsable->responsable_id= $request->input('responsable_id');

        $collaborateur->save();
       return redirect('collaborateur/create');

    }
    /********************************************* DonneesCollaborateur *******************************************/
    public function show($id)
    {
         $collaborateurs = Collaborateur::findOrFail($id);
         $postes = Poste::all();
         $projets = Projet::all();
         return view('Collaborateurs.DonneesCollaborateur',['collaborateurs'=>$collaborateurs,'postes'=>$postes,'projets'=>$projets]);
    }
   
    /********************************************* DonneesCollaborateur update *******************************************/
    public function update(Request $request, $id)
    {
        $collaborateurs = Collaborateur::find($id);

            if($request->input('nom_collaborateur')){
                $collaborateurs->nom_collaborateur= $request->input('nom_collaborateur');
            }
            if($request->input('prenom_collaborateur')){
                $collaborateurs->prenom_collaborateur= $request->input('prenom_collaborateur');
            }
            if($request->input('date_naissance')){
                $collaborateurs->date_naissance= $request->input('date_naissance');
            }
            if($request->input('numero_telephone')){
                $collaborateurs->numero_telephone= $request->input('numero_telephone');
            }
            if($request->input('e_mail')){
            $collaborateurs->e_mail= $request->input('e_mail');
            }
            if($request->input('nombre_annee_experience_hors_sqli')){
            $collaborateurs->nombre_annee_experience_hors_sqli= $request->input('nombre_annee_experience_hors_sqli');
            }
            if($request->poste_id){
                $collaborateurs->poste_id= $request->poste_id;
             }
            if($request->projet_id){
                $collaborateurs->projet_id= $request->projet_id;
            }
            $collaborateurs->date_sortie= $request->input('date_sortie');
            $collaborateurs->save();
        return redirect('collaborateur/index');
    }

        /********************************************* CV *******************************************/

    public function upload(Request $request)
    {   

        $cvs=new Cv();
        $cvs->collaborateur_id=$request->input('collaborateur_id');
        if($request->hasFile('cv')){
        $request->cv->storeAs('upload',$request->file('cv')->getClientOriginalName());
        $cvs->cv=$request->file('cv')->getClientOriginalName();
        $cvs->date_soumission=Carbon::now();
        }
        $cvs->save();
        return redirect('collaborateur/index');
        
        /* if(Input::hasFile('cv')){
        $file= Input::file('file');
        $file->move('upload',$file->getClientOriginalName());
        }*/

       }

         /********************************************* CV *******************************************/
         public function download(Request $request,$id)
        {            
            $cvs=CV::find($id);
            return storage($cvs->cv);
        }
 /********************************************* ListeCV *******************************************/
        public function liste($id)
        {    
        
            $cvs = Cv::all()->where('collaborateur_id','=',$id);

            return view('Collaborateurs.ListeCv',['cvs'=>$cvs]);
        }
  /********************************************* ListeCV *******************************************/
 
        public function delete(Request $request, $id)
        {

            $cvs=Cv::find($id);
            $cvs->delete();
            return redirect('collaborateur/index');

        }

        /********************************************* ListeProjet*******************************************/
        public function listeprojet($id)
        {    
            
            $projets = Projet::all()->where('responsable_id','=',$id);

            return view('Collaborateurs.ListeProjet',['projets'=>$projets]);
        }
        /********************************************* DonneesProjet*******************************************/

        public function showprojet($id)
        {
             $projets = Projet::findOrFail($id);
             $responsables = Responsable::all();
             return view('Collaborateurs.DonneesProjet',['responsables'=>$responsables,'projets'=>$projets]);
        }

        /********************************************* DonneesProjet update *******************************************/
    public function updateprojet(Request $request, $id)
    {
        $projets = Projet::find($id);


            if($request->responsable_id){
                $projets->responsable_id= $request->responsable_id;
            }
            $projets->save();
            return redirect('collaborateur/index');
        }
}

        
