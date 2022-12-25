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
 
  
  <a href="/groupes/create">Créer</a>
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
            <p class="card-header-title">groupe</p>
            
            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('groupes.index') }}" @unless($nom) selected @endunless>Toutes matieres</option>
                    @foreach($matieres as $matiere)
                        <option value="{{ route('groupes.matiere', $matiere->nom) }}" {{ $nom == $matiere->nom ? 'selected' : '' }}>{{ $matiere->nom }}-{{ $matiere->niveau->nom }}</option>
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
                            <th>matiere</th>
                            <th>niveau</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groupes as $groupe)
                            <tr>
                                <td>{{ $groupe->id }}</td>
                                <td><strong>{{ $groupe->nom }}</strong></td>
                                <td><strong>{{ $groupe->matiere->nom }}</strong></td>
                                <td><strong>{{ $groupe->matiere->niveau->nom }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('groupes.show', $groupe->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('groupes.edit', $groupe->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('groupes.destroy', $groupe->id) }}" method="post">
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