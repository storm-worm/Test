@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">debut : {{ $periode->debut }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>fin :  &nbsp;&nbsp;{{ $periode->fin }}</p>
            </div>
            <div class="content">
                <p>Créer à :  &nbsp;&nbsp;{{ $periode->created_at }}</p>
            </div>
            <div class="content">
                <p>Modifier à :  &nbsp;&nbsp;{{ $periode->updated_at }}</p>
            </div>
        </div>
    </div>
@endsection