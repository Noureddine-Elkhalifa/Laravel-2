<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
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
                <td>{{ $article->id }}</td>
            </tr>
            <tr>
                <th scope="row">Désignation</th>
                <td>{{ $article->designation }}</td>
            </tr>
            <tr>
                <th scope="row">Prix</th>
                <td>{{ $article->prix_unitaire }}</td>
            </tr>
            <tr>
                <th scope="row">Quantité</th>
                <td>{{ $article->quantite }}</td>
            </tr> 
        </tbody>
    </table>
    <a href="{{ route('articles.index') }}" class="btn btn-primary">Retour à la liste des articles</a>
    

        </div>

       </div>



    </div>
    
</body>
</html>