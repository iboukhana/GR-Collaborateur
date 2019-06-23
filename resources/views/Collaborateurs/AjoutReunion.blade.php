<!Doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	
	     <title>SIRH</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap-clockpicker.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-clockpicker.min.css')}}">
        <script src="{{asset('assets/js/bootstrap-clockpicker.min.js')}}"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css"/>
        <link rel="stylesheet" href="{{asset('css/ajoutreunion.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>

	
	
		

</head>
<body>
	<div class="container ">
		<header >
			<nav class="navbar">
				<ul class="list-inline " >
					<li class="list-inline-item list-inline-mb-0" ><span><img src="{{asset('img/SQLI-logo.png')}}" alt=""></span></li>
					<li class="list-inline-item list-inline-mb-0"><a class="nav-link" title="Liste des collaborateurs" href='{{ url('liste/index')}}'>Liste des collaborateurs</a></li>
					<li class="list-inline-item list-inline-mb-0"><a class="nav-link" title="Nouveau collaborateur" href='{{ url('collaborateur/create')}}'>Nouveau collaborateur</a>
					</li>
					<li class="list-inline-item list-inline-mb-0"><a class="nav-link" title="Liste des reunions" href="#">Liste des reunions</a></li>
					<li class="list-inline-item list-inline-mb-0"><a class="nav-link" title="Planifier une reunion" href='{{ url('reunion/create')}}'>Planifier une reunion</a>
					</li>
					<li class="list-inline-item list-inline-mb-0"><a href="#"><span class="glyphicon glyphicon-bell" ></span></a></li>
	             	<li class="list-inline-item list-inline-mb-0"><a class="nav-link" href="#">Se déconnecter</a></li>
				 </ul>
			</nav>
		</header>

		<form  action="{{ url('collaborateur/search')}}" method="post" >
				{{csrf_field()}}
				<h1>Ajouter une réunion</h1>

				<div class="form-group row"> <!-- Libellé -->
					<label for="libelle_id" class="col-md-3 col-form-label">Libellé</label>
					<div class="col-md-6">
						<input type="text" id="libelle_id" class="form-control" name="libelle" placeholder="Libellé"required>
					</div>
				</div>	

                <div class="form-group row"> <!-- Nom du projet -->
					<label for="id_collaborateur" class="col-md-3 col-form-label">Nom du Collaborateur</label>	
					<div class="col-md-6">
						<input id="id_collaborateur" placeholder="Nom du Collaborateur">
					</div>
                </div>
              
				<div class="form-group row input-group clockpicker "> <!-- Date prévue -->
					<label for="date_prevue_id" class="col-md-3 col-form-label">Date prévue</label>
					<div class="col-sm-6 ">
						<input type="datetime-local" class="form-control" name="date_prevue" id="date_prevue_id">
							
					</div>
                </div>	
                
                <div class="form-group row"> <!-- Date planifiée -->
					<label for="date_prevue_id" class="col-md-3 col-form-label">Date planifiée</label>
					<div class="col-md-6">
						<input type="datetime-local" id="date_prevue_id" class="form-control" name="date_prevue" placeholder="Date planifiée"required>
					</div>
				</div>	

                <div class="form-group row"> <!-- Date de planification revue -->
					<label for="date_revue_id" class="col-md-3 col-form-label">Date de planification revue</label>
					<div class="col-md-6">
						<input type="datetime-local" id="date_revue_id" class="form-control" name="date_revue" placeholder="Date de planification revue"required>
					</div>
				</div>	
				
                <div class="form-group row"> <!-- Raison de replanification -->
					<label for="raison_id" class="col-md-3 col-form-label">Raison de replanification</label>
					<div class="col-md-6">
						<input type="text" id="	raison_id" class="form-control" name="raison_replanification" placeholder="Raison de replanification"required>
					</div>
				</div>	
	
				<div class="bouton"> <!-- Boutton Ajouter -->
					<button type="submit" class="btn btn-primary ajt">Ajouter</button>
				</div>     
		</form>
		</div>	
	 
	 
	 
	


	   
	   <script>
			$( function() {
				$( "#id_collaborateur" ).autocomplete({
				source: 'http://127.0.0.1:8000/search'
				});
			});
		</script>
</body>
</html>