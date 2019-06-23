@extends('base')
@section('content')

<div class="row">
	<div class="col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
   				<center><h1>Ajout Résponsable</h1></center>
 			 </div>
			<div class="card-body">
				<div class="container">
					<form action="{{ url('responsable')}}" method="post">
					{{csrf_field()}}
			
                    	<div class="form-group row">
							<label for="nom_responsable"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="nom_responsable" type="text" name="nom_responsable">
							</div>
						</div>

						<div class="form-group row">
							<label for="prenom_responsable"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Prénom :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="prenom_responsable" type="text" name="prenom_responsable">
							</div>
						</div>
                        <div class="bouton"> <!-- Boutton Ajouter -->
							<button type="submit" class="btn btn-primary " >Ajouter</button>
               			</div>  
        </form>  


@endsection