<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create</h1>

    <form action="{{route('articles.store')}}" method="POST">
        @csrf
        <div>
            <label for="">Designation</label>
            <input type="text" name="designation" id="" >
        </div>

        <div>
            <label for="">Prix</label>
            <input type="text" name="prix" id="" >
        </div>

        <div>
            <label for="">Quantite</label>
            <input type="text" name="quantite" id="" >
        </div>
        <input type="submit" value="Ajouter">
        <input type="reset" value="Annuler">

    </form>
    <a href="{{route('articles.index')}}">Retour</a>
    
</body>
</html>