@extends('layouts.apps')

@section('content')
<div class="container mt-5 mb-5">
    <div class="mt-3 mb-2">
        <h3 class="text-center "> Ajouter un parent d'élève</h3>
    </div>
    <form method="POST" action="{{ url('ajoutparents/create') }}">
@csrf
        <div class="form-group ">
          <input type="text" class="form-control" name="nom"  placeholder="Nom">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="prenom"  placeholder="Prénom">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="pseudo"  placeholder="Pseudo">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email"  placeholder="E-mail">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="genre" placeholder="Genre">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="telephone" placeholder="Téléphone">
        </div>
        <button type="submit" class="btn btn-primary text-center mb-3">Envoyer</button>
    </form>
</div>

@endsection