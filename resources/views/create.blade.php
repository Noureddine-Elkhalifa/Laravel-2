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


    <h1>Creation d'article</h1>
    <div class="container mt-5">
        <h1>Create Article</h1>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
            </div>
            <div class="form-group">
                <label for="prix">Price</label>
                <input type="number" class="form-control" id="prix" name="prix" placeholder="Enter price">
            </div>

            <div class="form-group">
                <label for="quantite">Quantite</label>
                <input type="number" class="form-control" id="quantite" name="quantite" placeholder="Enter price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>