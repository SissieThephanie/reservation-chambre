<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="h2">Chambres</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('/chambres/create')}}" class="btn btn-primary float end">Ajout Chambres</a>
                    <table class="table table-responsive table-striped mt-2">
                        <thead>
                            <tr>
                                <th>N° chambre</th>
                                <th>Type chambre</th>
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chambres as $chambre)
                            <tr>
                                <td>{{$chambre->numchambre}}</td>
                                <td>{{$chambre->typechambre}}</td>
                                <td>{{$chambre->prix}}</td>
                                <td>
                                    <a href="{{url('chambres/'.$chambre->id.'/update')}}" class="btn btn-success">Modifier</a>
                                    <a href="{{url('chambres/'.$chambre->id.'/delete')}}" class="btn btn-danger" onclick="return confirm('Vous ètes sûre de la supprimer')">Supprimer</a>
                                </td>
                            </tr>  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>