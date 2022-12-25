@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">nom : {{ $niveau->nom }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>description :  &nbsp;&nbsp;{{ $niveau->description }}</p>
            </div>
            <div class="content">
                <p>Créer à :  &nbsp;&nbsp;{{ $niveau->created_at }}</p>
            </div>
            <div class="content">
                <p>Modifier à :  &nbsp;&nbsp;{{ $niveau->updated_at }}</p>
            </div>
        </div>
    </div>
@endsection