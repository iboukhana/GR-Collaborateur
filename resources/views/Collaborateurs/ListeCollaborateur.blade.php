@extends('base')
@section('content')

	
	<div class="row">

			<div class="col-12">

				<!-- Examples -->
				<div class="card">
					<div class="card-header"><center><h1>Liste des collaborateurs</h1></center></div>
					<div class="card-body">
					<button class="btn btn-primary creer" onclick="window.location.href='{{ url('collaborateur/create')}}'">créer</button>
					<table id="example1" class="table table-striped">
						<thead>
            				<tr>
								<th>Etat</th>
								<th>Nom du collaborateur</th>
								<th>Prénom du collaborateur</th>
								<th>Date de naissance</th>
								<th>GSM</th>
								<th>E_mail</th>
								<th>Nombre d'années d'expériences hors SQLI</th>
								<th>Action</th>
							</tr>
						</thead>
					
							<tbody>
							@foreach($collaborateurs as $collab)
				<tr>
		
						<td>@if($collab->date_sortie == null)<i class="fa fa-circle" style="color:green"></i> @else<i class="fa fa-circle" style="color:red"></i> @endif</td>
						<td>{{ $collab->nom_collaborateur }}</td>
						<td>{{ $collab->prenom_collaborateur }}</td>
						<td>{{ $collab->date_naissance }}</td>
						<td>{{ $collab->numero_telephone }}</td>
						<td>{{ $collab->e_mail }}</td>
						<td>{{ $collab->nombre_annee_experience_hors_sqli }}</td>
						<td><a href="{{ URL::action('CollaborateurController@show', $collab->id)}}"><i class="fa fa-external-link link" style="font-size:24px"></i></a> <a href="{{ URL::action('CollaborateurController@showprojet', $collab->id)}}"><i class="fa fa-external-link-square	
 link" style="font-size:24px"></i></a><a href="{{ URL::action('CollaborateurController@liste', $collab->id)}}"><i class="fa fa-file link" aria-hidden="true" style="font-size:24px"></i></a></td>
				
				</tr>
				@endforeach	
							</tbody>
						</table>
					</div><!-- .card-body -->
				</div><!-- .card -->
			</div><!-- .col -->
		</div><!-- .row -->

@endsection