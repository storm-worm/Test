@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">description : {{ $historique->description }}</p>  
            
        </header>
        <div class="card-content">
            <p>etudiant : {{ $etudiantnom  }} {{ $etudiantprenom  }}</p>
        </div>
        <div class="card-content">
            <p>description : {{ $historique->description  }}</p>
        </div>
    </div>
@endsection