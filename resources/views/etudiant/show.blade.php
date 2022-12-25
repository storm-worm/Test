@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">nom : {{ $etudiant->nom }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>prenom : {{ $etudiant->prenom }}</p>
                <p>prenom : {{ $etudiant->gmail }}</p>
                <p>créer à : {{ $etudiant->created_at }}</p>
                <p>modifier à : {{ $etudiant->updated_at }}</p>
                <hr>
                <p>groupes :</p>
                <ul>
                    @foreach($etudiant->groupes as $groupe)
                        <li>{{ $groupe->nom }}</li>
                        {{ $groupe->matiere->nom }}<br>
                        {{ $groupe->matiere->niveau->nom }}<br>
                        les professeurs de ce groupe sont:<br>
                        @foreach($groupe->formateurs as $formateur)
                            {{ $formateur->nom }} {{ $formateur->prenom }}<br>
                        @endforeach
                    @endforeach
                </ul>
                <hr>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>
@endsection