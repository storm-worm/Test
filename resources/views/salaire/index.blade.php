@extends('template')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="/home">Home</a>
 
  
  <a href="/salaires/create">Créer</a>
</div>
@section('content')

<style>select, .is-info {
    margin: 0.3em;
}
</style>
@if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">salaire</p>
            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('salaires.index') }}" @unless($montant) selected @endunless>Toutes formateurs</option>
                    @foreach($formateurs as $formateur)
                        <option value="{{ route('salaires.formateur', $formateur->nom) }}" {{ $montant == $formateur->montant ? 'selected' : '' }}>{{ $formateur->nom }}&nbsp;
                            {{ $formateur->prenom }}</option>
                    @endforeach
                </select>
            </div>
                    </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>montant</th>
                            <th>type</th>
                            <th>formateur</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($salaires as $salaire)
                            <tr>
                                <td>{{ $salaire->id }}</td>
                                <td><strong>{{ $salaire->montant }}</strong></td>
                                <td><strong>{{ $salaire->type }}</strong></td>
                                <td><strong>{{ $salaire->formateur->nom }}&nbsp;{{ $salaire->formateur->prenom }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('salaires.show', $salaire->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('salaires.edit', $salaire->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('salaires.destroy', $salaire->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection