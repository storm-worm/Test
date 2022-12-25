@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un paiment</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('paiments.update', $paiment->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">etudiant</label>
                        <div class="select">
                            <select name="etudiant_id">
                                @foreach($etudiants as $etudiant)
                                    <option value="{{ $etudiant->id }}">{{ $etudiant->nom }} {{ $etudiant->prenom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">groupe</label>
                        <div class="select">
                            <select name="groupe_id">
                                @foreach($groupes as $groupe)
                                    <option value="{{ $groupe->id }}">{{ $groupe->nom }} {{ $groupe->matiere->nom }} {{ $groupe->matiere->niveau->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">periode</label>
                        <div class="select">
                            <select name="periode_id">
                                @foreach($periodes as $periode)
                                    <option value="{{ $periode->id }}">{{ $periode->debut }} {{ $periode->fin }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">montant</label>
                        <div class="control">
                          <input class="input @error('montant') is-danger @enderror" type="text" name="montant" value="{{ old('montant', $paiment->montant) }}" placeholder="">
                        </div>
                        @error('montant')
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
@endsection