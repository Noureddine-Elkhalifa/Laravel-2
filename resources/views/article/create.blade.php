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
    <div class="container">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-6">
            <h1>Créer un nouvel article</h1>

    <form action="{{ route('articles.store')}}" method="POST" class="my-4">
        @csrf
        <div class="form-group">
            <label for="designation">Désignation</label>
            <input type="text" class="form-control" name="designation" id="designation">
        </div>
        <div class="form-group">
            <label for="prix_unitaire">Prix</label>
            <input type="text" class="form-control" name="prix_unitaire" id="prix_unitaire">
        </div>
        <div class="form-group">
            <label for="quantite">Quantité</label>
            <input type="text" class="form-control" name="quantite" id="quantite">
        </div>
        <button type="submit" class="btn btn-primary">Créer un article</button>
        <button type="reset" class="btn btn-secondary">Réinitialiser</button>
        <a href="{{ route('articles.index') }}" class="btn btn-danger">Annuler</a>
    </form>

        </div>


      </div>

    </div>
    
</body>
</html>