<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show</h1>

   
    
        <h1>Article {{$article["id"]}}</h1>
        <div>
            <label for="">Designation</label>
            <input type="text" name="designation" id="" value={{$article["designation"]}}>
        </div>

        <div>
            <label for="">Prix</label>
            <input type="text" name="prix" id="" value={{$article["prix"]}}>
        </div>

        <div>
            <label for="">Quantite</label>
            <input type="text" name="quantite" id="" value={{$article["quantite"]}}>
        </div>
        <a href="{{route('articles.index')}}">Retour</a>

    
</body>
</html>