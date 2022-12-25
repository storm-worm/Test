
@extends('template')
@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Création d'un formateur</p>
    </header>
    <div class="card-content">
        <div class="content">
<form action="{{ route('formateurs.store') }}" method="POST">
    @csrf
    <div class="field">
        <label class="label">groupes</label>
<div class="select is-multiple">
    <select name="cats[]" multiple>
        @foreach($groupes as $groupe)
            <option value="{{ $groupe->id }}" {{ in_array($groupe->id, old('cats') ?: []) ? 'selected' : '' }}>{{ $groupe->nom }}-{{ $groupe->matiere->nom }}-{{ $groupe->matiere->niveau->nom }}</option>
        @endforeach
    </select>
</div>
    </div>
    <div class="field">
        <label class="label">nom</label>
        <div class="control">
          <input class="input @error('nom') is-danger @enderror" type="text" name="nom" value="{{ old('nom') }}" placeholder="">
        </div>
        @error('nom')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="field">
        <label class="label">prenom</label>
        <div class="control">
          <input class="input @error('prenom') is-danger @enderror" type="text" name="prenom" value="{{ old('prenom') }}" placeholder="">
        </div>
        @error('prenom')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="field">
        <label class="label">gmail</label>
        <div class="control">
          <input class="input @error('gmail') is-danger @enderror" type="text" name="gmail" value="{{ old('gmail') }}" placeholder="">
        </div>
        @error('gmail')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="field">
        <label class="label">cin</label>
        <div class="control">
          <input class="input @error('cin') is-danger @enderror" type="text" name="cin" value="{{ old('cin') }}" placeholder="">
        </div>
        @error('cin')
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