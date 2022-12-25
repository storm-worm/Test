@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un periode</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('periodes.update', $periode->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">debut</label>
                        <div class="control">
                          <input class="input @error('debut') is-danger @enderror" type="date" name="debut" value="{{ old('debut', $periode->debut) }}" placeholder="">
                        </div>
                        @error('debut')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">fin</label>
                        <div class="control">
                          <input class="input @error('fin') is-danger @enderror" type="date" name="fin" value="{{ old('fin', $periode->fin) }}" placeholder="">
                        </div>
                        @error('fin')
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