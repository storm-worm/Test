@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un etudiant</p>
        </header>
        <div class="card-content">
            <div class="content">
<form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
    @csrf
    @method('put')
<div class="field">
    <label class="label">groupes</label>
    <div class="select is-multiple">
        <select name="cats[]" multiple>
            @foreach($groupes as $groupe) 
                <option value="{{ $groupe->id }}" {{ in_array($groupe->id, old('cats') ?: $etudiant->groupes->pluck('id')->all()) ? 'selected' : '' }}>{{ $groupe->nom }}-{{ $groupe->matiere->nom }}-{{ $groupe->matiere->niveau->nom }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="field">
    <label class="label">nom</label>
    <div class="control">
      <input class="input @error('nom') is-danger @enderror" type="text" name="nom" value="{{ old('nom', $etudiant->nom) }}" placeholder="">
    </div>
    @error('nom')
        <p class="help is-danger">{{ $message }}</p>
    @enderror
</div>
<div class="field">
    <label class="label">prenom</label>
    <div class="control">
      <input class="input @error('prenom') is-danger @enderror" type="text" name="prenom" value="{{ old('prenom', $etudiant->prenom) }}" placeholder="">
    </div>
    @error('prenom')
        <p class="help is-danger">{{ $message }}</p>
    @enderror
</div>
<div class="field">
    <label class="label">gmail</label>
    <div class="control">
      <input class="input @error('gmail') is-danger @enderror" type="text" name="gmail" value="{{ old('gmail', $etudiant->gmail) }}" placeholder="">
    </div>
    @error('gmail')
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
</div>