@extends('base')
@section('content')

<div class="row">

        <div class="col-12">

            <!-- Examples -->
            <div class="card">
                <div class="card-header">  <h2 class="text-center">Liste des reunions</h2></div>
                <div class="card-body">

                    <table id="example1" class="table table-striped dataTable">
                    <thead>
                        <tr>
                            <th>Nom complet </th>
                            <th>Libelle</th>
                            <th>Date prevue</th>
                            <th>Date planifier</th>
                            <th>date replanification</th>
                            <th>raison de replanification</th>
                          
                            <th>Action</th>
                        </tr>
                    </thead>     
                    <tbody>
                        
                        @foreach($reunions as $reunion )  
                        <tr>                    
                            <td> {{ $reunion->Collaborateur->nom_collaborateur .' '. $reunion->Collaborateur->prenom_collaborateur  }}</td>
                            <td> {{ $reunion->libelle}}</td>
                            <td> {{ $reunion->date_prevue}}</td>
                            <td> {{ $reunion->date_planifiee }}</td>
                            <td> {{ $reunion->date_replanification }}</td>
                            <td> {{ $reunion->raison_replanification }}</td>
                            <td><a href="{{ URL::action('ReunionController@afficher_edit_reunion', $reunion->id)}}"><i class="fa fa-external-link" style="font-size:24px"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

                </div><!-- .card-body -->
            </div><!-- .card -->
            <!-- /End Examples -->

        </div><!-- .col -->

    </div><!-- .row -->



@endsection
