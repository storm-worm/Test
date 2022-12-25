@extends('template') 
@section('content')
@if(session()->has('info'))
<div class=" mt-4">
        <div class="notification is-success">
            
            {{ session('info') }}
        </div></div>
    @endif
<!DOCTYPE html>
<html lang="en">
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
 
  
  <a href="/periodes/create">Créer</a>
</div>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>admin dashbord</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body >
<div class="card-body">
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>debut</th>
                <th>fin</th>
                <th></th>
        <th></th>
        <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($periodes as $periode)
            <tr>
                <td><strong>{{ $periode->debut }}</strong></td>
                <td><strong>{{ $periode->fin }}</strong></td>
            <td><a class="button is-primary" href="{{ route('periodes.show', $periode->id) }}">Voir</a></td>
            <td><a class="button is-warning" href="{{ route('periodes.edit', $periode->id) }}">Modifier</a></td>
            <td>
                <form action="{{ route('periodes.destroy', $periode->id) }}" method="post">
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
</div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

    </body></html>