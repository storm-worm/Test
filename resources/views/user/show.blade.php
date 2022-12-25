@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">nom : {{ $user->name }}</p>
        </header>
        <div class="card-content">
            email  : {{ $user->email }}<br><br>
            le role : @if($user->is_admin == 1) admin  @else normal user      
            @endif<br><br>
            créer à : {{ $user->created_at }}<br><br>
            créer à : {{ $user->updated_at }}<br><br>
            <a href="/generate-pdf1"   title="Printer Friendly, PDF & Email"><img class="pf-button-img" src="https://cdn.printfriendly.com/buttons/printfriendly-pdf-button.png" alt="Print Friendly, PDF & Email" style="width: 112px;height: 24px;"  /></a>
        </div>
    </div>
@endsection