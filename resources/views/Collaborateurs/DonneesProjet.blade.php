@extends('base')
@section('content')
<div class="card">
					<div class="card-header"><center><h1>{{ $projets->nom_projet}}</h1></center></div>
					<div class="card-body">
              </div>

                  <form action="{{ URL('collaborateur/updateprojet/'. $projets->id ) }}" method="post">
                  {{csrf_field()}}
                    <div class="form-group row">
                        <label for="nom_projet"
                            class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom Projet :</label>
                        <div class="col-sm-6 col-md-6 col-lg-8">
                            <span class="clickMe_nprojet">{{ $projets->nom_projet}}</span>
                        </div>
                    </div>

                <div class="form-group row">
                  <label for="responsable_id"
                    class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nom résponsables :</label>
                  <div class="col-sm-6 col-md-6 col-lg-8">
                  <span class="clickMe_nresponsable" for="nresponsable">{{ $projets->Responsable->nom_responsable }} {{ $projets->Responsable->prenom_responsable }}</span>
                  <select name="responsable_id" id="nresponsable" for="nresponsable" class="blur_nresponsable form-control dynamic" >
                    @foreach($responsables as $responsable)
                    <option  value="{{$responsable->id}}">{{$responsable->nom_responsable}} {{$responsable->prenom_responsable}}</option>
                    @endforeach	
                  </select>
                  </div>
                  <i class="fa fa-pencil" id="pencil_nresponsable" aria-hidden="true"></i>
                  <button type="button" class="btn btn-primary form-control-pf-save" aria-label="Save" id="save_nresponsable"><i class="fa fa-check" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default form-control-pf-cancel" aria-label="Cancel" id="cancel_nresponsable"><i class="fa fa-times" aria-hidden="true"></i></button>         
                </div>
                <input type="submit"  id="modifier" class="btn btn-primary" value="Modifier"/>


</form>
              
             </div><!--tab-->
					</div><!-- .card-body -->
				</div>
@endsection