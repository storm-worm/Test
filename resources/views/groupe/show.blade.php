@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">nom : {{ $groupe->nom }}</p>  
            
        </header>
        <div class="content">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matiere : {{ $matiere }}</p>
        </div>
        <div class="content">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;niveau : {{ $niveau }}</p>
        </div>
        <div class="content">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;description : {{ $groupe->description }}</p>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;les profs de ce groupe sont :</p>
            @foreach($groupe->formateurs as $formateur)
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $formateur->nom }} {{ $formateur->prenom }}<br>
                    @endforeach
                </ul>
        </div>
        <div class="content">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Créer à :  &nbsp;&nbsp;{{ $groupe->created_at }}</p>
        </div>
        <div class="content">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Modifier à :  &nbsp;&nbsp;{{ $groupe->updated_at }}</p>
        </div>
    </div>
@endsection