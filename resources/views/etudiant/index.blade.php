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
 
  
  <a href="/etudiants/create">Créer</a>
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
            <p class="card-header-title">etudiants</p>
            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('etudiants.index') }}" @unless($nom) selected @endunless>Toutes groupes</option>
                    @foreach($groupes as $groupe)
                        <option value="{{ route('etudiants.groupe', $groupe->nom) }}" {{ $nom == $groupe->nom ? 'selected' : '' }}>{{ $groupe->nom }}-{{ $groupe->matiere->nom }}-{{ $groupe->matiere->niveau->nom }}</option>
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
                            <th>nom</th>
                            <th>prenom</th>
                            <th>gmail</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($etudiants as $etudiant)
                            <tr>
                                <td>{{ $etudiant->id }}</td>
                                <td><strong>{{ $etudiant->nom }}</strong></td>
                                <td><strong>{{ $etudiant->prenom }}</strong></td>
                                <td><strong>{{ $etudiant->gmail }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('etudiants.show', $etudiant->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('etudiants.edit', $etudiant->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="post">
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