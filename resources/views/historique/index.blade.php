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
 
  
  <a href="/historiques/create">Créer</a>
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
            <p class="card-header-title">historique</p>
            <a class="button is-info" href="/home">Accueil</a>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>le propiétaire</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($historiques as $historique)
                            <tr>
                                <td>{{ $historique->id }}</td>
                                <td><strong>{{ $historique->etudiant->nom }} {{ $historique->etudiant->prenom }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('historiques.show', $historique->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('historiques.edit', $historique->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('historiques.destroy', $historique->id) }}" method="post">
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