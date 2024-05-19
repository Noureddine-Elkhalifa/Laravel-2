<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Document</title>
</head>

<body>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-6">
                <h1 class="my-4">Détails</h1>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Champ</th>
                            <th scope="col">Valeur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Id</th>
                            <td>{{ $client->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nom</th>
                            <td>{{ $client->nom }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Prenom</th>
                            <td>{{ $client->prenom }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Telephone</th>
                            <td>{{ $client->tel }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container my-4 mt-5">
        <h1>List des commandes</h1>
        @if (count($commandes)=== 0)
            <h2>Pas de commandes</h2>
        @else
        <table class=" table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Statut</th>
                   <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $c)
                    <tr>
                        <td>{{$c -> id}}</td>
                        <td>{{$c -> date}}</td>
                        <td>{{$c -> statut}}</td>
                      
                        <td>
                            <a href={{route('commandeDetails',$c->id)}} class="btn btn-primary" method="post">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
       
        </div>

</body>

</html>
