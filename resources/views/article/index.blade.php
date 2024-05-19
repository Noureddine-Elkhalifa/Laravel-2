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
    <div class="container my-4 mt-5">
        @if(session("message1"))
        <div class="alert alert-success">
            {{ session('message1') }}
        </div>
            
        @endif
        
        
            <h1>Liste des Articles</h1>
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Créer un article</a>
            <a href="{{ route('articles.search') }}" class="btn btn-primary">Rechercher un article</a>
        <table class=" table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Désignation</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                   <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->designation }}</td>
                    <td>{{ $item->prix_unitaire }}</td>
                    <td>{{ $item->quantite }}</td>
                    <td>
                        <a href="{{ route('articles.show',$item->id) }}" class="btn btn-primary">Afficher</a>
                        <a href="{{ route('articles.edit',$item->id) }}" class="btn btn-warning">Modifier</a>
                        
                        <form action="{{ route('articles.destroy', $item) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">Supprimer</button>
                        </form>
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>