<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Index</h1>
    @if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
    <a href="{{route('articles.create')}}">Ajouter</a>
    <a href="{{route('search')}}">Rechercher</a>
  

    <table>
        <tr>
            <th>ID</th>
            <th>Designation</th>
            <th>Prix</th>
            <th>Quantite</th>
        </tr>

        @foreach ($articles as $item)
            <tr>
                <td>{{$item["id"]}}</td>
                <td>{{$item["designation"]}}</td>
                <td>{{$item["prix"]}}</td>
                <td>{{$item["quantite"]}}</td>
                <td>
                    <a href="{{route('articles.show',$item)}}">Afficher</a>
                    <a href="{{route('articles.edit',$item)}}">Modifier</a>
                    <form action="{{route('articles.destroy',$item)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" onclick="return confirm('Confirmer la suppression')">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>