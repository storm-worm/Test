
@extends('template')
@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Création d'un historique</p>
    </header>
    <div class="card-content">
        <div class="content">
<form action="{{ route('historiques.store') }}" method="POST">
    @csrf
    <div class="field">
        <label class="label">etudiant</label>
        <div class="select">
            <select name="etudiant_id">
                @foreach($etudiants as $etudiant)
                    <option value="{{ $etudiant->id }}">{{ $etudiant->nom}}&nbsp;{{ $etudiant->prenom}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="field">
        <label class="label">description</label>
        <div class="control">
          <input class="input @error('description') is-danger @enderror" type="text" name="description" value="{{ old('description') }}" placeholder="">
        </div>
        @error('description')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="field">
        <div class="control">
          <button class="button is-link">Envoyer</button>
        </div>
    </div>
</form>
</div>
</div>
</div>@endsection