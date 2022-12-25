
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
 
  
  <a href="/matieres/create">Créer</a>
</div>
@section('content')
<style>select, .is-info {
    margin: 0.3em;
}
</style>
@if(session()->has('info'))
<div class="offset-lg-2 mt-4">
        <div class="notification is-success">
            {{ session('info') }}
        </div></div>
    @endif
    <div class="offset-lg-2 mt-4">
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">matieres</p>
            <a class="button is-info" href="/home">Accueil</a>
            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('matieres.index') }}" @unless($nom) selected @endunless>Toutes niveaux</option>
                    @foreach($niveaux as $niveau)
                        <option value="{{ route('matieres.niveau', $niveau->nom) }}" {{ $nom == $niveau->nom ? 'selected' : '' }}>{{ $niveau->nom }}</option>
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
                            <th>le niveau</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($matieres as $matiere)
                            <tr>
                                <td>{{ $matiere->id }}</td>
                                <td><strong>{{ $matiere->nom }}</strong></td>
                                <td><strong>{{ $matiere->niveau->nom }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('matieres.show', $matiere->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('matieres.edit', $matiere->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('matieres.destroy', $matiere->id) }}" method="post">
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
</div>
@endsection