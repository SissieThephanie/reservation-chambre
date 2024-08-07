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
                    <h2 class="h2">Ajouter une chambre</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('/chambres/create')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label>N ° chambre :</label>
                        <input type="text" name="numchambre" class="form-control" value="{{old('numchambre')}}">
                        @error('numchambre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Type chambre :</label>
                        <input type="text" name="typechambre" class="form-control" value="{{old('typechambre')}}">
                        @error('typechambre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Prix nuité :</label>
                        <input type="number" name="prix" class="form-control" value="{{old('prix')}}">
                        @error('prix')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <a href="{{url('chambres')}}" class="btn btn-success">Annuler</a>
                        <button class="btn btn-primary float-end">Enregistrer</button>
                    </div>
                    </form>
                    {{-- <a href="{{ url('/clients/create')}}" class="btn btn-primary float-end">Ajout Clients</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection