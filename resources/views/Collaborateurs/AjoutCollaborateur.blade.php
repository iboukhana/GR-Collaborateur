@extends('base')
@section('content')
<div class="row">
	<div class="col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
   				<center><h1>Ajout collaborateur</h1></center>
 			 </div>
			  
			<div class="card-body">
				<div class="container">
					<form action="{{ url('collaborateur')}}" method="post">
                    {{csrf_field()}}
						<div class="form-group row">
							<label for="nom_collaborateur"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="nom_collaborateur" type="text" name="nom_collaborateur" required>

							</div>
						</div>

						<div class="form-group row">
							<label for="prenom_collaborateur"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Prénom :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="prenom_collaborateur" type="text" name="prenom_collaborateur" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="date_naissance"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Date de naissance :</label>
							<div class="col-sm-8 col-md-8 col-lg-10 input-group">
								<input class="form-control datepickere" id="date-naissance" type="text" name="date_naissance" required>
								<div class="input-group-addon">
							        <span class="far fa-calendar-alt"></span>
							    </div>
							</div>
						</div>

						<div class="form-group row">
							<label for="numero_telephone"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">GSM :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="numero_telephone" type="tel" size="10" minlength="10" maxlength="10" name="numero_telephone" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="e_mail"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">E_mail :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="e_mail" type="email"  pattern="[a-z0-9._%+-]{1,}@[a-z]{1,}([.]{1}[a-z]{,}|[.]{1}[a-z]{1,}[.]{1}[a-z]{1,})" placeholder="nom@domaine.tld" name="e_mail" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="date_entree"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Date d'entrée :</label>
								
							<div class="col-sm-8 col-md-8 col-lg-10 input-group">
								<input class="form-control datepicker" id="date_entree" type="text"
									name="date_entree" required>
									<div class="input-group-addon">
								        <span class="far fa-calendar-alt"></span>
								    </div>
							</div>
						</div>

						
						<div class="form-group row">
							<label for="date_sortie"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">État :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
							<label class="custom-control custom-radio">
									<input id="date_sortie_active" name="date_sortie" type="radio" class="custom-control-input " checked="checked" required>
									<span class="custom-control-indicator"></span>
									<span class="custom-control-description">Activer</span>
								</label>
								<label class="custom-control custom-radio ">
									<input id="date_sortie_desactive" name="date_sortie" type="radio" class="custom-control-input">
									<span class="custom-control-indicator"></span>
									<span class="custom-control-description">Désactiver</span>
								</label>
							</div>
						</div>
						<div class="form-group row sorti">
							<label for="date_sortie"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Date de sortie :</label>
							<div class="col-sm-8 col-md-8 col-lg-10 input-group">
								<input class="form-control datepicker" id="date_sortie" type="text"
									name="date_sorti">
									<div class="input-group-addon">
								        <span class="far fa-calendar-alt"></span>
								    </div>
							</div>
						</div>
						<div class="form-group row">
							<label for="nombre_annee_experience_hors_sqli"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nombre d'année d'expérience hors SQLI:</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="nombre_annee_experience_hors_sqli" type="number" name="nombre_annee_experience_hors_sqli" required>
							</div>
						</div>
					
					
						<div class="form-group row">
							<label for="poste_id"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom du poste :</label>
							<div class="col-sm-6 col-md-6 col-lg-8">
								<select name="poste_id" id="poste_id" class="form-control dynamic" >
									@foreach($poste_id as $nom_postes)
								<option value="{{$nom_postes->id}}">{{$nom_postes->nom_poste}}</option>
									@endforeach	
								</select>
								</div>
								<div class="col-sm-2 col-md-2 col-lg-2">
								<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModalThree">
									Ajouter Poste
								</button>
								
								</div>
								</div>
								

						<div class="form-group row">
							<label for="projet_id"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom du projet :</label>
							<div class="col-sm-6 col-md-6 col-lg-8">
								<select name="projet_id" id="projet_id" class="form-control dynamic" >
									@foreach($projet_id as $nom_projet)
								<option value="{{$nom_projet->id}}">{{$nom_projet->nom_projet}}</option>
									@endforeach	
							</select>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2">
								<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#projet">
									Ajouter Projet
								</button>
								
								</div>
                        </div>

						
                <div class="bouton"> <!-- Boutton Ajouter -->
							<button type="submit" class="btn btn-primary ">Ajouter</button>
               			 </div>  
		

</form>

<form action="{{ url('poste')}}" method="post">
                    {{csrf_field()}}
								<div class="modal fade" id="exampleModalThree" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Ajout Poste</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">

						<div class="form-group row">
							<label for="nom_poste"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom Poste :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="nom_poste" type="text" name="nom_poste" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="description"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Déscription :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="description" type="text" name="description">
							</div>
						</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary ">Ajouter</button>
               			 </div>  
						</div> 						</div>
						</div>

</form>
<form action="{{ url('projet')}}" method="post">
                    {{csrf_field()}}
								<div class="modal fade" id="projet" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Ajout Projet</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">

						<div class="form-group row">
							<label for="nom_projet"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom Projet :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="nom_projet" type="text" name="nom_projet" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="responsable_id"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom Responsable :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<select name="responsable_id" id="responsable_id" class="form-control dynamic" >
									@foreach($responsable_id as $nom_responsable)
								<option value="{{$nom_responsable->id}}">{{$nom_responsable->nom_responsable}} {{$nom_responsable->prenom_responsable}}</option>
									@endforeach	
							</select>
							</div>
                        </div>
			
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary ">Ajouter</button>
               			 </div>  
					</div> 						
				</div>
			</div>
</form>
    </div>
		</div>
			</div>  
	        	</div>
					</div>
@endsection