
@extends('template')
@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Création d'un salaire</p>
    </header>
    <div class="card-content">
        <div class="content">
<form action="{{ route('salaires.store') }}" method="POST">
    @csrf
    <div class="field">
        <label class="label">formateur</label>
        <div class="select">
            <select name="formateur_id">
                @foreach($formateurs as $formateur)
                    <option value="{{ $formateur->id }}">{{ $formateur->nom }}&nbsp;
                        {{ $formateur->prenom }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="field">
        <label class="label">periode</label>
        <div class="select">
            <select name="periode_id">
                @foreach($periodes as $periode)
                    <option value="{{ $periode->id }}">{{ $periode->debut }}&nbsp;
                        {{ $periode->fin }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="field">
        <label class="label">montant</label>
        <div class="control">
          <input class="input @error('montant') is-danger @enderror" type="text" name="montant" value="{{ old('montant') }}" placeholder="">
        </div>
        @error('montant')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="field">
        <label class="label">type</label>
        <div class="control">
          <input class="input @error('type') is-danger @enderror" type="text" name="type" value="{{ old('type') }}" placeholder="">
        </div>
        @error('type')
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