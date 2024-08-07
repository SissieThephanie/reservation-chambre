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
                    <h2 class="h2">Modifier une chambre</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('chambres/'.$chambre->id.'/update')}}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label>N° chambre :</label>
                        <input type="text" name="numchambre" class="form-control" value="{{$chambre->numchambre}}">
                        @error('nom')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Type chambre :</label>
                        <input type="text" name="typechambre" class="form-control" value="{{$chambre->typechambre}}">
                        @error('prenom')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Prix nuité :</label>
                        <input type="number" name="prix" class="form-control" value="{{$chambre->prix}}">
                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <a href="{{url('chambres')}}" class="btn btn-success">Annuler</a>
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