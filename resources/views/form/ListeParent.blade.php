@extends('layouts.apps')

@section('content')
<div class=" mt-5">
    <div class="card" style="width: 100%;">
      <h3 class="card-text text-center mb-3">Liste des parents d'élèves</h3>
        <div class="card-body">
          <div class="row d-flex mb-2">
            <h5 class="col-md-1 card-title">Nom</h5>
            <h5 class=" col-md-2 card-title">Prénom</h5>
            <h5 class="col-md-2 card-title">Pseudo</h5>
            <h5 class=" col-md-2 card-title">E-mail</h5>
            <h5 class="col-md-2 card-title">Genre</h5>
            <h5 class="col-md-2 card-title">Téléphone</h5>
            <h5 class="col-md-1 card-title">Modifier</h5>
          </div>
          <div class="row d-flex ">
            @foreach ($listeparents as $listeparent)
            <h5 class="col-md-1 card-title">{{$listeparent->nom}}</h5>
            <h5 class=" col-md-2 card-title">{{$listeparent->prenom}}</h5>
            <h5 class="col-md-2 card-title">{{$listeparent->pseudo}}</h5>
            <h5 class=" col-md-2 card-title">{{$listeparent->email}}</h5>
            <h5 class="col-md-2 card-title">{{$listeparent->genre}}</h5>
            <h5 class="col-md-2 card-title">{{$listeparent->telephone}}</h5>
            <a class="col-md-1 btn btn-primary float-right mt-4" href="{{ url('editparent/edit/'.$listeparent->id) }}" >Modifier</a>

            @endforeach
          </div>
        </div>
      </div>
</div>

@endsection