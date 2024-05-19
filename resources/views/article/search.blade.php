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
 
    <div class="container mt-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-6">
                <h1>Rechercher un article</h1>
                <form action="{{ route('articles.find') }}" method="POST" class="mb-3">
                    @csrf
                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" name="id" id="id" value='<?php echo isset($article) ? $article->id: "" ?>'>
                    </div>
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                    <button type="reset" class="btn btn-secondary">Réinitialiser</button>
                    <a href="{{ route('articles.index') }}" class="btn btn-danger">Annuler</a>
                </form>
                
                @isset($message)
                <div class="alert alert-danger">
                    Article introuvable
                </div>
                @endisset
               
        
                @isset($article )
                
                <h1>Détails</h1>
                <table class="table">
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

                <a href="{{ route('articles.index') }}" class="btn btn-info">Retour à la liste des articles</a>
            
            
                @endisset

            

        </div>


        </div>
        
    </div>
</body>
</html>