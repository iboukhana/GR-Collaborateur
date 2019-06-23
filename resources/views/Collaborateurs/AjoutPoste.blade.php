@extends('base')
@section('content')

<div class="row">
	<div class="col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
   				<center><h1>Ajout Poste</h1></center>
 			 </div>
			<div class="card-body">
				<div class="container">
					<form action="{{ url('poste')}}" method="post">
					{{csrf_field()}}
			
                    	<div class="form-group row">
							<label for="nom_poste"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom Poste :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="nom_poste" type="text" name="nom_poste">
							</div>
						</div>

						<div class="form-group row">
							<label for="description"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Déscription :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="description" type="text" name="description">
							</div>
						</div>
                        <div class="bouton"> <!-- Boutton Ajouter -->
							<button type="submit" class="btn btn-primary " >Ajouter</button>
               			</div>  
        </form>  


@endsection