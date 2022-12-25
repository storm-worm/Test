@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">nom: {{ $formateur->nom }}</p>
        </header>
        <div class="card-content">
             cin: {{ $formateur->cin }}
        </div>
        <div class="card-content">
             gmail: {{ $formateur->gmail }}
        </div>
        <div class="card-content">
             prenom: {{ $formateur->prenom }}
           </div>
        <div class="card-content">
            <div class="content">
                <hr>
                <p>groupes :</p>
                <ul>
                    @foreach($formateur->groupes as $groupe)
                    <li>{{ $groupe->nom }}</li>
                    {{ $groupe->matiere->nom }}<br>
                    {{ $groupe->matiere->niveau->nom }}<br>
                    @foreach($groupe->etudiants as $etudiant)
                    {{ $etudiant->nom }}
                    @endforeach
                    @endforeach
                </ul>
                <hr>
               </div>
        </div>
    </div>
@endsection