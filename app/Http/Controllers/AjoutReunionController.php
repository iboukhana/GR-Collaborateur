<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Query\Builder;
use DB;
use App\Collaborateur;

class AjoutReunionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $id_collaborateur=DB::table('collaborateurs')
                        ->groupBy('id')
                        ->get();

        return view('Collaborateurs.AjoutReunion')->with('id_collaborateur',$id_collaborateur);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   
    public function search( Request $request ){
        $term=$request->id_collaborateur;  
        $collabo=Collaborateur::all()
        ->where('nom_collaborateur','LIKE','%'. $term.'%')
        ->get();
        
     if (count($collabo)==0) {
        $rechercher[]='not found';
     }
     else{
            foreach ($collabo as $key) {
                $rechercher[]=$key->nom_collaborateur;
            }

     }
        return $rechercher;
        
    

    }
}
