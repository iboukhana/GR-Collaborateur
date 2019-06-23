@extends('base')
@section('content')

	
		<h2 class="content-heading"></h2>
	    <div class="row">

			<div class="col-12">
				<div class="card">
					<div class="card-header"><center><h1>Liste des cvs</h1></center></div>
					<div class="card-body">
						<table id="example1" class="table table-striped">
						<thead>
            				<tr>
							<th>Nom complet du collaborateur</th>
							<th>Nom du cv</th>
							<th>Version</th>
							<th>action</th>
							</tr>
						</thead>
					
							<tbody>
							@foreach($cvs as $cv)

				            <tr>
							<form method="POST" action="{{ URL('download/' . $cv->cv) }}">
                                {{csrf_field()}}

                                <td>{{$cv->collaborateur->nom_collaborateur}} {{$cv->collaborateur->prenom_collaborateur}}</td>
								<td>{{$cv->cv}}</td>
                                <td>{{$cv->date_soumission}}</td>
                                <td><button type="submit" class="btn btn-primary"><i class="fa fa-cloud-download" style="font-size:24px"></i></button>
								<button class="btn btn-primary"><a href="{{ URL::action('CollaborateurController@delete', $cv->id)}}"><i class="fa fa-trash trash" aria-hidden="true" style="font-size:24px"></i></a></button>
                                </td>
                                </form>
				            </tr>
                            @endforeach
				         
							</tbody>
						</table>

					</div><!-- .card-body -->
				</div><!-- .card -->
			</div><!-- .col -->

		</div><!-- .row -->

@endsection