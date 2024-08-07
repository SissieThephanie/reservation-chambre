@extends('home')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h2 class="h2">Modifier un Client</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('clients/'.$client->id.'/update')}}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label>Nom :</label>
                        <input type="text" name="nom" class="form-control" value="{{$client->nom}}">
                        @error('nom')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Prénom :</label>
                        <input type="text" name="prenom" class="form-control" value="{{$client->prenom}}">
                        @error('prenom')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Adresse :</label>
                        <input type="text" name="adresse" class="form-control" value="{{$client->adresse}}">
                        @error('adresse')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Contact :</label>
                        <input type="number" name="phone" class="form-control" value="{{$client->phone}}">
                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>C.I.N :</label>
                        <input type="text" name="cin" class="form-control" value="{{$client->cin}}">
                        @error('cin')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>E-mail :</label>
                        <input type="email" name="email" class="form-control" value="{{$client->email}}">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <a href="{{url('clients')}}" class="btn btn-success">Annuler</a>
                        <button class="btn btn-primary float-end">Modifier</button>
                    </div>
                    </form>
                    {{-- <a href="{{ url('/clients/create')}}" class="btn btn-primary float-end">Ajout Clients</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection