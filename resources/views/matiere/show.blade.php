@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">nom : {{ $matiere->nom }}</p>  
            
        </header>
        <div class="content">
            <br>
            <p>&nbsp;description :  &nbsp;&nbsp;{{ $matiere->description }}</p>
        </div>
        <div class="content">
            <p>&nbsp;niveau :  &nbsp;&nbsp;{{ $matiere->niveau->nom }}</p>
        </div>
        <div class="content">
            <p>&nbsp;Créer à :  &nbsp;&nbsp;{{ $matiere->created_at }}</p>
        </div>
        <div class="content">
            <p>&nbsp;Modifier à :  &nbsp;&nbsp;{{ $matiere->updated_at }}</p>
        </div>
        
    </div> 
@endsection