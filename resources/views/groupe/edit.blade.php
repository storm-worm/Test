@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un groupe</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('groupes.update', $groupe->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">matiere</label>
                        <div class="select">
                            <select name="matiere_id">
                                @foreach($matieres as $matiere)
                                    <option value="{{ $matiere->id }}">{{ $matiere->nom }}-{{ $matiere->niveau->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">nom</label>
                        <div class="control">
                          <input class="input @error('nom') is-danger @enderror" type="text" name="nom" value="{{ old('nom', $groupe->nom) }}" placeholder="">
                        </div>
                        @error('nom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">description</label>
                        <div class="control">
                          <textarea class="textarea @error('ndescription') is-danger @enderror" type="text" name="description" value="{{ old('description', $groupe->description) }}" >{{ $groupe->description }}</textarea>
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
    </div>
@endsection