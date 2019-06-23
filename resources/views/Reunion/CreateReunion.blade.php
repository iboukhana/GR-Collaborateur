@extends('base')
@section('content')
	<div class="row">
	<div class="col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
						<center><h1>Créer une reunion</h1></center>
			 </div>
			<div class="card-body">
				<div class="container">
					<form action="{{ url('reunion')}}" method="post"  id="form1">
                    {{csrf_field()}}
						<div class="form-group row">
							<label for="libelle"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Libelle :</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="libelle" type="text" name="libelle">
							</div>
						</div>

						<div class="form-group row">
							<label for="date_prevue"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Date Prevue :</label>
							<div class="col-sm-6 col-md-6 col-lg-7 input-group">
								<input class="form-control datepicker" id="date_prevue" type="text"
									name="date_prevue">
								<div class="input-group-addon">
							        <span class="far fa-calendar-alt"></span>
							    </div>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-3 input-group clockpicker">
    							<input type="text" class="form-control" name ="horaire_prevue"placeholder="00:00">
							    <span class="input-group-addon">
							        <span class="far fa-clock"></span>
							    </span>
							</div>
						</div>

						<div class="form-group row">
							<label for="date_planifiee"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Date Planifiee :</label>
							<div class="col-sm-6 col-md-6 col-lg-7 input-group">
								<input class="form-control datepicker" id="date_planifiee" type="text"
									name="date_planifiee">
								<div class="input-group-addon">
							        <span class="far fa-calendar-alt"></span>
							    </div>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-3 input-group clockpicker">
    							<input type="text" class="form-control" name="horaire_planifiee" placeholder="00:00">
							    <span class="input-group-addon">
							        <span class="far fa-clock"></span>
							    </span>
							</div>
						</div>


						<div class="form-group row">
							<label for="date_replanification"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Date Replanification:</label>
							<div class="col-sm-6 col-md-6 col-lg-7 input-group">
								<input class="form-control datepicker" id="date_replanification" type="text"
									name="date_replanification">
									<div class="input-group-addon">
								        <span class="far fa-calendar-alt"></span>
								    </div>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-3 input-group clockpicker">
    							<input type="text" class="form-control"  name="horaire_replanification" placeholder="00:00">
							    <span class="input-group-addon">
							        <span class="far fa-clock"></span>
							    </span>
							</div>
						</div>

						<div class="form-group row">
							<label for="raison_replanification"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Raison Replanification:</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="raison_replanification" type="text"
									name="raison_replanification">
							</div>
						</div>


						<div class="form-group row">
							<label for="id_colaborateur"
								class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom Collaborateur:</label>
							<div class="col-sm-8 col-md-8 col-lg-10">
								<input class="form-control" id="id_colaborateur" type="text"
									name="id_colaborateur">
							</div>
                        </div>
                        <div class="bouton"> <!-- Boutton Ajouter -->
					<button type="submit" class="btn btn-primary ajt pull-right">Ajouter</button>
                </div>  
        </form>    
@endsection