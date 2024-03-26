<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/search" method="GET">
        <div>
            <label for="">ID</label>
            <input type="text" name="id" id="" value=@isset($article)
            {{$article["id"]}}
            @endisset>
        </div>
        <input type="submit" value="Rechercher">
        <input type="reset" value="Reinitialiser">
        
    </form>


    @isset($article)
        <h1>Details</h1>
         
        <table>

            
            <tr> <th>ID</th> <td>{{$article["id"]}}</td></tr>
            <tr> <th>Designation</th> <td>{{$article["designation"]}}</td></tr>
            <tr> <th>Prix</th> <td>{{$article["prix"]}}</td></tr>
            <tr> <th>Quantite</th> <td>{{$article["quantite"]}}</td></tr>
                
          
        
        

        </table>
        <a href="{{route('articles.index')}}">Retour</a>
    @endisset

  
</body>
</html>