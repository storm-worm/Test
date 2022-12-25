@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title"> montant: {{ $salaire->montant }}</p>  
            
        </header>
        <div class="card-content">
            <p>formateur : {{ $formateurnom }}&nbsp;{{ $formateurprenom }}</p>
        </div>
        <div class="card-content">
            <p>periode  : {{ $periodedebut }}&nbsp;{{ $periodefin }}</p>
        </div>
    </div>
@endsection