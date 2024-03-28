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

    <h1>List des Articles</h1>
    @if (session('success'))
        
       <p class="alert alert-primary">{{session('success')}}</p>
        
    @endif
    <a href="{{route('articles.create')}}" class="btn btn-primary">Ajouter article</a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Action</th>
        </tr>

        @foreach ($articles as $item )
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['description']}}</td>
                <td>{{$item['prix']}}</td>
                <td>{{$item['quantite']}}</td>
                <td>
                    <a href="{{route('articles.show',$item['id'])}}">Afficher</a>
                    <a href="{{route('articles.edit',$item['id'])}}">Modifier</a>
                    
                    <form action="{{route('articles.destroy')}}"></form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>