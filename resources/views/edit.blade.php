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
        <h1>Create Article</h1>
        <form action="{{ route('articles.update',$article['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" value={{$article['description']}}>
            </div>
            <div class="form-group">
                <label for="prix">Price</label>
                <input type="number" class="form-control" id="prix" name="prix" placeholder="Enter price" value={{$article['prix']}}>
            </div>

            <div class="form-group">
                <label for="quantite">Quantite</label>
                <input type="number" class="form-control" id="quantite" name="quantite" placeholder="Enter price" value={{$article['quantite']}}>
            </div>
            <button type="submit" class="btn btn-primary">Enregister les modification</button>
            <button type="reset" class="btn btn-danger">Annuler les modification</button>
            <a href="{{route('articles.index')}}" class="btn btn-secondary">Anuller</a>
        </form>
    </div>
    
</body>
</html>