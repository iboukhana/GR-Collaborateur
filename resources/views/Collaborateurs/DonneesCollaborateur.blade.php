@extends('base')
@section('content')
<div class="card">
					<div class="card-header"><center><h1>{{$collaborateurs->nom_collaborateur  }}  {{$collaborateurs->prenom_collaborateur  }}</h1></center></div>
					<div class="card-body">
            <input type="hidden" name="_method" method="Post">
           
  						<ul class="nav nav-tabs nav-justified justify-content-center" id="tab1" role="tablist">
  							<li class="nav-item">
  								<a class="nav-link active" id="données-tab1" data-toggle="tab" href="#données" role="tab" aria-controls="données" aria-expanded="true">Données personnelles</a>
  							</li>
  							<li class="nav-item">
  								<a class="nav-link" id="activités-tab" data-toggle="tab" href="#activités" role="tab" aria-controls="activités" aria-expanded="false">Liste des activités</a>
  							</li>
                <li class="nav-item">
  								<a class="nav-link" id="cv-tab" data-toggle="tab" href="#cv" role="tab" aria-controls="cv" aria-expanded="false">Gestion du CV</a>
  							</li>
  						</ul>
					   <div class="tab-content p-2" id="tab1Content">
               <div class="tab-pane fade active show" id="données" role="tabpanel" aria-expanded="true">
                  <form action="{{ URL('collaborateur/update/' . $collaborateurs->id ) }}" method="post">
                  {{csrf_field()}}
                <div class="form-group row">
                  <label for="nom_collaborateur"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom :</label>
                  <div class="col-sm-6 col-md-6 col-lg-8">
                    <span class="clickMe_nom" for="nom">{{ $collaborateurs->nom_collaborateur }}</span>
                    <input class="blur_nom" id="nom" type="text" name="nom_collaborateur">
                  </div>
                  <i class="fa fa-pencil" id="pencil_nom" aria-hidden="true"></i>
                  <button type="button" class="btn btn-primary form-control-pf-save" aria-label="Save" id="save_nom"><i class="fa fa-check" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default form-control-pf-cancel" aria-label="Cancel" id="cancel_nom"><i class="fa fa-times" aria-hidden="true"></i></button>         
                </div>
                <div class="form-group row">
                  <label for="prenom_collaborateur"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">Prénom :</label>
                  <div class="col-sm-6 col-md-6 col-lg-8">
                    <span class="clickMe_prenom" for="prenom">{{ $collaborateurs->prenom_collaborateur }}</span>
                    <input class="blur_prenom" id="prenom" type="text" name="prenom_collaborateur">
                  </div>
                  <i class="fa fa-pencil" id="pencil_prenom" aria-hidden="true"></i>
                  <button type="button" class="btn btn-primary form-control-pf-save" aria-label="Save" id="save_prenom"><i class="fa fa-check" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default form-control-pf-cancel" aria-label="Cancel" id="cancel_prenom"><i class="fa fa-times" aria-hidden="true"></i></button>         
                </div>
                <div class="form-group row">
                  <label for="date_naissance"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">Date de naissance :</label>
                  <div class="col-sm-6 col-md-6 col-lg-8">
                    <span class="clickMe_date" for="date">{{ $collaborateurs->date_naissance }}</span>
                    <input class="blur_date " id="date" type="date" name="date_naissance">
                  </div>
                  <i class="fa fa-pencil" id="pencil_date" aria-hidden="true"></i>
                  <button type="button" class="btn btn-primary form-control-pf-save" aria-label="Save" id="save_date"><i class="fa fa-check" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default form-control-pf-cancel" aria-label="Cancel" id="cancel_date"><i class="fa fa-times" aria-hidden="true"></i></button>         
                </div>
                <div class="form-group row">
                  <label for="numero_telephone"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">GSM :</label>
                  <div class="col-sm-8 col-md-8 col-lg-8">
                    <span class="clickMe_numero" for="numero">{{ $collaborateurs->numero_telephone }}</span>
                    <input class="blur_numero" id="numero" type="tel" size="9" minlength="9" maxlength="9" name="numero_telephone" required>
                  </div>
                  <i class="fa fa-pencil" id="pencil_numero" aria-hidden="true"></i>
                  <button type="button" class="btn btn-primary form-control-pf-save" aria-label="Save" id="save_numero"><i class="fa fa-check" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default form-control-pf-cancel" aria-label="Cancel" id="cancel_numero"><i class="fa fa-times" aria-hidden="true"></i></button>         
                </div>
                <div class="form-group row">
                  <label for="e_mail"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">E_mail :</label>
                  <div class="col-sm-8 col-md-8 col-lg-8">
                    <span class="clickMe_E_mail" for="E_mail">{{ $collaborateurs->e_mail }}</span>
                    <input class="blur_E_mail" id="E_mail" type="email" pattern="[a-z0-9._%+-]{1,}@[a-z]{1,}([.]{1}[a-z]{,}|[.]{1}[a-z]{1,}[.]{1}[a-z]{1,})" placeholder="nom@domaine.tld" name="e_mail">
                  </div>
                  <i class="fa fa-pencil" id="pencil_E_mail" aria-hidden="true"></i>
                  <button type="button" class="btn btn-primary form-control-pf-save" aria-label="Save" id="save_E_mail"><i class="fa fa-check" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default form-control-pf-cancel" aria-label="Cancel" id="cancel_E_mail"><i class="fa fa-times" aria-hidden="true"></i></button>         
                </div>
                <div class="form-group row">
                  <label for="nombre_annee_experience_hors_sqli"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nombre d'experience hors sqli :</label>
                  <div class="col-sm-8 col-md-8 col-lg-8">
                    <span class="clickMe_experience_hors_sqli" for="experience_hors_sqli">{{ $collaborateurs->nombre_annee_experience_hors_sqli }}</span>
                    <input class="blur_experience_hors_sqli" id="experience_hors_sqli" type="number" name="nombre_annee_experience_hors_sqli">
                  </div>
                  <i class="fa fa-pencil" id="pencil_experience_hors_sqli" aria-hidden="true"></i>
                  <button type="button" class="btn btn-primary form-control-pf-save" aria-label="Save" id="save_experience_hors_sqli"><i class="fa fa-check" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default form-control-pf-cancel" aria-label="Cancel" id="cancel_experience_hors_sqli"><i class="fa fa-times" aria-hidden="true"></i></button>         
                </div>
                <input type="submit"  id="modifier" class="btn btn-primary" value="Modifier"/>
              </form>
              </div><!-- donnes-->

              <div class="tab-pane fade" id="activités" role="tabpanel" aria-expanded="false">
                  <form action="{{ URL('collaborateur/update/' . $collaborateurs->id ) }}" method="post">
                  {{csrf_field()}}
                  
                 <div class="form-group row">
                  <label for="date_entree"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">Date d'entrée :</label>
                  <div class="col-sm-6 col-md-6 col-lg-8">
                    <span class="clickMe_entree" for="entree">{{ $collaborateurs->date_entree }}</span>
                    <input class="blur_entree" id="entree" type="date" name="date_entree" >
                  </div>
                  <i class="fa fa-pencil" id="pencil_entree" aria-hidden="true"></i>
                  <button type="button" class="btn btn-primary form-control-pf-save" aria-label="Save" id="save_entree"><i class="fa fa-check" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default form-control-pf-cancel" aria-label="Cancel" id="cancel_entree"><i class="fa fa-times" aria-hidden="true"></i></button>         
                </div>
                <div class="form-group row">
                  <label for="date_sortie"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">Date Sortie :</label>
                  <div class="col-sm-6 col-md-6 col-lg-8">
                    <span class="clickMe_sortie" for="sortie">{{ $collaborateurs->date_sortie}}</span>
                    <input class="blur_sortie" id="sortie" type="date" name="date_sortie">
                  </div>
                  <i class="fa fa-pencil" id="pencil_sortie" aria-hidden="true"></i>
                  <button type="button" class="btn btn-primary form-control-pf-save" aria-label="Save" id="save_sortie"><i class="fa fa-check" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default form-control-pf-cancel" aria-label="Cancel" id="cancel_sortie"><i class="fa fa-times" aria-hidden="true"></i></button>         
                </div>        		
                <div class="form-group row">
                  <label for="poste_id"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom poste :</label>
                  <div class="col-sm-6 col-md-6 col-lg-8">
                  <span class="clickMe_nposte" for="nposte">{{ $collaborateurs->Poste->nom_poste }}</span>
                  <select name="poste_id" id="nposte" for="nposte" class="blur_nposte form-control dynamic" >
                    @foreach($postes as $poste)
                    <option  value="{{$poste->id}}">{{$poste->nom_poste}}</option>
                    @endforeach	
                  </select>
                  </div>
                  <i class="fa fa-pencil" id="pencil_nposte" aria-hidden="true"></i>
                  <button type="button" class="btn btn-primary form-control-pf-save" aria-label="Save" id="save_nposte"><i class="fa fa-check" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default form-control-pf-cancel" aria-label="Cancel" id="cancel_nposte"><i class="fa fa-times" aria-hidden="true"></i></button>         
                </div>
                <div class="form-group row">
                  <label for="projet_id"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom projet :</label>
                  <div class="col-sm-6 col-md-6 col-lg-8">
                  <span class="clickMe_nprojet" for="nprojet">{{ $collaborateurs->Projet->nom_projet }}</span>
                  <select name="projet_id" id="nprojet" for="nprojet" class="blur_nprojet form-control dynamic" >
                    @foreach($projets as $projet)
                    <option  value="{{$projet->id}}">{{$projet->nom_projet}}</option>
                    @endforeach	
                  </select>
                  </div>
                  <i class="fa fa-pencil" id="pencil_nprojet" aria-hidden="true"></i>
                  <button type="button" class="btn btn-primary form-control-pf-save" aria-label="Save" id="save_nprojet"><i class="fa fa-check" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default form-control-pf-cancel" aria-label="Cancel" id="cancel_nprojet"><i class="fa fa-times" aria-hidden="true"></i></button>         
                </div>
                
                <div class="form-group row">
                  <label for="nombre_annee_experience_a_sqli"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nombre d'annee d'experience à sqli :</label>
                  <div class="col-sm-6 col-md-6 col-lg-8">
                    <label  name="nombre_annee_experience_a_sqli">    
                      <?php
                          $d1 = new DateTime($collaborateurs->date_entree );
                          $d2 = new DateTime();
                          $diff = $d2->diff($d1);
                          echo $diff->y;      
                      ?> 
                    </label>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nombre_annee_experience_globale"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nombre d'annee d'experience Globale:</label>
                  <div class="col-sm-6 col-md-6 col-lg-8">
                    <label  name="nombre_annee_experience_globale" >
                      <?php
                        $nbrh=$collaborateurs->nombre_annee_experience_hors_sqli;
                        $nbra=$diff->y;
                        $nbrg=$nbrh+$nbra;
                        echo $nbrg;
                      ?>
                    </label>                  
                  </div>
                </div>
                
                
                <input type="submit"  id="modifier" class="btn btn-primary" value="Modifier"/>


</form>
              </div><!--activite-->

                      <div class="tab-pane fade" id="cv" role="tabpanel" aria-expanded="false">
                              <form  enctype="multipart/form-data" action="{{ URL('collaborateur/upload')}}" class="form-horizontal"   method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="collaborateur_id" value="{{$collaborateurs->id}}">
                                    <div class="form-group row">
                                      <label class="col-sm-4 col-md-4 col-lg-2 col-form-label"> selectionner le CV :</label>
                                      <div class="col-sm-6 col-md-6 col-lg-8">
                                        <input type="file"  name='cv' >
                                        <input type="submit" value="upload" class="btn btn-info">
                                      </div>
                                    </div>
                              </form>
                      </div>
             </div><!--tab-->
					</div><!-- .card-body -->
				</div>
@endsection