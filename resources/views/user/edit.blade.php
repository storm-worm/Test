@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un user</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">is_admin</label>
                        <div class="control">
                          <input class="input @error('is_admin') is-danger @enderror" type="text" name="is_admin" value="{{ old('is_admin', $user->is_admin) }}" placeholder="">
                        </div>
                        @error('is_admin')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">name</label>
                        <div class="control">
                          <input class="input @error('name') is-danger @enderror" type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="">
                        </div>
                        @error('name')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">email</label>
                        <div class="control">
                          <input class="input @error('email') is-danger @enderror" type="text" name="email" value="{{ old('email', $user->email) }}" placeholder="">
                        </div>
                        @error('email')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>                    
                    <div class="field">
                        <div class="control">
                          <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection