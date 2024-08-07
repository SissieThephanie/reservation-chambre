<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="h2">Clients</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/clients/create')}}" class="btn btn-primary float-end">Ajout Clients</a>
                    <table class="table table-responsive table-striped mt-2">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse</th>
                                <th>Contact</th>
                                <th>E-mail</th>
                                <th>C.I.N</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td>{{$client->nom}}</td>
                                <td>{{$client->prenom}}</td>
                                <td>{{$client->adresse}}</td>
                                <td>{{$client->phone}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->cin}}</td>
                                <td>
                                    <a href="{{url('clients/'.$client->id.'/update')}}" class="btn btn-success">Modifier</a>
                                    <a href="{{url('clients/'.$client->id.'/delete')}}" class="btn btn-danger" onclick="return confirm('Vous ètes sûre de la supprimer')">Supprimer</a>
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