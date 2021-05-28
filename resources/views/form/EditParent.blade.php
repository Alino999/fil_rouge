@extends('layouts.apps')

@section('content')
<div class="container mt-5 mb-5">
    <div class="mt-3 mb-2">
        <h3 class="text-center "> Editer compte parent d'élève</h3>
    </div>
    <form method="POST" action="{{ url('listeparent/edit/'.$listeparents->id) }}">
@csrf
        <div class="form-group ">
          <input type="text" class="form-control" name="nom"  placeholder="Nom" value="{{ $listeparents->nom }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="prenom"  placeholder="Prénom" value="{{ $listeparents->prenom }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="pseudo"  placeholder="Pseudo" value="{{ $listeparents->pseudo }}">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email"  placeholder="E-mail" value="{{ $listeparents->email }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="genre" placeholder="Genre" value="{{ $listeparents->genre }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="telephone" placeholder="Téléphone" value="{{ $listeparents->telephone }}">
        </div>
        <button type="submit" class="btn btn-primary text-center mb-3">Envoyer</button>
    </form>
    <form action="{{ url('deleteparents/delete/'.$listeparents->id) }}" method="POST">
        @csrf
        @method('DELETE')
            <button class="btn btn-danger mb-4 mr-4 float-right" type="submit">Supprimer</button>
      </form>
</div>

@endsection