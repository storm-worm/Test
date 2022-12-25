@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">etudiant : {{ $etudiantnom }} {{ $etudiantnom }}</p>  
            
        </header>
        <div class="card-content">
            <p>groupe: {{ $paiment->groupe->nom }} </p><br>
            <p>matiere: {{ $paiment->groupe->matiere->nom }} </p><br>
            <p>niveau: {{ $paiment->groupe->matiere->niveau->nom }} </p><br>
            <p>montant: {{ $paiment->montant }} </p><br>
            <p>periode: {{ $paiment->periode->debut }}  {{ $paiment->periode->fin }}</p><br>
            <div class="content">
                <p>Créer à :  &nbsp;&nbsp;{{ $paiment->created_at }}</p>
            </div>
            <div class="content">
                <p>Modifier à :  &nbsp;&nbsp;{{ $paiment->updated_at }}</p>
            </div>
        </div>
    </div>
@endsection