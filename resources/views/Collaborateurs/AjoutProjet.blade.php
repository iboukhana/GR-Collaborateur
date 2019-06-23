@extends('base')
@section('content')

<div class="row">
	<div class="col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
   				<center><h1>Ajout Projet</h1></center>
 			 </div>
			<div class="card-body">
				<div class="container">
					<form action="{{ url('projet')}}" method="post">
					{{csrf_field()}}
			
                    	<div class="form-group row">
							<label for="nom_projet"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom Projet :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="nom_projet" type="text" name="nom_projet">
							</div>
						</div>

						<div class="form-group row">
							<label for="responsable_id"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom Résponsable :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<select name="responsable_id" id="responsable_id" class="form-control dynamic" >
									@foreach($responsable_id as $nom_responsable)
								<option value="{{$nom_responsable->id}}">{{$nom_responsable->nom_responsable}} {{$nom_responsable->prenom_responsable}}</option>
									@endforeach	
							</select>
							</div>
                        </div>
                        <div class="bouton"> <!-- Boutton Ajouter -->
							<button type="submit" class="btn btn-primary ">Ajouter</button>
               			</div>  
        </form>  


@endsection